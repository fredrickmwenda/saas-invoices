@extends('layouts.app')
@section('title')
    {{__('messages.supscription plans')}}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <livewire:subscription-plan-table/>
        </div>
    </div>
    @include('subscriptions.create_subscription_plan_modal')
    @include('subscriptions.edit_subscription_plan_modal')
    {{ Form::hidden('currency', getCurrencySymbol(),['id' => 'currency']) }}
    
@endsection



