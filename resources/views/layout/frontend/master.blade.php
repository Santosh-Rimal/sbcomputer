<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from solvit.dropletweb.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 08:13:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diamond Computer and mobile</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.png" type="{{ asset('assets/frontend/image/x-icon') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/fontawesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/animate.css') }}">
    <!-- modal video / video popup -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/modal-video.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/owl.carousel.min.css') }}">
    <!-- odometer -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/odometer.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/bootstrap.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/css/responsive.css') }}">
</head>

<body>
    @if (auth()->check() && auth()->user()->type == 'admin')
        <a id="dashboardLink" href="{{ route('dashboard') }}" style="display: none;"></a>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('dashboardLink').click();
            });
        </script>
    @endif

    <!-- preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader -->

    <!-- header begin -->

    <!-- header begin -->
    @include('layout.frontend.header')
    <!-- header end -->

    @yield('content')

    <!-- footer begin -->
    @includeIf('layout.frontend.footer')
    <!-- footer end -->

    <!-- jquery -->
    <script src="{{ asset('assets/frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- modal video / video popup -->
    <script src="{{ asset('assets/frontend/assets/js/jquery-modal-video.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- appear js for odometer -->
    <script src="{{ asset('assets/frontend/assets/js/jquery.appear.min.js') }}"></script>
    <!-- odometer -->
    <script src="{{ asset('assets/frontend/assets/js/odometer.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from solvit.dropletweb.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 08:13:38 GMT -->

</html>
