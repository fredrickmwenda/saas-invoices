<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
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
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">

    @stack('css')
    @yield('css')
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
    <script src="{{asset('trezo/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/css/toastr.min.js')}}">

    <script src="{{asset('trezo/js/custom/custom.js')}}"></script>
    <script src="{{ asset('messages.js') }}"></script>
    @stack('scripts')

    @if (session('error'))
    <script>
      $(document).ready(function() {
        toastr.error('{{ session('error ') }}', 'Error!', {
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