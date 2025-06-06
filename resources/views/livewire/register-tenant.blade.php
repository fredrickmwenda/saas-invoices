@extends('layouts.auth')
@section('content')
<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="nextStep">
        @if($step == 1)
            <h4>Account Information</h4>
            <input type="text" wire:model="name" placeholder="Name" class="form-control mb-2">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="email" wire:model="email" placeholder="Email" class="form-control mb-2">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="password" wire:model="password" placeholder="Password" class="form-control mb-2">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="password" wire:model="password_confirmation" placeholder="Confirm Password" class="form-control mb-2">
        @elseif($step == 2)
            <h4>Company Information</h4>
            <input type="text" wire:model="company" placeholder="Company Name" class="form-control mb-2">
            @error('company') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="text" wire:model="address" placeholder="Address" class="form-control mb-2">
            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="number" wire:model="country_id" placeholder="Country ID" class="form-control mb-2">
            @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="number" wire:model="state_id" placeholder="State ID" class="form-control mb-2">
            @error('state_id') <span class="text-danger">{{ $message }}</span> @enderror
            <input type="number" wire:model="city_id" placeholder="City ID" class="form-control mb-2">
            @error('city_id') <span class="text-danger">{{ $message }}</span> @enderror
        @elseif($step == 3)
            <h4>Choose Subscription Plan</h4>
            <select wire:model="subscription_plan_id" class="form-control mb-2">
                <option value="">Select Plan</option>
                @foreach($plans as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->name }} - ${{ $plan->price }}</option>
                @endforeach
            </select>
            @error('subscription_plan_id') <span class="text-danger">{{ $message }}</span> @enderror
        @elseif($step == 4)
            <h4>Payment</h4>
            <div>Amount: ${{ $amount }}</div>
            <select wire:model="payment_method" class="form-control mb-2">
                <option value="">Select Payment Method</option>
                @foreach($payment_methods as $method)
                    <option value="{{ $method }}">{{ ucfirst($method) }}</option>
                @endforeach
            </select>
            @error('payment_method') <span class="text-danger">{{ $message }}</span> @enderror
        @endif

        <div class="mt-3">
            @if($step > 1)
                <button type="button" wire:click="prevStep" class="btn btn-secondary">Back</button>
            @endif
            @if($step == 4)
                <button type="button" wire:click="register" class="btn btn-primary">
                    Register & Pay
                </button>
            @else
                <button type="submit" class="btn btn-primary">
                    Next
                </button>
            @endif
        </div>
    </form>
</div>
@endsection
