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

    <section class="section">
        <div class="row">
            <input type="hidden" name="userIdAuth" id="userIdAuth" value="{{Auth::user()->id}}">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
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
                                </div>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <!-- Lottie Files-->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.6/lottie.min.js"
        integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw=="
        crossorigin="anonymous"></script>
        <script src="{{ asset('js/api/users.js') }}" defer></script>
        <script src="{{ asset('js/api/cita.js') }}" defer></script>
        <script src="{{ asset('js/pasarelaNequi.js') }}" defer></script>
        <script src="{{ asset('js/cita/createCita.js') }}" defer></script>
    </x-slot>
</x-admin>
