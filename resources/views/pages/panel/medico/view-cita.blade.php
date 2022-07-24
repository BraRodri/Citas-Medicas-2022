<x-admin>

    <!-- title -->
    @section('pagina')Información de la Cita @endsection

    <div class="pagetitle">
        <h1>Información de la Cita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Información de la Cita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
        <div class="row">
            <div class="col-lg-12">
                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Cita #{{ $cita->id }}</h5>
                        <input type="hidden" id="hour_limit_pay" value="{{ $cita->hour_limit_pay }}">
                        <div class="row">
                            <div class="div col-lg-6">
                                <h6>Información del Paciente</h6>
                                <div>
                                    <strong>Nombres:</strong> {{ $cita->paciente->usuario->nombres }}
                                </div>
                                <div>
                                    <strong>Tipo Documento:</strong> {{ $cita->paciente->usuario->tipo_documento }}
                                </div>
                                <div>
                                    <strong>Numero de Documento:</strong> {{ $cita->paciente->usuario->numero_documento }}
                                </div>
                                <div>
                                    <strong>Telefono:</strong> {{ $cita->paciente->usuario->telefono }}
                                </div>
                                <div>
                                    <strong>Correo Electronico:</strong> {{ $cita->paciente->usuario->email }}
                                </div>
                            </div>
                            <div class="div col-lg-12">
                                <hr>
                                <h6>Información de la Cita</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <strong>Fecha de la Cita agendada:</strong> {{ $cita->horaryMedico->date_disponibility }} <br>
                                        <strong>Modalidad: </strong> {{ $cita->modality }} <br>
                                        <strong>Estado actual de la Cita: </strong>
                                        @switch($cita->status)
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
                                        @endswitch <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <hr>
                                @if ($cita->status == 2)
                                    <a href="{{ route('historiaMedica.create', $cita->paciente->usuario->id) }}" class="btn btn-success">Generar Historia Clinica</a>
                                    <a href="#" class="btn btn-dark">Ingresar a la reunión</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
        <script>

        </script>
    </x-slot>

</x-admin>
