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
    </section>

    <x-slot name="js">
        <script>
            document.addEventListener('DOMContentLoaded', function() {

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
                    select: function(info) {

                        // leemos las fechas de inicio de evento y hoy
                        var check = moment(info.startStr).format('YYYY-MM-DD HH:mm:ss');
                        var today = moment(new Date()).format('YYYY-MM-DD HH:mm:ss');

                        //alert(info.startStr);

                        // si el inicio de evento ocurre hoy o en el futuro mostramos el modal
                        if (check >= today) {

                            alert('hola');
                        }
                        // si no, mostramos una alerta de error
                        else {
                            swal('No se pueden crear eventos en el pasado!', {
                                icon: "error",
                                button: true,
                                timer: 3000
                            });
                        }
                    },
                });
                calendar.render();

            });
        </script>
    </x-slot>

</x-admin>
