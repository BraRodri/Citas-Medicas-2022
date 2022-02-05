<x-admin>

    <!-- title -->
    @section('pagina')Agendar Cita @endsection

    <div class="pagetitle">
        <h1>Agendar Cita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Agendar Cita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->



    <x-slot name="js">
    </x-slot>

</x-admin>
