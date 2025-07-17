@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Paystack Payment Result</h2>
        @if(isset($response->data) && $response->data->status === 'success')
            <div class="alert alert-success">
                Payment successful! Reference: {{ $response->data->reference }}
            </div>
        @else
            <div class="alert alert-danger">
                Payment failed or could not be verified.
            </div>
        @endif
        <a href="/" class="btn btn-primary">Return Home</a>
    </div>
@endsection
