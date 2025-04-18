<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Servoll Technologies">
  <link href="{{ asset('assets/smart/images/logo/favicon.ico')}}" rel="icon">
  <title>Servoll Technologies </title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="{{ asset('assets/smart/css/libraries.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/smart/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/smart/css/toastr.min.css')}}">
  @livewireStyles()
  @stack('css')
  <style>
    .comments-list .nested__comment {
      padding-left: 20px;
      /* Adjust this value as needed */
    }

    /* Remove list-style for nested comments */
    .comments-list .nested__comment {
      list-style: none;
    }
  </style>@push('css')

  @endpush

</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="sk-cube-grid">
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
        <span class="sk-cube"></span>
      </div>
    </div>
    <!-- /.preloader -->
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.front-footer')

    <div class="login-popup" id="login-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form" action="{{route('login')}}" method="post">
          @csrf
          <h3 class="login-popup__title">Login!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-20">
            <i class="icon-mail input-icon"></i>
            <input type="text" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group mb-20">
            <i class="icon-lock input-icon"></i>
            <input type="password" class="form-control" placeholder="********" name="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember_me">
              <label class="form-check-label" for="remember_me">Remember Me!</label>
            </div>
            <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
          </div>
          <button type="submit" class="btn btn__primary btn__block btn__xl">Login</button>
        </form>
        <!-- <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
          <button id="go-register" class="go-register fz-14 font-weight-bold">
            <span>Register Here</span><i class="icon-arrow-right"></i>
          </button>
        </div> -->
      </div>
    </div>



    <div class="login-popup" id="register-popup">
      <div class="login-popup-wrapper">
        <form class="login-popup__form" action="">
          <h3 class="login-popup__title">Register!</h3>
          <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
          <div class="form-group mb-20">
            <i class="icon-mail input-icon"></i>
            <input type="text" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group mb-20">
            <i class="icon-lock input-icon"></i>
            <input type="password" class="form-control" placeholder="********" name="password">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-20">
            <div class="custom-control custom-checkbox d-flex align-items-center">
              <input type="checkbox" class="custom-control-input" id="terms-conditions">
              <label class="custom-control-label" for="terms-conditions">I read & agree to <a href="#">Terms & Conditions</a></label>
            </div>
          </div>
          <button type="submit" class="btn btn__primary btn__block btn__xl">Register</button>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-20">
          <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
          <button id="go-login" class="go-login fz-14 font-weight-bold">
            <span>Login Here</span><i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>
    </div><!-- /.login-popup -->



    
    <script src="{{ asset('assets/smart/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/smart/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/smart/js/main.js')}}"></script>
    <script src="{{ asset('assets/smart/js/toastr.min.js') }}"></script>
    <script src="{{ mix('assets/js/auth/auth.js') }}"></script>
    @toastScripts
    @stack('js')
    @livewireScripts()


    <script>
      $(document).ready(function() {
        $('#subscription-form').submit(function(e) {
          e.preventDefault(); // Prevent the form from submitting traditionally

          $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),

            success: function(response) {
              // Handle the success response, e.g., display a success message
              alert('Subscription successful');
            },
            error: function(response) {
              console.log(response);
              // Handle errors, e.g., display validation errors
              alert('Subscription failed');
            }
          });
        });

        $('#inquiryForm').submit(function(e) {
          e.preventDefault(); // Prevent the form from submitting traditionally

          var formData = $(this).serialize();
          console.log(formData);

          // Assuming your Laravel route is named 'enquire'
          var url = "{{ route('enquire') }}";

          // Perform AJAX request
          $.ajax({
            type: 'POST',
            url: url,
            data: formData,

            success: function(response) {
              if (typeof Toast !== 'undefined') {
                Toast.success('We received your request, will get back to you with a suitable quotation');
              } else {
                alert('We received your request, will get back to you with a suitable quotation');
              }
            },
            error: function(response) {
              console.log(response);
              if (typeof Toast !== 'undefined') {
                Toast.error('Enquiry Failed');
              } else {
                alert('Enquiry Failed');
              }
            }
          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Get the current path
        var currentPage = window.location.pathname;

        // Find the corresponding navigation item and add the 'active' class to both the <li> and <a> elements
        $('.navbar-nav li').each(function() {
          var link = $(this).find('a').attr('href');
          console.log('Link:', link);

          if (currentPage.indexOf(link) !== -1) {
            console.log('Match found!');
            $(this).addClass('active');
            $(this).find('a').addClass('active');
          }
        });
      });
    </script>
    @if (isset($errors) && $errors->any())
    @foreach ($errors->all() as $error)
    <script>
      $(document).ready(function() {
        toastr.error('{{ $error }}', 'Error', {
          closeButton: true,
        });
      });
    </script>
    @endforeach
    @endif

    @if (session('error'))
    <script>
      $(document).ready(function() {
        toastr.error('{{ session('
          error ') }}', 'Error!', {
            closeButton: true,
            // progressBar: true,
            showMethod: 'slideDown',
            hideMethod: 'slideUp',
            timeOut: 3000, // Adjust the timeout as needed
            extendedTimeOut: 1000,
            positionClass: 'toast-top-right', // Adjust the position as needed
            //iconClass: 'toast-error', // Add a custom class for red color
            iconClass: 'toast-error custom-toast-error',
          });
      });
    </script>
    @endif


    <script>
      $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
          e.preventDefault();

          $.ajax({
            url: "{{route('send.contact')}}", // replace with your handler's URL
            type: 'post',
            data: $(this).serialize(),
            success: function(response) {
              // handle success here
              // toastr.options = {
              //   closeButton: true,
              //   newestOnTop: false,
              //   progressBar: true,
              //   positionClass: "toast-top-center",
              //   preventDuplicates: false,
              //   onclick: null,
              //   showDuration: "3000",
              //   hideDuration: "1000",
              //   timeOut: "5000",
              //   extendedTimeOut: "1000",
              //   showEasing: "swing",
              //   hideEasing: "linear",
              //   showMethod: "fadeIn",
              //   hideMethod: "fadeOut",
              // };
              // // handle success here
              // toastr.options = {
              //   closeButton: true,
              //   newestOnTop: false,
              //   progressBar: true,
              //   positionClass: "toast-top-center",
              //   preventDuplicates: false,
              //   onclick: null,
              //   showDuration: "3000",
              //   hideDuration: "1000",
              //   timeOut: "5000",
              //   extendedTimeOut: "1000",
              //   showEasing: "swing",
              //   hideEasing: "linear",
              //   showMethod: "fadeIn",
              //   hideMethod: "fadeOut",
              // };
              // toastr.success('Form submitted successfully!');
                            if (typeof Toast !== 'undefined') {
                Toast.success('We received your request, will get back to you');
              } else {
                alert('We received your request, will get back to you');
              }
              
            },
            error: function(jqXHR, textStatus, errorThrown) {
              // handle error here
              var errorMessage = jqXHR.responseJSON.message; // get the error message from the server
                  if (typeof Toast !== 'undefined') {
                Toast.error('An error occurred: ' + errorMessage);
              } else {
                alert('An error occurred: ' + errorMessage);
              }
               // Display error message
              //toastr.error('An error occurred while submitting the form.'); 
              // 
            }
          });
        });
      });
    </script>


</body>