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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    </head>
    <body>
        @routes
        <section class="">
            <div class="container">
                <div class="row vh-100 justify-content-center align-items-center">
                    {{ $slot }}
                </div>
            </div>
        </section>

        <x-js>
            {{$js}}
        </x-js>
    </body>
</html>
