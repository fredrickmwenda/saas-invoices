@extends('layouts.auth')
@section('title')
{{ __('messages.login.login') }}
@endsection
@section('content')

<div class="m-auto m-1230">
  
 
        
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-4 p-lg-5">
               
                    
               <div class="mw-480 ms-lg-auto">
                <a href="#" class="d-inline-block mb-4">
                    <img src="{{ getLogoUrl() }}" class="rounded-3 for-light-logo" alt="login">
                    <img src="{{asset('trezo/images/white-logo.svg')}}" class="rounded-3 for-dark-logo" alt="login">
                </a>
                <h3 class="fs-28 mb-2">Welcome back to Invoices Center!</h3>
                <p class="fw-medium fs-16 mb-4">Sign In with social account or enter your details</p>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">
                            <img src="{{asset('trezo/images/google.svg')}}" alt="google">
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">
                            <img src="{{asset('trezo/images/facebook2.svg')}}" alt="facebook2">
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="#" target="_blank" class="btn btn-outline-secondary bg-transparent w-100 py-2 hover-bg mb-4" style="border-color: #D6DAE1;">
                            <img src="{{asset('trezo/images/apple.svg')}}" alt="apple">
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="label text-secondary">Email Address</label>
                        <input type="email" name="email" class="form-control h-55" placeholder="email@gmail.com">
                    </div>
                    <div class="form-group mb-sm-7 mb-4">
                        <div class="d-flex justify-content-between">
                            <label for="password" class="form-label">Password:<span class="required"></span></label>
                            <a href="#" class="link-info fs-6 text-decoration-none">
                                Forgot your password?
                            </a>

                        </div>
                        <div class="mb-3 position-relative">
                            <input name="password" type="password" class="form-control" id="password" required="" placeholder="Password" aria-label="Password" data-toggle="password">
                            <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600" style="cursor: pointer;">
                                <img src="{{asset('trezo/images/eye-off.svg')}}" class=""  />
                            </span>
                        </div>
                    </div>
                    <div  class="form-group mb-4" >
                    <button type="submit" class="btn btn-primary fw-medium py-2 px-3 w-100">
                        Login
                    </button>

                    </div>
            
                     <div class="form-group">
                                    <p>
                                        Don’t have an account. 
                                        <a href="#" class="fw-medium text-primary text-decoration-none">Register</a>
                                    </p>
                                </div>
                </form>
            </div>
            </div>   
            
        
    
</div>
</div>
@endsection

@push('scripts')
<script>
    "use strict";
    $(document).ready(function() {
        $('[data-toggle="password"]').each(function() {
            var s = $(this),
                e = $(this).parent().find(".input-icon");
                
            e.css("cursor", "pointer").addClass("input-password-hide");
            
            e.on("click", function() {
                if (e.hasClass("input-password-hide")) {
                    // Change to eye (password visible)
                    e.removeClass("input-password-hide").addClass("input-password-show");
                    e.find("img").attr("src", "{{asset('trezo/images/eye.svg')}}"); // Change to visible eye image
                    s.attr("type", "text");
                } else {
                    // Change to eye-off (password hidden)
                    e.removeClass("input-password-show").addClass("input-password-hide");
                    e.find("img").attr("src", "{{asset('trezo/images/eye-off.svg')}}"); // Change to hidden eye image
                    s.attr("type", "password");
                }
            });
        });
    });

</script>

@endpush

