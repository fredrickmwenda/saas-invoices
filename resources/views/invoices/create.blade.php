@extends('layouts.app')
@section('title')
    {{ __('messages.invoice.new_invoice') }}
@endsection
@section('content')
<div class="min-h-screen flex bg-gray-50">
    <!-- Sidebar -->
    <aside class="w-64 bg-purple-700 text-white flex flex-col py-8 px-6">
        <div class="flex items-center mb-10">
            <span class="text-2xl font-bold mr-2"><i class="fa fa-file-invoice"></i></span>
            <span class="text-2xl font-bold">InvoiceFlow</span>
        </div>
        <nav class="flex-1">
            <ul class="space-y-2 text-lg">
                <li><a href="{{ route('dashboard') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2 @if(request()->routeIs('dashboard')) bg-purple-900 @endif"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="{{ route('invoices.index') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2 @if(request()->routeIs('invoices.*')) bg-purple-900 @endif"><i class="fa fa-file-invoice"></i> Invoices</a></li>
                <li><a href="{{ route('clients.index') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2 @if(request()->routeIs('clients.*')) bg-purple-900 @endif"><i class="fa fa-users"></i> Clients</a></li>
                <li><a href="{{ route('reports.index') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2 @if(request()->routeIs('reports.*')) bg-purple-900 @endif"><i class="fa fa-chart-bar"></i> Reports</a></li>
            </ul>
            <div class="mt-10 border-t border-purple-600 pt-6">
                <ul class="space-y-2 text-lg">
                    <li><a href="{{ route('settings.index') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2 @if(request()->routeIs('settings.*')) bg-purple-900 @endif"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="{{ route('logout') }}" class="flex items-center gap-2 hover:bg-purple-800 rounded px-3 py-2"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </nav>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900">{{ __('messages.invoice.new_invoice') }}</h1>
            <a class="btn btn-outline-primary" href="{{ url()->previous() }}">
                <i class="fa fa-arrow-left mr-1"></i> {{ __('messages.common.back') }}
            </a>
        </div>
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-xl font-semibold mb-6 text-gray-800 flex items-center gap-2"><i class="fa fa-file-invoice"></i> Invoice Details</h2>
                @include('layouts.errors')
                <div class="alert alert-danger display-none hide" id="validationErrorsBox"></div>
                {{ Form::open(['route' => 'invoices.store', 'id' => 'invoiceForm', 'name' => 'invoiceForm']) }}
                    @include('invoices.fields')
                {{ Form::close() }}
            </div>
            <div class="mt-8">
                @include('invoices.templates.templates')
            </div>
        </div>
        <!-- Hidden fields for JS -->
        {{ Form::hidden('clients',json_encode($clients, true),['id' => 'clients']) }}
        {{ Form::hidden('products',json_encode($associateProducts, true),['id' => 'products']) }}
        {{ Form::hidden('taxes',json_encode($associateTaxes, true),['id' => 'taxes']) }}
        {{ Form::hidden('invoice_note',isset($invoice->note) ,['id' => 'invoiceNote']) }}
        {{ Form::hidden('invoice_term',isset($invoice->term) ,['id' => 'invoiceTerm']) }}
        {{ Form::hidden('invoice_recurring',isset($invoice->recurring) ,['id' => 'invoiceRecurring']) }}
        {{ Form::hidden('thousand_separator',getSettingValue('thousand_separator') ,['id' => 'thousandSeparator']) }}
        {{ Form::hidden('decimal_separator',isset($invoice->recurring) ,['id' => 'decimalSeparator']) }}
        {{ Form::hidden('default_tax',json_encode($defaultTax, true),['id' => 'defaultTax']) }}
    </main>
</div>
@endsection
