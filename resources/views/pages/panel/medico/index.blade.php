<x-admin>

    <!-- title -->
    @section('pagina')Mi Agenda @endsection

    <div class="pagetitle">
        <h1>Mi Agenda</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item">Medico</li>
                <li class="breadcrumb-item active">Mi Agenda</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="mt-4">
                            En esta sección podrás visualizar las citas a atender y los datos del paciente que la aparto
                        </p>
                        <div class="mt-4">
                            @if (count($citasByMedico) === 0)
                                <h3 class="text-center">No hay citas apartadas por pacientes</h3>
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
                let citasByMedico = {!! json_encode($citasByMedico) !!};
                let events = [];
                var dateCurrent = moment().format('YYYY-MM-DD HH:mm:ss');
                if(citasByMedico.length > 0) {
                    citasByMedico.map((horary, index) => {
                        const disponibility = {
                            id: horary.cita.id,
                            title: horary.date_disponibility < dateCurrent ? `Ya pasó` : `Cita` ,
                            start: horary.date_disponibility,
                            end: moment(horary.date_disponibility).add(30, 'minutes').format('YYYY-MM-DD HH:mm:ss'),
                            color: horary.date_disponibility < dateCurrent ? "#989C9E" : "#2AC4BD",
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
                    title: 'Cita apartada',
                    html: `
                        <h4>El paciente ${infoCita.paciente.usuario.nombres}
                            con dócumento de identidad ${infoCita.paciente.usuario.numero_documento}
                            apartó la cita del día ${dateSelected[0]} a las ${hourSelected[0]}:${hourSelected[1]}
                            de forma ${infoCita.cita.modality}.
                        </h4>
                        <div class="d-flex justify-content-center">
                            ${animationModality}
                        </div>
                        <div class="alert alert-info" role="alert">
                            Puedes contactar al paciente con el teléfono ${infoCita.paciente.usuario.telefono} <i class="bi bi-whatsapp"></i> o el correo ${infoCita.paciente.usuario.email} <i class="bi bi-envelope"></i>
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
