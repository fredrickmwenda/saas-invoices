<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <!-- Links Of CSS File -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.css">
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/fontawesome.all.min.css')}}">

    <link rel="stylesheet" href="{{asset('trezo/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">

    @stack('css')
    @yield('css')
    <!-- @livewireStyles -->

</head>

<body class="boxed-sized bg-white">
    

    <!-- Start Main Content Area -->
    <div class="container">
        <div class="main-content d-flex flex-column p-0">
            @yield('content')
        </div>
    </div>
    <!-- Start Main Content Area -->




    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fontawesome.all.min.js')}}"></script>
    <script src="{{asset('trezo/js/sweetalert.js')}}"></script>
    <script src="{{asset('trezo/js/feather.min.js')}}"></script>
    

    <!-- <script src="{{asset('trezo/js/custom/custom.js')}}"></script> -->
    <script src="{{ asset('messages.js') }}"></script>
    @stack('scripts')
    <!-- @livewireScripts -->

    @if (session('error'))
    <script>
      $(document).ready(function() {
        toastr.error('{{ session('error') }}', 'Error!', {
            closeButton: true,
            showMethod: 'slideDown',
            hideMethod: 'slideUp',
            timeOut: 3000, // Adjust the timeout as needed
            extendedTimeOut: 1000,
            positionClass: 'toast-top-right', // Adjust the position as needed
            iconClass: 'toast-error custom-toast-error',
          });
      });
    </script>
    @endif

</body>

</html>