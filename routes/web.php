<?php

use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client as Client;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceTemplateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentGatewayController;
use App\Http\Controllers\PaymentQrCodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TagController;

use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MediaManagerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionPlanController;
use App\Http\Controllers\MpesaPaymentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::get('/get-states/{country_id}', [RegisteredUserController::class, 'getStates']);
Route::get('/get-cities/{state_id}', [RegisteredUserController::class, 'getCities']);

Route::middleware(['xss'])->group(function () {
    Route::get('/', function () {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return Redirect::to(getDashboardURL());
            }

            return Redirect::to(getClientDashboardURL());
        }
    

        return redirect(route('login'));
        //return redirect(route('index'));
    });

    // Route::get('/', [
    // 'index'])->name('index');

    // add logout logic to clear session

    Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    



    //sending contact form quote
    
    Route::post('update-language', [UserController::class, 'updateLanguage'])->name('change-language');
    //Notification routes
    Route::get('/notification/{notification}/read', [NotificationController::class, 'readNotification'])->name('read.notification');
    Route::post('/read-all-notification', [NotificationController::class, 'readAllNotification'])->name('read.all.notification');
    //update darkMode Field
    Route::get('update-dark-mode', [UserController::class, 'updateDarkMode'])->name('update-dark-mode');

    Route::get('invoice/{invoiceId}', [InvoiceController::class, 'showPublicInvoice'])->name('invoice-show-url');
    Route::get('quote/{quoteId}', [QuoteController::class, 'showPublicQuote'])->name('quote-show-url');
    Route::get('invoice/{invoiceId}/payment', [InvoiceController::class, 'showPublicPayment'])->name('invoices.public-payment');
    Route::get('invoice-pdf/{invoice}', [InvoiceController::class, 'getPublicInvoicePdf'])->name('public-view-invoice.pdf');
    Route::get('quote-pdf/{quote}', [QuoteController::class, 'getPublicQuotePdf'])->name('public-view-quote.pdf');
});

Route::prefix('admin')->middleware(['auth', 'xss', 'role:admin'])->group(function () {
    // View logs
    Route::redirect('logs', 'log-viewer');

    Route::get('generate-recurring-invoice', function () {
        Artisan::call('in:create-recurring-invoice');
    });

    // Admin dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('payment-overview', [DashboardController::class, 'paymentOverview'])->name('payment-overview');
    Route::get('invoices-overview', [DashboardController::class, 'invoiceOverview'])->name('invoices-overview');
    Route::get(
        'yearly-income-chart',
        [DashboardController::class, 'getYearlyIncomeChartData']
    )->name('yearly-income-chart');

    // User route

    Route::get('analytics', [AnalyticsController::class, 'index'])->name('analytics');

    //subscription plans
    Route::prefix('subscription-plans')->name('subscription-plans.')->group(function () {
        //index
        Route::get('/', [SubscriptionPlanController::class, 'index'])->name('index');
        //list subscription plans in card view
        Route::get('list', [SubscriptionPlanController::class, 'listSubscriptionPlans'])->name('list');
        Route::get('create', [SubscriptionPlanController::class, 'create'])->name('create');
        Route::post('store', [SubscriptionPlanController::class, 'store'])->name('store');
        Route::get('{id}/edit', [SubscriptionPlanController::class, 'edit'])->name('edit');
        Route::put('{id}', [SubscriptionPlanController::class, 'update'])->name('update');
        Route::delete('{id}', [SubscriptionPlanController::class, 'destroy'])->name('destroy');
        Route::post('bulk-action', [SubscriptionPlanController::class, 'bulkAction'])->name('bulk-action');
        Route::post('{id}/change-status', [SubscriptionPlanController::class, 'changeStatus'])->name('change-status');
    });
    //Subscription route


    // Client route
    Route::resource('clients', ClientController::class);
    Route::get('states-list', [ClientController::class, 'getStates'])->name('states-list');
    Route::get('cities-list', [ClientController::class, 'getCities'])->name('cities-list');

    Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
    Route::post('/tag', [TagController::class, 'store'])->name('tags.store');
    Route::get('/tags/edit/{id}', [TagController::class, 'edit'])->name('tags.edit');
    Route::post('/tags/update-tag', [TagController::class, 'update'])->name('tags.update');
    Route::delete('/tags/delete/{id}', [TagController::class, 'destroy'])->name('tags.delete');

 
    //Category Route



    Route::get('/media-manager/get-files', [MediaManagerController::class, 'index'])->name('uppy.index');
    Route::get('/media-manager/get-selected-files', [MediaManagerController::class, 'selectedFiles'])->name('uppy.selectedFiles');
    Route::post('/media-manager/add-files', [MediaManagerController::class, 'store'])->name('uppy.store');
    Route::get('/media-manager/delete-files/{id}', [MediaManagerController::class, 'delete'])->name('uppy.delete');

    //service routes
    Route::resource('services', ServiceController::class);



    //Invoice
    Route::resource('invoices', InvoiceController::class);
    Route::prefix('invoices')->name('invoices.')->group(function () {
        Route::get('/{invoice}/pdf', [InvoiceController::class, 'convertToPdf'])->name('pdf');
        Route::get('/{productId}/product', [InvoiceController::class, 'getProduct'])->name('get-product');
        Route::get('/{currencyId}/currency', [InvoiceController::class, 'getInvoiceCurrency'])->name('get-currency');
        Route::post(
            '/turn-off-recurring/{invoice}',
            [InvoiceController::class, 'updateRecurring']
        )->name('update-recurring');
    });
    Route::post('change-invoice-status/{invoice}/{status}', [InvoiceController::class, 'updateInvoiceStatus'])->name('send-invoice');
    Route::post('invoice-payment-reminder/{invoiceId}', [InvoiceController::class, 'invoicePaymentReminder'])->name('invoice.payment-reminder');

    //Quote
    Route::resource('quotes', QuoteController::class);
    Route::get('quotes/{quote}/pdf', [QuoteController::class, 'convertToPdf'])->name('quotes.pdf');
    Route::get('quotes/{quote}/print', [QuoteController::class, 'printQuote'])->name('print.pdf');
    Route::get('convert-to-invoice', [QuoteController::class, 'convertToInvoice'])->name('quotes.convert-to-invoice');

    //Tax
    Route::resource('taxes', TaxController::class);
    Route::post('taxes/{tax}/default-status', [TaxController::class, 'defaultStatus'])->name('taxes.default-status');

    //Payment Qr-Codes
    Route::resource('payment-qr-codes', PaymentQrCodeController::class);
    Route::post('payment-qr-codes/{paymentQrCode}', [PaymentQrCodeController::class, 'update'])->name('payment-update');
    Route::post('payment-qr-codes/{paymentQrCode}/default-status', [PaymentQrCodeController::class, 'defaultStatus'])->name('payment-qr-codes.default-status');

    //Payment
    Route::get('transactions', [PaymentController::class, 'index'])->name('transactions.index');

    Route::resource('payments', AdminPaymentController::class);
    Route::get('get-current-date-format', [AdminPaymentController::class, 'getCurrentDateFormat'])->name('get-current-date-format');

    // payment approved
    Route::get('change-transaction-status/{id}', [PaymentController::class, 'changeTransactionStatus'])->name('change-transaction-status');

    //Setting Route
    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
    Route::post('invoice-settings', [SettingController::class, 'invoiceUpdate'])->name('invoice-settings.settings');
    Route::get('invoice-template/{key}',[SettingController::class, 'editInvoiceTemplate'])->name('invoice-template.edit');
    Route::post('payment-gateway/store', [PaymentGatewayController::class, 'store'])->name('payment-gateway.store');
    Route::get('payment-gateway', [PaymentGatewayController::class, 'show'])->name('payment-gateway.show');
    //invoice template
    Route::get('template-setting', [InvoiceTemplateController::class, 'invoiceTemplateView'])->name('invoiceTemplate');
    Route::post(
        'change-invoice-template',
        [InvoiceTemplateController::class, 'invoiceTemplateUpdate']
    )->name('invoiceTemplate.update');

    // Currency
    Route::resource('currencies', CurrencyController::class);

    Route::post('user/{user}/change-status', [UserController::class, 'changeUserStatus'])->name('users.change-status');

    //getInvoiceDueAmount
    Route::get(
        'payments.get-invoiceAmount/{id}',
        [AdminPaymentController::class, 'getInvoiceDueAmount']
    )->name('payments.get-invoiceAmount');

    //Export Invoices Excel admin route
    Route::get('/invoices-excel', [InvoiceController::class, 'exportInvoicesExcel'])->name('admin.invoicesExcel');
    // export quotes excel admin route
    Route::get('/quotes-excel', [QuoteController::class, 'exportQuotesExcel'])->name('admin.quotesExcel');
    // export quotes pdf admin route
    Route::get('quotes-pdf', [QuoteController::class, 'exportQuotesPdf'])->name('admin.quotes.pdf');
    Route::get(
        'transactions-excel',
        [paymentController::class, 'exportTransactionsExcel']
    )->name('admin.transactionsExcel');
    // export transactions pdf admin route
    Route::get(
        'transactions-pdf',
        [paymentController::class, 'exportTransactionsPdf']
    )->name('admin.export.transactions.pdf');

    // export payments excel admin route
    Route::get(
        'admin-payments-excel',
        [AdminPaymentController::class, 'exportAdminPaymentsExcel']
    )->name('admin.paymentsExcel');

    // export payments pdf admin route
    Route::get(
        'admin-payments-pdf',
        [AdminPaymentController::class, 'exportAdminPaymentsPDF']
    )->name('admin.payments.pdf');

    Route::get('invoices-pdf', [InvoiceController::class, 'exportInvoicesPdf'])->name('admin.invoices.pdf');

    //Clear cache
    Route::get('clear-cache', [DashboardController::class, 'clearCache'])->name('clear-cache');

    Route::get('invoice-settings/', [SettingController::class, 'invoiceSettings'])->name('settings.invoice-settings');

    // currency reports for invoices route
    Route::get('currency-reports', [DashboardController::class, 'currencyReports'])->name('currency.reports');
});


// Route::prefix('client')->middleware(['auth', 'xss', 'role:client'])->group(function () {
//     Route::get(
//         'dashboard',
//         [Client\DashboardController::class, 'index']
//     )->name('client.dashboard');

//     Route::get('transactions', [Client\PaymentController::class, 'index'])->name('client.transactions.index');

//     //Invoice
//     Route::get(
//         'invoices',
//         [Client\InvoiceController::class, 'index']
//     )->name('client.invoices.index');
//     Route::get(
//         'invoices/{invoice}',
//         [Client\InvoiceController::class, 'show']
//     )->name('client.invoices.show');
//     Route::get(
//         'invoices/{invoice}/pdf',
//         [Client\InvoiceController::class, 'convertToPdf']
//     )->name('clients.invoices.pdf');

//     //Quote
//     Route::name('client.')->group(function () {
//         Route::resource('quotes', Client\QuoteController::class);
//     });
//     Route::get(
//         'quotes/{quote}/pdf',
//         [Client\QuoteController::class, 'convertToPdf']
//     )->name('client.quotes.pdf');

//     Route::get(
//         'quotes/{quote}/print',
//         [Client\QuoteController::class, 'printQuote']
//     )->name('client.quotes.print');


//     //export quotes Excel file in client route
//     Route::get('/quotes-excel', [Client\QuoteController::class, 'exportQuotesExcel'])->name('client.quotesExcel');
//     // export quotes Pdf in client route
//     Route::get('quotes-pdf', [Client\QuoteController::class, 'exportQuotesPdf'])->name('client.export.quotes.pdf');
//     // export invoices Pdf in client route
//     Route::get('/invoice-excel', [client\InvoiceController::class, 'exportInvoicesExcel'])->name('client.invoicesExcel');
//     Route::get('invoice-pdf', [client\InvoiceController::class, 'exportInvoicesPdf'])->name('client.invoices.pdf');
//     Route::get('transactions-excel', [client\PaymentController::class, 'exportTransactionsExcel'])->name('client.transactionsExcel');
//     // export transactions Pdf in client route
//     Route::get('transactions-pdf', [client\PaymentController::class, 'exportTransactionsPdf'])->name('client.export.transactions.pdf');

//     // currency reports for invoices route
//     Route::get('currency-reports', [DashboardController::class, 'currencyReports'])->name('client.currency.reports');
// });
Route::resource('users', UserController::class);
Route::prefix('client')->middleware('xss')->group(function () {
    //contacts
    Route::resource('contacts', ClientContactController::class);

    //Product Route
    Route::resource('products', ProductController::class);

    Route::resource('categories', CategoryController::class)->names([
        'index' => 'category.index',
        'create' => 'category.create',
        'show' => 'category.show',
        'store' => 'category.store',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.destroy',
    ]);

    Route::get('invoices/{invoice}/payment', [Client\PaymentController::class, 'show'])->name('clients.payments.show');
    //Payments
    Route::post('payments', [Client\PaymentController::class, 'store'])->name('clients.payments.store');
    Route::post('stripe-payment', [Client\StripeController::class, 'createSession'])->name('client.stripe-payment');
    Route::get('razorpay-onboard', [Client\RazorpayController::class, 'onBoard'])->name('razorpay.init');
    Route::get('paypal-onboard', [Client\PaypalController::class, 'onBoard'])->name('paypal.init');

    Route::get('payment-success', [Client\StripeController::class, 'paymentSuccess'])->name('payment-success');
    Route::get('failed-payment', [Client\StripeController::class, 'handleFailedPayment'])->name('failed-payment');

    Route::get('paypal-payment-success', [Client\PaypalController::class, 'success'])->name('paypal.success');
    Route::get('paypal-payment-failed', [Client\PaypalController::class, 'failed'])->name('paypal.failed');

    // razorpay payment
    Route::post('razorpay-payment-success', [Client\RazorpayController::class, 'paymentSuccess'])
        ->name('razorpay.success');
    Route::post('razorpay-payment-failed', [Client\RazorpayController::class, 'paymentFailed'])
        ->name('razorpay.failed')->middleware('');
    Route::get('razorpay-payment-webhook', [Client\RazorpayController::class, 'paymentSuccessWebHook'])
        ->name('razorpay.webhook');
});


Route::middleware(['auth', 'xss'])->group(function () {
    // Update profile
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.setting');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('update.profile.setting');
    Route::put('/change-user-password', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::get('get-all-language', [UserController::class, 'getLanguages'])->name('get-all-language');
    Route::get('quotes/{productId}/product', [QuoteController::class, 'getProduct'])->name('quotes.get-product');

    // Download Attachment
    Route::get('transactions-attachment/{id}', [PaymentController::class, 'downloadAttachment'])->name('transaction.attachment');

    Route::get('payment-notes/{paymentId}', [PaymentController::class, 'showPaymentNotes'])->name('payment-notes.show');
});

Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/subscribe/verify/{hash}', [SubscriberController::class, 'verify'])->name('verify');



Route::get('/get-api-key', function () {
    return response()->json([
        'apiKey' => env('HERE_API_KEY')
    ]);
});


// Global dashboard route for sidebar and general use
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Reports index route (placeholder)
Route::get('/reports', function () {
    return view('reports.index'); // You can replace this with your actual controller later
})->name('reports.index');

// Settings index route (placeholder)
Route::get('/settings', function () {
    return view('settings.index'); // You can replace this with your actual controller later
})->name('settings.index');


require __DIR__ . '/upgrade.php';

// Auth::routes(['verify' => true]);

// Mpesa Payment Routes
Route::post('mpesa/stk-push', [MpesaPaymentController::class, 'stkPush'])->name('mpesa.stk-push');

