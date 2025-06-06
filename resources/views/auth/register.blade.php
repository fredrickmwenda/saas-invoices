@extends('layouts.auth')
@section('title')
    Register
@endsection
@push('css')
    <style>
        .form-section {
            display: none;
        }
        .form-section.active {
            display: block;
        }
        .form-navigation {
            margin-top: 20px;
            text-align: right;
        }
        .form-navigation .previous {
            float: left;
        }
        .steps {
            position: relative;
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .step-button {
            width: 25%;
            border: none;
            background: #3c2b2b;
            color: white;
            padding: 10px;
            cursor: pointer;
        }
        .step-button.active {
            background: #0d6efd;
        }
        .step-button.done {
            background: #198754;
        }

        /* Mpesa Modal Styles */
        .mpesa-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .mpesa-modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            border-radius: 8px;
        }

        .mpesa-close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .mpesa-close:hover {
            color: #666;
        }

        .mpesa-form input {
            margin-bottom: 15px;
        }

        .mpesa-form input[readonly] {
            background-color: #f8f9fa;
        }
        .form-section{
            padding-right: 1rem;
            padding-left: 1rem;
        }
        .btn-primary{
            margin-right: 1rem;
            /* background-color: #1585ae; */
        }
        .btn-secondary{
            margin-left: 1rem;
            background-color: #181b22!important;
        }
        .btn-success{            margin-right: 1rem;
        }
        .password-strength-text {
            font-size: 12px;
            margin-top: 5px;
        }
        .progress-bar {
            transition: width 0.3s ease;
        }
        .progress-bar.weak { background-color: #dc3545; }
        .progress-bar.medium { background-color: #ffc107; }
        .progress-bar.strong { background-color: #28a745; }
    </style>
@endpush


@section('content')
    <div class="container">
        @include('flash::message')
    </div>
    <div class="m-auto m-1230">
                    <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body p-4 p-lg-5">
        <a href="{{ url('/') }}" class="mb-12">
            <img alt="Logo" src="{{ getLogoUrl() }}" class="h-45px logo"/>
        </a>
        <div class="w-lg-600px ">
            @include('layouts.errors')
            <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto pb-2">
                <form class="form w-100 pb-2" method="POST" action="{{ route('register') }}" id="multiStepForm">
                    @csrf
                    
                    <div class="steps">
                        <button type="button" class="step-button active" step="1">Account</button>
                        <button type="button" class="step-button" step="2">Company</button>
                        <button type="button" class="step-button" step="3">Plan</button>
                        <button type="button" class="step-button" step="4">Payment</button>
                    </div>

                    <!-- Step 1 -->
                    <div class="form-section active">
                        <h3>Account Information</h3>
                        <input class="form-control form-control-lg mb-2" id="first_name" value="{{ old('first_name') }}" type="text" name="first_name" placeholder="First Name" autocomplete="off" required autofocus/>
                        @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input class="form-control form-control-lg mb-2" id="last_name" value="{{ old('last_name') }}" type="text" name="last_name" placeholder="Last Name" autocomplete="off" required/>
                        @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input class="form-control form-control-lg mb-2" type="number" name="contact" autocomplete="off" value="{{ old('contact') }}" placeholder="Phone Number" required />
                        @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                        <input class="form-control form-control-lg mb-2" type="email" name="email" autocomplete="off" value="{{ old('email') }}" placeholder="Email" required />
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror                        <div class="position-relative mb-2">
                            <input class="form-control form-control-lg" type="password" name="password" id="password" autocomplete="off" placeholder="Password" required />
                            <span class="position-absolute end-0 top-50 translate-middle-y pe-2" style="cursor: pointer;">
                                <i class="fa fa-eye-slash toggle-password" data-target="password"></i>
                            </span>
                        </div>
                        <div class="password-strength mb-2">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                            <small class="password-strength-text text-muted"></small>
                        </div>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                        <div class="position-relative mb-2">
                            <input class="form-control form-control-lg" type="password" name="password_confirmation" id="password_confirmation" autocomplete="off" placeholder="Confirm Password" required />
                            <span class="position-absolute end-0 top-50 translate-middle-y pe-2" style="cursor: pointer;">
                                <i class="fa fa-eye-slash toggle-password" data-target="password_confirmation"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Step 2 --> 
                     <!-- Use select to select country on select of the country, use it to get the states available in it from states model, then use state to get the cities -->
                      <!-- Rename the ClientModel to Tenants -->
                    <div class="form-section">
                        <h3>Company Information</h3>
                        <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name" class="form-control mb-2">
                        @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="file" name="company_logo" value="{{ old('company_logo') }}" placeholder="Company Logo" class="form-control mb-2">
                        @error('company_logo') <span class="text-danger">{{ $message }}</span> @enderror
                        
                        
                         <select name="country_id" class="form-control mb-2" id="country_id">
                            <option value="">Choose Country:</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{ ucfirst($country->name) }}</option>
                            @endforeach
                        </select>
                        @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <!-- State -->
                        <select name="state_id" class="form-control mb-2" id="state_id" disabled>
                            <option value="">Choose State:</option>
                        </select>
                        @error('state_id') <span class="text-danger">{{ $message }}</span> @enderror

                        <!-- City -->
                        <select name="city_id" class="form-control mb-2" id="city_id" disabled>
                            <option value="">Choose City:</option>
                        </select>
                        @error('city_id') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" name="address" value="{{ old('address') }}" placeholder="Address" class="form-control mb-2">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="text" name="website" value="{{ old('website') }}" placeholder="Website" class="form-control mb-2">
                        @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Step 3 -->
                    <div class="form-section">
                        <h3>Choose Subscription Plan</h3>
                        <select name="subscription_plan_id" class="form-control mb-2">
                            <option value="">Select Plan</option>
                            @foreach($plans as $plan)
                                <option value="{{ $plan->id }}" {{ old('subscription_plan_id') == $plan->id ? 'selected' : '' }}>{{ $plan->name }} - ${{ $plan->price }}</option>
                            @endforeach
                        </select>
                        @error('subscription_plan_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Step 4 -->
                    <div class="form-section">
                        <h3>Payment</h3>
                        <div>Amount: $<span id="planAmount">0</span></div>
                        <select name="payment_method" class="form-control mb-2" id="payment_method">
                            <option value="">Select Payment Method</option>
                            @foreach($payment_methods as $method)
                                <option value="{{ $method }}" {{ old('payment_method') == $method ? 'selected' : '' }}>{{ ucfirst($method) }}</option>
                            @endforeach
                        </select>
                        @error('payment_method') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Mpesa Payment Modal -->
                    <div id="mpesaModal" class="mpesa-modal">
                        <div class="mpesa-modal-content">
                            <span class="mpesa-close">&times;</span>
                            <h4>Mpesa Payment</h4>
                            <form class="mpesa-form">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="mpesa_phone" name="phone_number" placeholder="254700000000" required>
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" id="mpesa_amount" readonly>
                                </div>
                                <button type="button" class="btn btn-primary w-100" id="mpesa_submit">Pay Now</button>
                            </form>
                        </div>
                    </div>

                    <!-- PayPal Payment Modal -->
                    <div id="paypalModal" class="mpesa-modal">
                        <div class="mpesa-modal-content">
                            <span class="paypal-close">&times;</span>
                            <h4>PayPal Payment</h4>
                            <form class="paypal-form">
                                <div class="form-group">
                                    <label>Amount to Pay</label>
                                    <input type="text" class="form-control" id="paypal_amount" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="paypal_email" readonly>
                                </div>
                                <div id="paypal-button-container" class="mt-3"></div>
                            </form>
                        </div>
                    </div>

                    <div class="form-navigation mt-3">
                        <button type="button" class="btn btn-secondary previous">Previous</button>
                        <button type="button" class="btn btn-primary next">Next</button>
                        <button type="submit" class="btn btn-success submit">Submit</button>
                    </div>
                    <div class="form-group ml-3 mt-3">
                        <!-- The login provision incase a user is logged in -->                              
                        <p>
                            Already have an account. 
                            <a href="{{route('login')}}" class="fw-medium text-primary text-decoration-none">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
@endsection

@push('scripts')
<!-- PayPal SDK -->
<script src="https://www.paypal.com/sdk/js?client-id={{ config('paypal.client_id') }}&currency=USD"></script>
<script>
$(function() {
    let currentStep = 1;
    let formWizard = $("#multiStepForm");
    
    $(".form-section").not(".active").hide();
    $(".submit").hide();

    // Next button click
    $(".next").click(function() {
        if (validateStep(currentStep)) {
            $(".form-section").eq(currentStep-1).removeClass("active").hide();
            currentStep++;
            $(".form-section").eq(currentStep-1).addClass("active").show();
            
            // Update step buttons
            $(".step-button").eq(currentStep-1).addClass("active");
            $(".step-button").eq(currentStep-2).removeClass("active").addClass("done");
            
            // Show/hide navigation buttons
            updateNavigationButtons();
            
            // Update amount if on payment step
            if (currentStep === 4) {
                updateAmount();
            }
        }
    });

    // Previous button click
    $(".previous").click(function() {
        $(".form-section").eq(currentStep-1).removeClass("active").hide();
        currentStep--;
        $(".form-section").eq(currentStep-1).addClass("active").show();
        
        // Update step buttons
        $(".step-button").eq(currentStep).removeClass("active");
        $(".step-button").eq(currentStep-1).removeClass("done").addClass("active");
        
        updateNavigationButtons();
    });

    // Step button click
    $(".step-button").click(function() {
        let step = $(this).attr("step");
        if (step < currentStep || validateAllPreviousSteps(step)) {
            $(".form-section").removeClass("active").hide();
            $(".form-section").eq(step-1).addClass("active").show();
            
            // Update step buttons
            $(".step-button").removeClass("active");
            $(this).addClass("active");
            $(".step-button").each(function() {
                if ($(this).attr("step") < step) {
                    $(this).addClass("done");
                } else {
                    $(this).removeClass("done");
                }
            });
            
            currentStep = parseInt(step);
            updateNavigationButtons();
            
            if (currentStep === 4) {
                updateAmount();
            }
        }
    });

    function validateStep(step) {
        let valid = true;
        let section = $(".form-section").eq(step-1);
        
        // Validate required fields
        section.find("input[required], select[required]").each(function() {
            if (!$(this).val()) {
                $(this).addClass("is-invalid");
                valid = false;
            } else {
                $(this).removeClass("is-invalid");
            }
        });

        // Special validation for password confirmation in step 1
        if (step === 1) {
            let password = $("input[name='password']").val();
            let confirm = $("input[name='password_confirmation']").val();
            if (password !== confirm) {
                $("input[name='password_confirmation']").addClass("is-invalid");
                valid = false;
            }
        }

        return valid;
    }

    function validateAllPreviousSteps(targetStep) {
        for (let i = 1; i < targetStep; i++) {
            if (!validateStep(i)) {
                return false;
            }
        }
        return true;
    }

    function updateNavigationButtons() {
        if (currentStep === 1) {
            $(".previous").hide();
        } else {
            $(".previous").show();
        }
        
        if (currentStep === 4) {
            $(".next").hide();
            $(".submit").show();
        } else {
            $(".next").show();
            $(".submit").hide();
        }
    }

    function updateAmount() {
        let planOption = $('select[name="subscription_plan_id"] option:selected');
        let amount = planOption.text().split('$')[1];
        $('#planAmount').text(amount || '0');
    }

    // Real-time validation
    formWizard.find('input[required], select[required]').on('change keyup', function() {
        if ($(this).val()) {
            $(this).removeClass("is-invalid");
        }
    });

    // Mpesa Modal Handling
    let mpesaModal = $("#mpesaModal");
    let mpesaClose = $(".mpesa-close");
    let mpesaPhoneInput = $("#mpesa_phone");
    let mpesaAmountInput = $("#mpesa_amount");
    let mpesaSubmitBtn = $("#mpesa_submit");

        // Password visibility toggle
    $(".toggle-password").click(function() {
        const targetId = $(this).data("target");
        const input = $("#" + targetId);
        const type = input.attr("type") === "password" ? "text" : "password";
        input.attr("type", type);
        $(this).toggleClass("fa-eye fa-eye-slash");
    });

    // Password strength check
    $("#password").on('input', function() {
        const password = $(this).val();
        let strength = 0;
        let message = '';

        // Length check
        if (password.length >= 8) strength += 20;
        
        // Uppercase check
        if (password.match(/[A-Z]/)) strength += 20;
        
        // Lowercase check
        if (password.match(/[a-z]/)) strength += 20;
        
        // Number check
        if (password.match(/[0-9]/)) strength += 20;
        
        // Special character check
        if (password.match(/[^A-Za-z0-9]/)) strength += 20;

        // Update progress bar
        const progressBar = $(".password-strength .progress-bar");
        progressBar.css('width', strength + '%');
        progressBar.removeClass('weak medium strong');

        // Update message
        if (strength <= 40) {
            message = 'Weak password';
            progressBar.addClass('weak');
        } else if (strength <= 80) {
            message = 'Medium strength password';
            progressBar.addClass('medium');
        } else {
            message = 'Strong password';
            progressBar.addClass('strong');
        }

        $(".password-strength-text").text(message);
    });

    // Show Mpesa modal when Mpesa is selected
    $("#payment_method").on('change', function() {
        if ($(this).val().toLowerCase() === 'mpesa') {
            let amount = $('#planAmount').text();
            let phone = $('input[name="contact"]').val();
            
            // Format phone number if needed (ensure it starts with 254)
            if (phone) {
                phone = phone.replace(/^0/, '254'); // Replace leading 0 with 254
                phone = phone.replace(/^\+/, ''); // Remove leading + if exists
            }
            
            mpesaAmountInput.val(amount);
            mpesaPhoneInput.val(phone);
            mpesaModal.fadeIn();
        }
    });

    // Close modal when clicking X or outside
    mpesaClose.click(() => mpesaModal.fadeOut());
    $(window).click(function(e) {
        if (e.target == mpesaModal[0]) {
            mpesaModal.fadeOut();
        }
    });    // Handle Mpesa payment submission
    mpesaSubmitBtn.click(function() {
        let phoneNumber = mpesaPhoneInput.val();
        let amount = mpesaAmountInput.val();

        if (!phoneNumber) {
            alert('Please enter a valid phone number');
            return;
        }

        // Show loading state
        mpesaSubmitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span> Processing...');

        // PayPal Modal Handling
        let paypalModal = $("#paypalModal");
        let paypalClose = $(".paypal-close");
        let paypalEmailInput = $("#paypal_email");
        let paypalAmountInput = $("#paypal_amount");

    // Make STK Push request
        $.ajax({
            url: '/mpesa/stk-push',
            method: 'POST',
            data: {
                phone_number: phoneNumber,
                amount: amount,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    alert('Payment request sent! Please check your phone to complete the payment.');
                    mpesaModal.fadeOut();
                } else {
                    alert('Payment request failed. Please try again.');
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
            },
            complete: function() {
                mpesaSubmitBtn.prop('disabled', false).text('Pay Now');
            }
        });
    });

    // Show PayPal modal when PayPal is selected
    $("#payment_method").on('change', function() {
        let selectedMethod = $(this).val().toLowerCase();
        if (selectedMethod === 'paypal') {
            let amount = $('#planAmount').text();
            let email = $('input[name="email"]').val();
            paypalAmountInput.val(amount);
            paypalEmailInput.val(email);
            paypalModal.fadeIn();
            initPayPalButton(amount);
        }
    });

    // Close PayPal modal
    paypalClose.click(() => paypalModal.fadeOut());
    $(window).click(function(e) {
        if (e.target == paypalModal[0]) {
            paypalModal.fadeOut();
        }
    });

    function initPayPalButton(amount) {
        if (!amount || amount === '0') {
            alert('Please select a plan first');
            paypalModal.fadeOut();
            return;
        }

        // Clear existing buttons
        $('#paypal-button-container').empty();

        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show success message
                    alert('Payment completed. Transaction ID: ' + details.id);
                    
                    // Add transaction ID to form
                    let transactionInput = $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', 'paypal_transaction_id')
                        .val(details.id);
                    $('#multiStepForm').append(transactionInput);
                    
                    paypalModal.fadeOut();
                });
            },
            onError: function(err) {
                alert('Payment failed. Please try again.');
                console.error('PayPal Error:', err);
            }
        }).render('#paypal-button-container');
    }
    

    // PayPal Modal Handling
    let paypalModal = $("#paypalModal");
    let paypalClose = $(".paypal-close");
    let paypalEmailInput = $("#paypal_email");
    let paypalAmountInput = $("#paypal_amount");

    // Show PayPal modal when PayPal is selected
    $("#payment_method").on('change', function() {
        if ($(this).val().toLowerCase() === 'paypal') {
            let amount = $('#planAmount').text();
            let email = $('input[name="email"]').val();
            paypalAmountInput.val(amount);
            paypalEmailInput.val(email);
            paypalModal.fadeIn();

            // Initialize PayPal button
            initPayPalButton(amount);
        }
    });

    // Close PayPal modal
    paypalClose.click(() => paypalModal.fadeOut());
    $(window).click(function(e) {
        if (e.target == paypalModal[0]) {
            paypalModal.fadeOut();
        }
    });

});
</script>

<script>
    $(document).ready(function() {
        $('#country_id').on('change', function () {
            var countryId = $(this).val();
            $('#state_id').prop('disabled', true).html('<option>Loading...</option>');
            $('#city_id').prop('disabled', true).html('<option>Choose City:</option>');

            if (countryId) {
                $.ajax({
                    url: '/get-states/' + countryId,
                    type: 'GET',
                    success: function (states) {
                        let options = '<option value="">Choose State:</option>';
                        states.forEach(function (state) {
                            options += `<option value="${state.id}">${state.name}</option>`;
                        });
                        $('#state_id').html(options).prop('disabled', false);
                    }
                });
            }
        });

        $('#state_id').on('change', function () {
            var stateId = $(this).val();
            $('#city_id').prop('disabled', true).html('<option>Loading...</option>');

            if (stateId) {
                $.ajax({
                    url: '/get-cities/' + stateId,
                    type: 'GET',
                    success: function (cities) {
                        let options = '<option value="">Choose City:</option>';
                        cities.forEach(function (city) {
                            options += `<option value="${city.id}">${city.name}</option>`;
                        });
                        $('#city_id').html(options).prop('disabled', false);
                    }
                });
            }
        });
    });
</script>

@endpush