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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="form-label">Seleccione la modalidad de la cita <span>(*)</span></label>
                                    <select class="form-select" id="modality" name="modality" required="">
                                        <option selected disabled>Seleccione</option>
                                        <option value="presencial">Presencial</option>
                                        <option value="virtual">Virtual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="form-label">Seleccione el médico <span>(*)</span></label>
                                    @if (count($medics) === 0)
                                        <p>No hay médicos registrados</p>
                                    @else
                                        <select class="form-select" id="medic" name="medic" required="">
                                            <option selected disabled>Seleccione</option>
                                            @foreach ($medics as $medic)
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
                            <div class="mt-4">
                                <div class="collapse" id="boxCalendar">
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <x-slot name="js">
        <script>

            $('select[name=medic]').change(function() {
                var medicText = $(this).find(':selected').val();

                let medic = JSON.parse(medicText);

                // Initialize the external events
                let disponibilitysMedico = medic.horary;
                console.log(disponibilitysMedico);
                let events = [];
                if(disponibilitysMedico.length > 0) {
                    disponibilitysMedico.map((item, index) => {
                        const disponibility = {
                            id: item.id,
                            title: `Disponible`,
                            start: item.date_disponibility,
                            end: moment(item.date_disponibility).add(30, 'minutes').format('YYYY-MM-DD HH:mm:ss'),
                            color: "#56E226",
                        }
                        events.push(disponibility);
                    });
                };

                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'timeGridWeek',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'timeGridWeek, listWeek'
                    },
                    navLinks: true,
                    locale: 'es',
                    selectable: true,
                    editable: true,
                    events: events,
                    select: function(info) {
                        //addDisponibility(info);
                    },
                    eventClick: function(info){
                        var check = moment(info.event.startStr).format('YYYY-MM-DD HH:mm:ss');
                        if(info.event.title === "Disponible"){
                            //Posibility of delete
                            //posibilityOfDelete(check);
                        }else{
                            //Details of cite with the Pacient
                        };
                    },
                    eventDrop: function(event, delta, reverFunc){
                        //posibilityOfEdit(event);
                    },
                });
                calendar.render();
                $('#boxCalendar').collapse('show');
            });
        </script>
    </x-slot>
</x-admin>
