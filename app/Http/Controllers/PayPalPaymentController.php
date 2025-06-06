<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PayPalPaymentController extends Controller
{
    public function handleWebhook(Request $request)
    {
        Log::info('PayPal Webhook received', $request->all());

        $paymentData = $request->all();
        $transactionId = $paymentData['id'] ?? null;
        $status = $paymentData['status'] ?? '';

        if (!$transactionId) {
            return response()->json(['error' => 'Transaction ID not found'], 400);
        }

        if ($status === 'COMPLETED') {
            // Find subscription by transaction ID
            $subscription = Subscription::where('paypal_transaction_id', $transactionId)->first();

            if ($subscription) {
                $subscription->status = 'active';
                $subscription->save();

                return response()->json(['message' => 'Payment processed successfully']);
            }

            return response()->json(['error' => 'Subscription not found'], 404);
        }

        return response()->json(['error' => 'Payment not completed'], 400);
    }

    public function createOrder(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:subscription_plans,id',
        ]);

        $plan = SubscriptionPlan::find($request->plan_id);
        
        if (!$plan) {
            return response()->json(['error' => 'Plan not found'], 404);
        }

        // Create order logic here
        // This will be called from the frontend when initializing PayPal payment
        return response()->json([
            'plan' => $plan,
            'amount' => $plan->price,
            'currency' => $plan->currency,
        ]);
    }

    public function captureOrder(Request $request)
    {
        $request->validate([
            'order_id' => 'required|string',
        ]);

        // Verify the payment with PayPal API
        // Update subscription status
        // Return success response
        
        return response()->json(['success' => true]);
    }
}
