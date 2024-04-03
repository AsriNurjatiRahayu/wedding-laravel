<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

<link rel="stylesheet" href="{{ asset('Template/assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('Template/assets/css/main/app-dark.css ') }}">
<link rel="shortcut icon" href="{{ asset('Template/assets/images/logo/favicon.svg" type="image/x-icon') }}">
<link rel="shortcut icon" href="{{ asset('Template/assets/images/logo/favicon.png" type="image/png') }}">

<link rel="stylesheet" href="{{ asset('Template/assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="main">
        @include('partials.headeradmin')

        @include('partials.sidebaradmin')
        
        @yield('container')

    </div>\

    @include('partials.footeradmin')

<script src="{{ asset('Template/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('Template/assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
<script src="{{ asset('Template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('Template/assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
