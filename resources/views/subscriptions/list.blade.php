{{-- resources/views/subscriptions/list.blade.php --}}
@extends('layouts.app')
@section('title')
    {{ __('messages.supscription plans') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-12 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="page-heading">{{ __('messages.supscription plans') }}</h1>
                @if (Auth::user()->hasRole('admin'))
                    <button type="button" class="btn btn-primary" id="openSubscriptionPlanModal"
                        data-bs-toggle="modal" data-bs-target="#createSubscriptionPlanModal">
                        {{ __('messages.create subscription plan') }}
                    </button>
                @endif
            </div>
        </div>
        <div class="row g-4 justify-content-center mt-4">
            @foreach ($subscriptionPlans as $subscriptionPlan)
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="pricing-column overflow-hidden position-relative bg-white rounded-10 deep-shadow">
                        <h3 class="h5 plan_title">{{ $subscriptionPlan->name }} Package</h3>
                        <span class="pricing-label d-block mt-4">From only</span>
                        <h4 class="h2 mt-2 monthly-price price_title">
                            {{ getCurrencySymbol() }}{{ $subscriptionPlan->price }}<span>/Year Excl. VAT</span>
                        </h4>
                        <p class="mt-4 description__">{{ $subscriptionPlan->description }}</p>
                        <ul class="feature-list mt-4">
                            @foreach (json_decode($subscriptionPlan->features) as $feature)
                                <li><i class="fa-solid fa-check"></i>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        @if (Auth::user()->hasRole('admin'))
                            <button type="button" class="btn btn-primary edit-subscription-plan"
                                data-id="{{ $subscriptionPlan->id }}" data-bs-toggle="modal"
                                data-bs-target="#editSubscriptionPlanModal">{{ __('messages.edit') }}</button>
                            <button type="button" class="btn btn-danger delete-subscription-plan"
                                data-id="{{ $subscriptionPlan->id }}">{{ __('messages.delete') }}</button>
                        @endif
                        @if (Auth::user()->hasRole('client'))
                            <button type="button" class="btn btn-primary subscribe-to-plan"
                                data-id="{{ $subscriptionPlan->id }}">{{ __('messages.subscribe') }}</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        @include('subscriptions.create_subscription_plan_modal')
        @include('subscriptions.edit_subscription_plan_modal')
        {{ Form::hidden('currency', getCurrencySymbol(), ['id' => 'currency']) }}
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the modal element
            const modalElement = document.getElementById('createSubscriptionPlanModal');
            
            // Initialize the modal
            const modal = new bootstrap.Modal(modalElement);
            
            // Get the button that opens the modal
            const openModalBtn = document.getElementById('openSubscriptionPlanModal');
            
            // Add click event listener to the button
            if (openModalBtn) {
                openModalBtn.addEventListener('click', function() {
                    modal.show();
                });
            }

            // Handle form submission
            const form = document.getElementById('createSubscriptionPlanForm');
            const submitBtn = document.getElementById('btnAddSubscriptionPlan');
            
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = submitBtn.getAttribute('data-loading-text');
                    
                    // Add your form submission logic here
                    // After successful submission:
                    // modal.hide();
                });
            }

            // Reset form when modal is hidden
            modalElement.addEventListener('hidden.bs.modal', function() {
                form.reset();
                // Clear any error messages
                document.querySelectorAll('.text-danger').forEach(element => {
                    element.textContent = '';
                });
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Add Subscription Plan';
            });
        });
    </script>
@endsection