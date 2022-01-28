<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>@yield('pagina')| Citas Medicas</title>
        <x-css></x-css>

    </head>
    <body>
        {{ $slot }}

        <x-js>
            {{$js}}
        </x-js>
    </body>
</html>
