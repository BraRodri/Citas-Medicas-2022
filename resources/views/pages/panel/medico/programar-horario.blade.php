<x-admin>

    <!-- title -->
    @section('pagina')Programar Horario @endsection

    <div class="pagetitle">
        <h1>Programación de mi Horario</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item">Medico</li>
                <li class="breadcrumb-item active">Programar Horario</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section ">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <p class="mt-4">
                            Gestión de mi horario, lo minimo que puedes programar es una semana, selecciona el horario que estas disponible
                            para agendamiento de citas con pacientes.
                        </p>
                        <div class="mt-4">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        @include('pages.panel.medico.formDisponibilidadCita')
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
                // Initialize the external events
                let disponibilitysMedico = {!! json_encode($disponibilitysMedico) !!};
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
                    events: events,
                    select: function(info) {

                        // leemos las fechas de inicio de evento y hoy
                        var check = moment(info.startStr).format('YYYY-MM-DD HH:mm:ss');
                        var today = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

                        // si el inicio de evento ocurre hoy o en el futuro mostramos el modal
                        if (check >= today) {
                            let dateSelected = check.split(' ');
                            let hourSelected = dateSelected[1].split(':');

                            Swal.fire({
                                title: 'Añadir disponibilidad',
                                html: '<div class="d-flex justify-content-center">' +
                                    '<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_gnh15vxc.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin-top: -50px; margin-bottom: -40px;"   loop autoplay></lottie-player>' +
                                    '</div>' +
                                    '<h4>'+ `¿Estas seguro de programar disponibilidad el ${dateSelected[0]} a las ${hourSelected[0]}:${hourSelected[1]}?` + '</h4>',
                                showCancelButton: true,
                                cancelButtonText: 'No, cancelar <i class="bi bi-x-circle-fill"></i>',
                                confirmButtonText: 'Si, añadir <i class="bi bi-plus-circle-fill"></i>',
                            }).then((result) => {
                                /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
                                    axios.post('/panel/medico/programar-horario', {
                                        dateSelected: check,
                                    }, {
                                        headers: {'X-CSRF-TOKEN': laravelToken }
                                    })
                                    .then(response => {
                                        console.log(response.data);
                                        if(response.data.info === "created"){
                                            swal.fire(
                                                'Registro exitoso!',
                                                'La información se guardó de forma segura!',
                                                'success'
                                            ).then(
                                                function(e) {
                                                    if (e.value === true) {
                                                        window.location.replace(`/panel/medico/programar-horario`);
                                                    } else {
                                                        window.location.replace(`/panel/medico/programar-horario`);
                                                    }
                                                },
                                                function(dismiss) {
                                                    return false;
                                                }
                                            );
                                        }else if(response.data.info === "failed"){
                                            swal.fire(
                                                '¡Opss, Ocurrió un error!',
                                                'Inténtalo más tarde!',
                                                'error'
                                            )
                                        }else if(response.data.info === "notIsMedic"){
                                            swal.fire(
                                                '¡Advertencía!',
                                                'Devido a que no eres Medico, no se añadió la disponibilidad!',
                                                'warning'
                                            )
                                        }
                                    })
                                    .catch(error => {
                                        swal.fire(
                                            '¡Opss, Ocurrió un error!',
                                            'Inténtalo más tarde!',
                                            'error'
                                        )
                                    });
                                }
                            })
                        }
                        // si no, mostramos una alerta de error
                        else {
                            swal.fire(
                                '¡Opss, Lo siento!',
                                'No se pueden crear eventos en el pasado!',
                                'error'
                            );
                        }
                    },
                });
                calendar.render();

            });
        </script>
    </x-slot>

</x-admin>
