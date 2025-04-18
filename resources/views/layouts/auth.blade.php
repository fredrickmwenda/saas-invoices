<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href="assets/images/favicon.png"> -->
    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="{{asset('trezo/css/sidebar-menu.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/apexcharts.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/prism.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/google-icon.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/fullcalendar.main.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/smart/css/toastr.min.css')}}">


    <!-- <link href="{{ asset('assets/smart/images/logo/favicon.ico')}}" rel="icon">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/page.css') }}"> -->
    <!-- CSS Libraries -->
    @stack('css')
    @yield('css')
</head>

<body class="boxed-sized bg-white">
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">S</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">V</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
                <span class="d-inline-block">L</span>

                <span class="d-inline-block">T</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">C</span>
                <span class="d-inline-block">H</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">G</span>
                <span class="d-inline-block">I</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">S</span>


            </div>
        </div>
    </div>

    <!-- Start Main Content Area -->
    <div class="container">
        <div class="main-content d-flex flex-column p-0">
            @yield('content')
        </div>
    </div>
    <!-- Start Main Content Area -->




    <!-- Scripts -->
    <script src="{{asset('trezo/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('trezo/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('trezo/js/dragdrop.js')}}"></script>
    <script src="{{asset('trezo/js/rangeslider.min.js')}}"></script>
    <script src="{{asset('trezo/js/sweetalert.js')}}"></script>
    <script src="{{asset('trezo/js/quill.min.js')}}"></script>
    <script src="{{asset('trezo/js/data-table.js')}}"></script>
    <script src="{{asset('trezo/js/prism.js')}}"></script>
    <script src="{{asset('trezo/js/clipboard.min.js')}}"></script>
    <script src="{{asset('trezo/js/feather.min.js')}}"></script>
    <script src="{{asset('trezo/js/simplebar.min.js')}}"></script>
    <script src="{{asset('trezo/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('trezo/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('trezo/js/fullcalendar.main.js')}}"></script>
    <script src="{{asset('trezo/js/custom/apexcharts.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/smart/css/toastr.min.css')}}">

    <script src="{{asset('trezo/js/custom/custom.js')}}"></script>
    <script src="{{ asset('messages.js') }}"></script>
    @stack('scripts')

    @if (session('error'))
    <script>
      $(document).ready(function() {
        toastr.error('{{ session('error ') }}', 'Error!', {
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

</body>

</html>