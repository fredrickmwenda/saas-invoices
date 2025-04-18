
@extends('layouts.app')
@section('title')
    {{__('messages.services')}}

@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column ">
            @include('flash::message')
            <livewire:sub-service-table/>
        </div>
    </div>
    @include(services.sub-service.sub_service_modal')
    <!-- @include('services.service.edit_service_modal') -->
    {{ Form::hidden('currency', getCurrencySymbol(),['id' => 'currency']) }}
    
@endsection
