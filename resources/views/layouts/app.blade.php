<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('pagina')| ESSENCE MEDICANN CENTER</title>

        <!-- Favicons -->
        <link href="{{ asset('images/icon.png') }}" rel="icon">
        <link href="{{ asset('images/icon.png') }}" rel="apple-touch-icon">

        <x-css></x-css>

    </head>
    <body>

        <!-- ======= Top Bar ======= -->
        <x-top-bar></x-top-bar>

        <!-- ======= Header ======= -->
        <x-header></x-header>

        {{ $slot }}

        <!-- ======= Footer ======= -->
        <x-footer></x-footer>

        <x-js>
            {{$js}}
        </x-js>
    </body>
</html>
