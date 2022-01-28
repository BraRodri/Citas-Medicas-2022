<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>@yield('pagina')| Citas Medicas</title>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/login.js') }}" defer></script>
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    </head>
    <body>
        <section class="">
            <div class="container">
                <div class="row vh-100 justify-content-center align-items-center">
                    {{ $slot }}
                </div>
            </div>
        </section>
    </body>
</html>
