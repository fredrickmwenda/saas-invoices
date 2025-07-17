<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Subscription;
use App\Services\PaystackService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class SubscriptionPaymentController extends Controller
{
    protected $paystack;

    public function __construct(PaystackService $paystack)
    {
        $this->paystack = $paystack;
    }

    // Start payment for subscription
    public function pay(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
            'callback_url' => 'required|url',
        ]);
        $response = $this->paystack->initialize($request->email, $request->amount, $request->callback_url);
        return response()->json($response);
    }

    // Paystack callback for subscription
    public function callback(Request $request)
    {
        $reference = $request->query('reference');
        $response = $this->paystack->verify($reference);
        if (isset($response->data) && $response->data->status === 'success') {
            // Example: Activate subscription for the client
            DB::transaction(function () use ($response) {
                $client = Client::where('email', $response->data->customer->email)->first();
                if ($client) {
                    Subscription::create([
                        'client_id' => $client->id,
                        'status' => 'active',
                        'reference' => $response->data->reference,
                        // Add other fields as needed
                    ]);
                }
            });
        }
        return view('payments.paystack_callback', ['response' => $response]);
    }
}
