<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Niscpr-csir')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/niscpr.jpg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/niscpr.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/niscpr.jpg') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">

    <!-- Notyf -->
    <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">

    <!-- Volt CSS -->
    <link rel="stylesheet" href="{{ asset('css/backendmain.css') }}">
    
  

    
    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

     <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
    @yield('body')


    <!-- Popper + Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/js/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Chartist -->
    <script src="{{ asset('assets/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('assets/js/volt.js') }}"></script>



</body>
</html>
