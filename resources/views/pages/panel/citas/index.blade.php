<x-admin>

    <!-- title -->
    @section('pagina')Mis Citas @endsection

    <div class="pagetitle">
        <h1>Mis Citas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item">Paciente</li>
                <li class="breadcrumb-item active">Mis Citas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex pt-4">
                            <p class="flex-grow-1">
                                Tus Citas
                            </p>
                           <a href="{{ route('citas.full') }}" class="btn btn-success btn-sm">Ver todas mis citas</a>
                        </div>
                        <hr>
                        @php /*
                        <div class="mt-4">
                            @if (count($citasByPacient) === 0)
                                <h3 class="text-center">No hay citas apartadas por tí, puedes agendar con el médico de tu preferencia dando clic <a href="{{route('citas.create')}}" >aquí</a></h3>
                                <div class="d-flex justify-content-center">
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_n2m0isqh.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                                </div>
                            @else
                                <div id='calendar'></div>
                            @endif
                        </div>
                        */ @endphp

                        <h6>Tus Citas agendadas de esta semana!</h6>
                        @if (count($citas_semana) > 0)

                            <div class="row">
                                @foreach ($citas_semana as $item)
                                    @php
                                        $estado = '';
                                        if($item->status == 1){
                                            $estado = '<span class="badge bg-secondary">Pendiente</span>';
                                        } else if($item->status == 2){
                                            $estado = '<span class="badge bg-success">Agendada</span>';
                                        } else if($item->status == 3){
                                            $estado = '<span class="badge bg-danger">Rechazada</span>';
                                        } else if($item->status == 4){
                                            $estado = '<span class="badge bg-secondary">Pago Pendiente</span>';
                                        }
                                    @endphp
                                    <div class="col-lg-6 col-12 mt-3">
                                        <div class="card border">
                                            <div class="card-body pt-2">
                                                <strong class="pt-3">Cita:</strong> #{{ $item->id }} <br>
                                                <strong>Fecha de la Cita:</strong> {{ $item->horaryMedico->date_disponibility }} <br>
                                                <strong>Medico:</strong> {{ $item->horaryMedico->medico->usuario->nombres }} <br>
                                                <strong>Especialidad:</strong> {{ $item->horaryMedico->medico->especialidad }} <br>
                                                <strong>Forma:</strong> {{ $item->modality }} <br>
                                                <strong>Estado:</strong> {!! $estado !!} <hr>
                                                <div class="text-end mt-2">
                                                    <a href="{{ route('citas.viewInformacion', $item->id) }}" class="btn btn-success btn-sm">Ver Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            @else
                            <div class="border mt-3 text-center p-4">
                                Actualmente no tienes ninguna cita para esta semana, agenda una!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
        @php /*
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let citasByPacient = {!! json_encode($citasByPacient) !!};
                let events = [];
                var dateCurrent = moment().format('YYYY-MM-DD HH:mm:ss');
                if(citasByPacient.length > 0) {
                    citasByPacient.map((cita, index) => {
                        const disponibility = {
                            id: cita.id,
                            title: cita.horary_medico.date_disponibility < dateCurrent ? `Ya pasó` : `Cita` ,
                            start: cita.horary_medico.date_disponibility,
                            end: moment(cita.horary_medico.date_disponibility).add(30, 'minutes').format('YYYY-MM-DD HH:mm:ss'),
                            color: cita.horary_medico.date_disponibility < dateCurrent ? "#989C9E" : "#2AC4BD",
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
                    eventClick: function(info){
                        var check = moment(info.event.startStr).format('YYYY-MM-DD HH:mm:ss');
                        showDetailsByCita(info.event.id, check);
                    },
                    eventDrop: function(event, delta, reverFunc){
                        swal.fire(
                            'Atención',
                            'No es posible realizar esta acción',
                            'warning',
                        );
                        event.revert();
                    },
                });
                calendar.render();
            });

            /* show details of cita
            const showDetailsByCita = async (idCita, date) => {
                const infoCita = await getInfoCitaApi(idCita);
                if(infoCita) {
                    alertWithInfoCita(infoCita);
                }else{
                    swal.fire(
                        '¡Opss, Ocurrió un error!',
                        'Inténtalo más tarde!',
                        'error'
                    );
                }
            };

            /* Get info cita and pacient API
            const getInfoCitaApi = async (idCita) => {
                return new Promise((resolve, reject) => {
                    swal.fire({
                            title: 'Cargando...',
                            text: '¡Espera unos segundos!',
                            icon: 'info',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        });
                    swal.showLoading();
                    axios.get(`/api/cita/show/${idCita}`)
                    .then(response => {
                        setTimeout(() => {
                            swal.close();
                            resolve(response.data);
                        }, 2000);
                    })
                    .catch(error => {
                        resolve(false);
                    });
                })
            };

            const alertWithInfoCita = async (infoCita) => {
                var dateCurrent = moment().format('YYYY-MM-DD HH:mm:ss');
                let dateSelected = infoCita.cita.horary_medico.date_disponibility.split(' ');
                let hourSelected = dateSelected[1].split(':');
                const promiseLottie = new Promise((resolve, reject) => {
                    if(infoCita.cita.modality === "Virtual"){
                        resolve(`
                            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_f1jblfgm.json"  background="transparent"  speed="1"
                                style="width: 400px; height: 400px; margin-top: -80px; margin-bottom: -80px; margin-left: -80px;"   loop autoplay
                            >
                            </lottie-player>
                        `);
                    }else if(infoCita.cita.modality === "Presencial"){
                        resolve(`<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_bjvf84zw.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin-top: -50px; margin-bottom: -40px;"   loop autoplay></lottie-player>`);
                    }
                });
                let animationModality = await promiseLottie;
                Swal.fire({
                    title: 'Detalles de la Cita',
                    html: `
                        <h4>${dateCurrent > infoCita.cita.horary_medico.date_disponibility ? 'Tuviste' : 'Tienes'} la cita
                            de forma ${infoCita.cita.modality} el día ${dateSelected[0]} a las ${hourSelected[0]}:${hourSelected[1]}
                            con ${infoCita.medico.usuario.genero === 'Masculino' ? 'el Doctor' : 'la Doctora' } ${infoCita.medico.usuario.nombres}.
                        </h4>
                        <div class="d-flex justify-content-center">
                            ${animationModality}
                        </div>
                        <div class="alert alert-info" role="alert">
                            Puedes contactar al doctor con el teléfono ${infoCita.medico.usuario.telefono} <i class="bi bi-whatsapp"></i> o el correo ${infoCita.medico.usuario.email} <i class="bi bi-envelope"></i>
                        </div>
                    `,
                    showCancelButton: true,
                    cancelButtonText: 'Cerrar <i class="bi bi-x-circle-fill"></i>',
                    confirmButtonText: 'Entendido <i class="bi bi-hand-thumbs-up-fill"></i>',
                });
            }
        </script>
        */ @endphp
    </x-slot>

</x-admin>
