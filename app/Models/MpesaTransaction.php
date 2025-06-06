<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MpesaTransaction extends Model
{
    protected $fillable = [
        'merchant_request_id',
        'checkout_request_id',
        'phone',
        'amount',
        'reference',
        'description',
        'result_code',
        'result_desc',
        'transaction_date',
        'mpesa_receipt_number',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
