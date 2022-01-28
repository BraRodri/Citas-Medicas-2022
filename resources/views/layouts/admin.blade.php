<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>@yield('pagina')| Panel Administrativo </title>

        <x-css></x-css>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
