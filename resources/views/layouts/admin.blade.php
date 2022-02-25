<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('pagina')| Panel | ESSENCE MEDICANN CENTER</title>

        <!-- Favicons -->
        <link href="{{ asset('images/icon.png') }}" rel="icon">
        <link href="{{ asset('images/icon.png') }}" rel="apple-touch-icon">

        <x-css-admin></x-css-admin>
    </head>
    <body>
        @routes

        <!-- ======= Header ======= -->
        <x-header-admin></x-header-admin>
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <x-sidebar-admin></x-sidebar-admin>
        <!-- End Sidebar-->

        <main id="main" class="main">
            {{ $slot }}
        </main>

        <!-- ======= Footer ======= -->
        <x-footer-admin></x-footer-admin>
        <!-- End Footer -->

        <x-js-admin>
            {{$js}}
        </x-js-adm>
    </body>
</html>
