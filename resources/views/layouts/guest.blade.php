<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield("title", env("APP_NAME"))</title>

        <link rel="stylesheet" href="{{ asset('assets/guest/css/app.css') }}">
    
        @stack('styles')

        @stack('scripts')
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    </head>

    <body>
        @include("layouts.elements.guest.nav")

        @yield('content')

    </body>

    @include("layouts.elements.guest.footer")
    
    <script src="{{ asset('assets/guest/js/app.js') }}"></script>
    @stack('footer-scripts')
</html>