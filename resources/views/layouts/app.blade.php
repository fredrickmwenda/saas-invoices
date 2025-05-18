<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png')}}" rel="icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="current-date-format" content="{{ currentDateFormat() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css')}}">

    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ mix('assets/css/page.css') }}">
 
    

    @if(!Auth::user()->dark_mode)
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{asset('trezo/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/sidebar-menu.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/apexcharts.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/prism.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/google-icon.css')}}">
    <link rel="stylesheet" href="{{asset('trezo/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('trezo//css/swiper-bundle.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('trezo/css/fullcalendar.main.css')}}"> -->
    <link rel="stylesheet" href="{{asset('trezo/css/style.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/phone-number-dark.css') }}">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    @endif
    @stack('css')

    @livewireStyles

    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    @include('layouts.livewire.livewire-turbo')
    <script src="{{asset('assets/js/livewire/livewire-turbolinks.min.js')}}"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="{{asset('assets/stripe/stripe.js')}}"></script>
    <!-- <script src="https://checkout.razorpay.com/v1/checkout.js" data-turbolinks-eval="false"data-turbo-eval="false"></script> -->
    <script src="{{ asset('assets/js/third-party.js') }}"></script>
    <script src="{{ asset('messages.js') }}"></script>
    <script data-turbo-eval="false">
        let sweetAlertIcon = "{{ asset('images/remove.png') }}";
        let decimalsSeparator = "{{ getSettingValue('decimal_separator') }}";
        let thousandsSeparator = "{{ getSettingValue('thousand_separator') }}";
        let changePasswordUrl = "{{ route('user.changePassword') }}";
        let currentDateFormat = "{{ currentDateFormat() }}";
        let momentDateFormat = "{{ momentJsCurrentDateFormat() }}";
        var phoneNo = '';
        let getUserLanguages = "{{getCurrentLanguageName()}}";
        Lang.setLocale(getUserLanguages);
    </script>
    @routes
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    
    <script src="{{ mix('assets/js/pages.js') }}"></script>

</head>

<body class="boxed-size">
    <!-- Start Preloader Area -->
  
    @yield('phone_js')
    @include('layouts.sidebar')

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
           
          @include('layouts.header')      

            <div class="main-content-container overflow-hidden">
                @yield('content')
            </div>

            <div class="flex-grow-1"></div>

            @include('layouts.footer')
           
        </div>
    </div> 

    <script src="{{asset('trezo/js/bootstrap.min.js')}}"></script>
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
    <!-- <script src="{{asset('trezo/js/fullcalendar.main.js')}}"></script> -->
    <script src="{{asset('trezo/js/custom/apexcharts.js')}}"></script>
    

    <script src="{{asset('trezo/js/custom/custom.js')}}"></script>
    @include('profile.changePassword')
    @include('profile.changelanguage')
    @stack('js')
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