<x-admin>

    <!-- title -->
    @section('pagina')Todas Mis Citas @endsection

    <div class="pagetitle">
        <h1>Mis Citas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item">Paciente</li>
                <li class="breadcrumb-item"><a href="{{ route('citas') }}">Mis Citas</a></li>
                <li class="breadcrumb-item active">Todas Mis Citas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="mt-4">Todas mis citas!</p>
                        <table id="tabla_citas" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Forma</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($citas) > 0)
                                    @foreach ($citas as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->horaryMedico->date_disponibility }}</td>
                                            <td>{{ $item->horaryMedico->medico->usuario->nombres }}</td>
                                            <td>{{ $item->modality }}</td>
                                            <td>
                                                @switch($item->status)
                                                    @case(1)
                                                        <span class="badge bg-secondary">Pendiente</span>
                                                        @break

                                                    @case(2)
                                                        <span class="badge bg-success">Agendada</span>
                                                        @break

                                                    @case(3)
                                                        <span class="badge bg-danger">Rechazada</span>
                                                        @break

                                                    @case(4)
                                                        <span class="badge bg-secondary">Pago Pendiente</span>
                                                        @break

                                                    @default
                                                @endswitch
                                            </td>
                                            <td>{{ date("Y-m-d h:i:s a", strtotime($item->updated_at)) }}</td>
                                            <td><a href="{{ route('citas.viewInformacion', $item->id) }}" class="btn btn-success btn-sm">Ver Detalles</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
        <script>
            var tabla_paginas = $("#tabla_citas").DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
                },
                "order": [[ 0, "desc" ]],
                "pageLength" : 25,
                "responsive": true
            });
        </script>
    </x-slot>
</x-admin>
