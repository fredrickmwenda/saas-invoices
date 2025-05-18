<?php

namespace App\Http\Requests;

use App\Models\SubscriptionPlan;
use Illuminate\Foundation\Http\FormRequest;

class CreateSubscriptionPlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return SubscriptionPlan::$rules;
    }

    public function messages(){
        return [
            'name.required' => 'The name field is required.',
            'price.required' => 'The price field is required.',
            'duration.required' => 'The duration field is required.',
            'duration_unit.required' => 'The duration unit field is required.',
            'status.required' => 'The status field is required.',
            'description.string' => 'The description must be a string.',
            'currency.required' => 'The currency field is required.',
        ];

    }
}