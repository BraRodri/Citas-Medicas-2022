<x-admin>

    <!-- title -->
    @section('pagina')Agendar Cita @endsection


    <x-slot name="css">
    </x-slot>


    <div class="pagetitle">
        <h1>Agendar Cita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Agendar Cita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <input type="hidden" name="userIdAuth" id="userIdAuth" value="{{Auth::user()->id}}">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label class="form-label">Seleccione la especialidad <span>(*)</span></label>
                                    <select class="form-select" id="especialidad" name="especialidad" required="">
                                        <option selected disabled value=''>Seleccione</option>
                                        <option value="Cirujano">Cirujano</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group mt-3">
                                    <label class="form-label">Seleccione el médico <span>(*)</span></label>
                                    @if (count($medicsWithHorarysDisponibilities) === 0)
                                    <p>No hay médicos con horarios disponibles</p>
                                    @else
                                    <select class="form-select" id="medic" name="medic" required="">
                                        <option selected disabled>Seleccione</option>
                                        @foreach ($medicsWithHorarysDisponibilities as $medic)
                                        <option value="{{ $medic }}">{{ $medic->usuario->nombres }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="mt-4" id="textSelectHorary" style="display: none;">
                            Selecciona el horario de tu preferencia.
                        </p>
                        <div class="mt-4">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
        <script src="{{ asset('js/cita/createCita.js') }}" defer></script>
    </x-slot>
</x-admin>
