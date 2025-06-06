<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentGatewayController;
use App\Models\City;
use App\Models\SubscriptionPlan;
use App\Models\Client;
use App\Models\Country;
use App\Models\State;
use App\Models\Subscription;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $plans = SubscriptionPlan::where('status', SubscriptionPlan::STATUS_ACTIVE)->get();
        
        $payment_methods = getPaymentMethods();
        // dd($payment_methods);
        $countries = Country::get();
        // dd($countries);
        return view('auth.register', compact('plans', 'payment_methods', 'countries'));
    }

//     Route::get('/get-states/{country_id}', [LocationController::class, 'getStates']);
// Route::get('/get-cities/{state_id}', [LocationController::class, 'getCities']);
      public function getStates($country_id)
    {
        return response()->json(State::where('country_id', $country_id)->get());
    }

    public function getCities($state_id)
    {
        return response()->json(City::where('state_id', $state_id)->get());
    }
    /**
     * Handle an incoming registration request.
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        /** @var User $user */
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'contact' =>$request->contact,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('client');
        $client = Client::create([
            'user_id' => $user->id,
            'company_name' =>$request->company_name,
            'company_logo' => $request->company_logo,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'website' => $request->website,
            'contact' =>$request->contact

        ]);

        // check if they have paid the subscription
        $subscription = Subscription::where('client_id', $client->id )->where('status', Subscription::STATUS_ACTIVE)->first();
        if(!$subscription){
            //revert the whole data creation of the client and 
           return back()->with('message', ' please login and make payment for a suitable subscription plan');
        }

        event(new Registered($user));


        Auth::login($user);

        return redirect(RouteServiceProvider::CLIENT_HOME);
    }
}
