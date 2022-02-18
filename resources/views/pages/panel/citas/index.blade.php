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
                        <p class="mt-4">
                            En esta sección podrás visualizar las citas que tu apartaste
                        </p>
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


            /* show details of cita */
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


            /* Get info cita and pacient API */
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
    </x-slot>

</x-admin>
