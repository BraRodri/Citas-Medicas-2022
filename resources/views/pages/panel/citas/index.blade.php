<x-admin>

    <!-- title -->
    @section('pagina')Mis Citas @endsection

    <div class="pagetitle">
        <h1>Mis Citas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Mis Citas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Fuimonos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
    </x-slot>

</x-admin>
