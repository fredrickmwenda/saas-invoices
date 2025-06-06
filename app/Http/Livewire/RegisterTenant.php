<?php

namespace App\Http\Livewire;

use App\Models\SubscriptionPlan;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Subscription;
use App\Models\SubscriptionPayment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RegisterTenant extends Component
{
    public $step = 1;
    public $name, $email, $password, $password_confirmation;
    public $company, $address, $country_id, $state_id, $city_id;
    public $subscription_plan_id;
    public $payment_method;
    public $payment_methods = ['credit', 'cash', 'bank', 'mpesa'];
    public $plans;
    public $plan;
    public $amount;

    public function mount()
    {
        $this->plans = SubscriptionPlan::where('status', SubscriptionPlan::STATUS_ACTIVE)->get();
    }

    public function nextStep()
    {
        $this->validateStep();
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function validateStep()
    {
        if ($this->step == 1) {
            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:6',
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'company' => 'required|string|max:255',
                'address' => 'required|string',
                'country_id' => 'required|integer',
                'state_id' => 'required|integer',
                'city_id' => 'required|integer',
            ]);
        } elseif ($this->step == 3) {
            $this->validate([
                'subscription_plan_id' => 'required|exists:subscription_plans,id',
            ]);
            $this->plan = SubscriptionPlan::find($this->subscription_plan_id);
            $this->amount = $this->plan->price;
        } elseif ($this->step == 4) {
            $this->validate([
                'payment_method' => 'required|in:credit,cash,bank,mpesa',
            ]);
        }
    }

    public function register()
    {
        $this->validateStep();
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
            $tenant = Tenant::create([
                'user_id' => $user->id,
                'company' => $this->company,
                'address' => $this->address,
                'country_id' => $this->country_id,
                'state_id' => $this->state_id,
                'city_id' => $this->city_id,
            ]);
            $subscription = Subscription::create([
                'tenant_id' => $tenant->id,
                'subscription_plan_id' => $this->subscription_plan_id,
                'start_date' => now(),
                'end_date' => now()->addMonths($this->plan->duration),
                'status' => 'active',
            ]);
            SubscriptionPayment::create([
                'id' => uniqid(),
                'tenant_id' => $tenant->id,
                'subscription_id' => $subscription->id,
                'amount' => $this->amount,
                'payment_method' => $this->payment_method,
                'status' => 'successful',
            ]);
            DB::commit();
            session()->flash('success', 'Registration successful!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Registration failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.register-tenant');
    }
}
