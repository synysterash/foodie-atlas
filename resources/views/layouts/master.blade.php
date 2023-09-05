<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name')}}</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    @yield('head')

</head>

<body>

    @include('layouts.inc_header_web')

    @yield('section')

    @include('layouts.inc_footer')

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
@yield('js')
</body>
</html>
