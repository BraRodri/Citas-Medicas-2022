<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>@yield('pagina')| Panel de Gestión Administrativa </title>

        <!-- Favicons -->
        <link href="" rel="icon">
        <link href="" rel="apple-touch-icon">

        <x-css-admin></x-css-admin>
    </head>
    <body>
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
