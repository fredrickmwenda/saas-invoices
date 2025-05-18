<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Jobs\NewsletterSubscriptionJob;



class SubscriberController extends Controller
{
    // create subscription plans
    // subscribe a tenant to a plan
    // update subscription plans
    // cancel subscription plans
    // get all subscription plans
    // get all subscription plans for a tenant
    // get all subscriptions for a tenant
    //renew a subscription for a tenant
    //change a subscription plan for a tenant

    public function __construct()
    {
        $this->middleware('auth')->except(['store', 'show']);
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request   $request)
    {
        // $validated = $request->validated();
        // console.log($validated);
        $request->validate([
            'email' => 'required|email|unique:subscribers',
            'accept' => 'accepted',
        ]);
        $hash = Str::uuid();


        $subscriber = Subscriber::create([
            'email' => $request->email,
            'hash' => $hash, 
        ]);

        NewsletterSubscriptionJob::dispatch($subscriber);
        return response()->json(['message' => 'Subscription successful']);

        // return redirect()->back()->with('success', 'You have successfully subscribed. Please check your email spam folder.');


    }

    /**
     * Display the specified resource.
     */
    // public function show(Subscriber $subscriber)
    // {
    //     //
    // }

    public function show(string $hash)
    {
        $subscriber = Subscriber::where('hash', $hash)->firstOrFail();

        $subscriber->update([
            'hash' => null,
            'verified_at' => now()
        ]);

        return redirect(route('home'))
            ->with('success', 'You have successfully verified your email.');
    }

    public function verify($hash)
    {
        $subscriber = Subscriber::where('hash', $hash)->first();

        if (!$subscriber) {
            return redirect()->route('home')->with('error', 'Invalid or expired verification hash');
        }

        if ($subscriber->verified_at === null) {
            // Verify the email by updating the 'email_verified_at' timestamp
            $subscriber->update([
                'verified_at' => now(),
                'hash' => null, // Clear the verification hash
            ]);

            // Optionally, you can log in the user or show a success message

            return redirect()->route('home')->with('success', 'Your email has been successfully verified');
        }

        // Verify the email and update the database accordingly (e.g., set email_verified_at)

        // Optionally, you can log in the user or show a success message

        return redirect()->route('home')->with('success', 'Your email has been successfully verified');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
