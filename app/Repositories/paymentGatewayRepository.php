<?php

namespace App\Repositories;

use App\Models\Setting;
use Illuminate\Support\Arr;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class paymentGatewayRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'stripe_key',
        'stripe_secret',
        'paypal_client_id',
        'paypal_secret',
        'mpesa_key',
        'mpesa_secret',
    ];

    protected $availableKeys = [
        'stripe_key',
        'stripe_secret',
        'paypal_client_id',
        'paypal_secret',
        'mpesa_key',
        'mpesa_secret',
        'stripe_enabled',
        'paypal_enabled',
        'mpesa_enabled',
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Setting::class;
    }

    public function store($input): bool
    {
        $input['stripe_enabled'] = (! isset($input['payment_gateway']['stripe_enabled'])) ? 0 : 1;
        $input['paypal_enabled'] = (! isset($input['payment_gateway']['paypal_enabled'])) ? 0 : 1;
        $input['mpesa_enabled'] = (! isset($input['payment_gateway']['mpesa_enabled'])) ? 0 : 1;
        $this->checkPaymentValidation($input);
        $InputArray = Arr::only($input, $this->availableKeys);
        foreach ($InputArray as $key => $value) {
            $value = $value ?? '';
            Setting::where('key', '=', $key)->first()->update(['value' => $value]);
        }

        return true;
    }

    public function edit(): array
    {
        foreach ($this->availableKeys as $key) {
            $setting = Setting::where('key', $key)->first();
            $data[$key] = isset($setting) ? $setting->value : null;
        }

        return $data;
    }

    private function checkPaymentValidation($input): void
    {
        if ($input['stripe_enabled'] === 1 &&
            (empty($input['stripe_key']) || empty($input['stripe_secret']))) {
            throw new UnprocessableEntityHttpException('Please fill up all value for stripe payment gateway.');
        }
        if ($input['paypal_enabled'] === 1 &&
            (empty($input['paypal_client_id']) || empty($input['paypal_secret']))) {
            throw new UnprocessableEntityHttpException('Please fill up all value for paypal payment gateway.');
        }
        if ($input['mpesa_enabled'] === 1 &&
            (empty($input['mpesa_key']) || empty($input['mpesa_secret']))) {
            throw new UnprocessableEntityHttpException('Please fill up all value for mpesa payment gateway.');
        }
    }
}
