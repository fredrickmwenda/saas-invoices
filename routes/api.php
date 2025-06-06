<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaPaymentController;
use App\Http\Controllers\PayPalPaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Mpesa Callback Route
Route::post('mpesa/callback', [MpesaPaymentController::class, 'handleCallback']);

// PayPal Routes
Route::prefix('paypal')->group(function () {
    Route::post('webhook', [PayPalPaymentController::class, 'handleWebhook']);
    Route::post('create-order', [PayPalPaymentController::class, 'createOrder']);
    Route::post('capture-order', [PayPalPaymentController::class, 'captureOrder']);
});
