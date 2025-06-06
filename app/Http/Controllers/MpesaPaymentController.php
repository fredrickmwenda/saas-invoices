<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\MpesaTransaction;
use App\Models\User;

class MpesaPaymentController extends Controller
{
    protected $baseUrl;
    protected $consumerKey;
    protected $consumerSecret;
    protected $passkey;
    protected $shortcode;
    protected $callbackUrl;

    public function __construct()
    {
        // Initialize Mpesa configurations
        $this->baseUrl = config('services.mpesa.base_url');
        $this->consumerKey = config('services.mpesa.consumer_key');
        $this->consumerSecret = config('services.mpesa.consumer_secret');
        $this->passkey = config('services.mpesa.passkey');
        $this->shortcode = config('services.mpesa.shortcode');
        $this->callbackUrl = config('services.mpesa.callback_url');
    }

    public function stkPush(Request $request)
    {
        try {
            $phone = $request->phone_number;
            $amount = $request->amount;
            
            // Format phone number
            $phone = $this->formatPhoneNumber($phone);
            
            // Generate timestamp
            $timestamp = date('YmdHis');
            
            // Generate password
            $password = base64_encode($this->shortcode . $this->passkey . $timestamp);
            
            // Get access token
            $token = $this->getAccessToken();
            
            if (!$token) {
                return response()->json(['success' => false, 'message' => 'Could not get access token']);
            }
            
            // Make STK Push request
            $response = Http::withToken($token)
                ->post($this->baseUrl . '/mpesa/stkpush/v1/processrequest', [
                    'BusinessShortCode' => $this->shortcode,
                    'Password' => $password,
                    'Timestamp' => $timestamp,
                    'TransactionType' => 'CustomerPayBillOnline',
                    'Amount' => $amount,
                    'PartyA' => $phone,
                    'PartyB' => $this->shortcode,
                    'PhoneNumber' => $phone,
                    'CallBackURL' => $this->callbackUrl,
                    'AccountReference' => 'Invoice Registration',
                    'TransactionDesc' => 'Registration Payment'
                ]);
            
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'STK push sent successfully',
                    'data' => $response->json()
                ]);
            }
            
            return response()->json([
                'success' => false,
                'message' => 'STK push failed',
                'error' => $response->json()
            ]);

        } catch (\Exception $e) {
            Log::error('Mpesa STK Push Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function getAccessToken()
    {
        try {
            $response = Http::withBasicAuth($this->consumerKey, $this->consumerSecret)
                ->get($this->baseUrl . '/oauth/v1/generate?grant_type=client_credentials');
            
            if ($response->successful()) {
                return $response->json()['access_token'];
            }
            
            return null;
        } catch (\Exception $e) {
            Log::error('Mpesa Access Token Error: ' . $e->getMessage());
            return null;
        }
    }

    protected function formatPhoneNumber($phone)
    {
        // Remove any spaces, dashes, or plus signs
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // If number starts with 0, replace with 254
        if (substr($phone, 0, 1) == '0') {
            $phone = '254' . substr($phone, 1);
        }
        
        // If number doesn't start with 254, add it
        if (substr($phone, 0, 3) != '254') {
            $phone = '254' . $phone;
        }
        
        return $phone;
    }

    public function handleCallback(Request $request)
    {
        try {
            Log::info('Mpesa Callback received:', $request->all());

            $callbackData = $request->Body->stkCallback;
            $merchantRequestId = $callbackData->MerchantRequestID;
            $checkoutRequestId = $callbackData->CheckoutRequestID;
            $resultCode = $callbackData->ResultCode;
            $resultDesc = $callbackData->ResultDesc;

            // Find the transaction
            $transaction = MpesaTransaction::where('merchant_request_id', $merchantRequestId)
                ->where('checkout_request_id', $checkoutRequestId)
                ->first();

            if (!$transaction) {
                Log::error('Transaction not found for callback:', [
                    'merchant_request_id' => $merchantRequestId,
                    'checkout_request_id' => $checkoutRequestId
                ]);
                return response()->json(['success' => false, 'message' => 'Transaction not found']);
            }

            if ($resultCode == 0) {
                // Payment successful
                $callbackMetadata = $callbackData->CallbackMetadata->Item;
                $amount = null;
                $mpesaReceiptNumber = null;
                $transactionDate = null;
                $phoneNumber = null;

                foreach ($callbackMetadata as $item) {
                    switch ($item->Name) {
                        case 'Amount':
                            $amount = $item->Value;
                            break;
                        case 'MpesaReceiptNumber':
                            $mpesaReceiptNumber = $item->Value;
                            break;
                        case 'TransactionDate':
                            $transactionDate = $item->Value;
                            break;
                        case 'PhoneNumber':
                            $phoneNumber = $item->Value;
                            break;
                    }
                }

                // Update transaction details
                $transaction->update([
                    'status' => 'completed',
                    'result_code' => $resultCode,
                    'result_desc' => $resultDesc,
                    'mpesa_receipt_number' => $mpesaReceiptNumber,
                    'transaction_date' => date('Y-m-d H:i:s', strtotime($transactionDate))
                ]);

                // If this is a registration payment, complete the registration process
                if ($transaction->reference === 'Registration Payment') {
                    $this->completeRegistration($transaction);
                }

                return response()->json(['success' => true, 'message' => 'Payment completed successfully']);
            } else {
                // Payment failed
                $transaction->update([
                    'status' => 'failed',
                    'result_code' => $resultCode,
                    'result_desc' => $resultDesc
                ]);

                return response()->json(['success' => false, 'message' => 'Payment failed', 'reason' => $resultDesc]);
            }
        } catch (\Exception $e) {
            Log::error('Mpesa Callback Error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error processing callback']);
        }
    }

    private function completeRegistration(MpesaTransaction $transaction)
    {
        try {
            // Find the user associated with this payment
            $user = $transaction->user;
            
            if ($user) {
                // Activate the user's subscription
                // You'll need to implement this based on your subscription logic
                $subscriptionPlan = $user->subscription_plan;
                if ($subscriptionPlan) {
                    $user->subscriptions()->create([
                        'subscription_plan_id' => $subscriptionPlan->id,
                        'start_date' => now(),
                        'end_date' => now()->addDays($subscriptionPlan->duration),
                        'status' => 'active',
                        'payment_status' => 'paid'
                    ]);
                }

                // Update user status if needed
                $user->update(['status' => 'active']);
            }
        } catch (\Exception $e) {
            Log::error('Registration Completion Error: ' . $e->getMessage());
        }
    }
}
