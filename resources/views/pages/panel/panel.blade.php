<x-admin>

    <!-- title -->
    @section('pagina')Dashboard @endsection

    <div class="pagetitle">
        <h1>Bienvenido al sistema!</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <x-slot name="js">
    </x-slot>

</x-admin>
