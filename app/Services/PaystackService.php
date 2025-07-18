<?php

namespace App\Services;

use Yabacon\Paystack;
use Yabacon\Paystack\Exception\ApiException;

class PaystackService
{
    protected $paystack;

    public function __construct()
    {
        $this->paystack = new Paystack(config('payments.paystack.secret_key'));
    }

    /**
     * Initialize a transaction
     */
    public function initialize($email, $amount, $callback_url)
    {
        try {
            $response = $this->paystack->transaction->initialize([
                'email' => $email,
                'amount' => $amount * 100, // Paystack expects amount in kobo
                'callback_url' => $callback_url,
            ]);
            return $response;
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Verify a transaction
     */
    public function verify($reference)
    {
        try {
            $response = $this->paystack->transaction->verify(['reference' => $reference]);
            return $response;
        } catch (ApiException $e) {
            throw $e;
        }
    }
}