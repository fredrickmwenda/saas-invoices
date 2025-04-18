@extends('layouts.auth')
@section('title')
{{__(' Forgot Password')}}
@endsection
@section('content')


<div class="m-auto m-1230">
    <div class="row align-items-center">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{asset('trezo/images/forgot.jpg')}}" class="rounded-3" alt="login">
        </div>
        <div class="col-lg-6">
            <div class="mw-480 ms-lg-auto">
                <a href="#" class="d-inline-block mb-4">
                    <img src="{{ getLogoUrl() }}" class="rounded-3 for-light-logo" alt="login">
                    <img src="{{asset('trezo/images/white-logo.svg')}}" class="rounded-3 for-dark-logo" alt="login">
                </a>
                <h3 class="fs-28 mb-2">Forgot your password?</h3>
                <p class="fw-medium fs-16 mb-4">Enter the email address you used when you joined and we’ll send you instructions to reset your password.</p>
  
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="label text-secondary">Email Address</label>
                        <input type="email" class="form-control h-55" placeholder="example@trezo.com">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                            <div class="d-flex align-items-center justify-content-center py-1">
                                <i class="material-symbols-outlined text-white fs-20 me-2">autorenew</i>
                                <span>Send</span>
                            </div>
                        </button>
                    </div>
                    <div class="form-group">
                        <p>Back to <a href="{{route('login')}}" class="fw-medium text-primary text-decoration-none">Login</a></p>
                    </div>

                    <!-- <p>
                        Don’t have an account.
                        <a href="#" class="fw-medium text-primary text-decoration-none">Register</a>
                    </p> -->
            
            </form>
        </div>
    </div>
</div>
</div>

@endsection