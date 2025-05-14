<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title> @yield('title') | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">

        @include('layouts.head-css')

        @if (App::environment('local'))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @else
            <link rel="preload" as="style" href="{{ asset('build/css/app.min.css') }}">
            <link rel="stylesheet" href="{{ asset('build/css/app.min.css') }}">
            <script src="{{ asset('build/js/app.js') }}"></script>
        @endif


    </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>
