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
                            <div class="col-lg-12">
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

        <script>
            /* Select medic */
            $('select[name=medic]').change(function() {
                var medicText = $(this).find(':selected').val();
                let medic = JSON.parse(medicText);
                let disponibilitysMedico = medic.horary;
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

                renderCalendarWithDisponibilities(events, medic.usuario);
            });


            /* Show Calendar */
            const renderCalendarWithDisponibilities = (events, infoMedic) => {
                document.getElementById('textSelectHorary').style.display = 'block';
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
                    eventClick: function(info){
                        var check = moment(info.event.startStr).format('YYYY-MM-DD HH:mm:ss');
                        viewFormCita(check, infoMedic);
                    },
                    eventDrop: function(event, delta, reverFunc){
                        //posibilityOfEdit(event);
                    },
                });
                calendar.render();
            };


            /* Show form add Cita */
            const viewFormCita = (check, infoMedic) => {
                Swal.fire({
                    title: 'Agendamiento de Cita',
                    inputLabel: 'Seleccione la modalidad de la cita',
                    input: 'select',
                    inputOptions: {
                        'Modalidad': {
                            presencial: 'Presencial',
                            virtual: 'Virtual',
                        },
                    },
                    inputPlaceholder: 'Seleccione',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar <i class="bi bi-x-circle-fill"></i>',
                    confirmButtonText: 'Continuar <i class="bi bi-arrow-right-circle-fill"></i>',
                    inputValidator: (value) => {
                        return new Promise((resolve) => {
                            if (value) {
                                confirmCita(value, check, infoMedic);
                            } else {
                                resolve('Selecciona alguna opción');
                            }
                        })
                    }
                });
            };


            /* Confirm Datos of Cita */
            const confirmCita = async (modality, check, infoMedic) => {
                let dateSelected = check.split(' ');
                let hourSelected = dateSelected[1].split(':');
                const promiseLottie = new Promise((resolve, reject) => {
                    if(modality === "virtual"){
                        resolve(`
                            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_f1jblfgm.json"  background="transparent"  speed="1"
                                style="width: 400px; height: 400px; margin-top: -80px; margin-bottom: -80px; margin-left: -80px;"   loop autoplay
                            >
                            </lottie-player>
                        `);
                    }else if(modality === "presencial"){
                        resolve(`<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_bjvf84zw.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin-top: -50px; margin-bottom: -40px;"   loop autoplay></lottie-player>`);
                    }
                });
                let animationModality = await promiseLottie;
                Swal.fire({
                    title: 'Confirmar cita',
                    html: `
                        <h4>¿Estas seguro de programar tu cita para el día ${dateSelected[0]} a las ${hourSelected[0]}:${hourSelected[1]} con el doctor ${infoMedic.nombres} de forma ${modality}?</h4>
                        <div class="d-flex justify-content-center">
                            ${animationModality}
                        </div>
                    `,
                    showCancelButton: true,
                    cancelButtonText: 'No, cancelar <i class="bi bi-x-circle-fill"></i>',
                    confirmButtonText: 'Si, agendar cita <i class="bi bi-hand-thumbs-up-fill"></i>',
                }).then((result) => {
                    if (result.isConfirmed) {
                        //Regstrar la cita en BD
                    };
                });
            };
        </script>
    </x-slot>
</x-admin>
