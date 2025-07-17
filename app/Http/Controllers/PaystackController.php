<?php

namespace App\Http\Controllers;

use App\Services\PaystackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class PaystackController extends Controller
{
    protected $paystack;

    public function __construct(PaystackService $paystack)
    {
        $this->paystack = $paystack;
    }

    public function initialize(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
            'callback_url' => 'required|url',
        ]);
        $response = $this->paystack->initialize($request->email, $request->amount, $request->callback_url);
        return response()->json($response);
    }

    public function callback(Request $request)
    {
        $reference = $request->query('reference');
        $response = $this->paystack->verify($reference);
        // Handle subscription activation or registration here
        // ...
        return view('payments.paystack_callback', ['response' => $response]);
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $event = $request->header('x-paystack-signature');
        Log::info('Paystack Webhook Received', [
            'headers' => $request->headers->all(),
            'payload' => $payload,
        ]);
        // Optionally, verify signature here for security
        $data = $request->all();
        // Handle event types, e.g. charge.success
        if (isset($data['event']) && $data['event'] === 'charge.success') {
            // Implement your logic for successful payment
            // e.g., activate subscription, notify user, etc.
        }
        return response()->json(['status' => 'success']);
    }
}
