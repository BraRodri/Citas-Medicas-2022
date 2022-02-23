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

        <script>
            /* Select medic */
            $('select[name=medic]').change(function() {
                var medicText = $(this).find(':selected').val();
                let medic = JSON.parse(medicText);
                var dateCurrent = moment().format('YYYY-MM-DD HH:mm:ss');
                axios.get(`/api/horary/${medic.id}`)
                .then(response => {
                    let disponibilitysMedico = response.data.horarysDisponibles;
                    let events = [];
                    if(disponibilitysMedico.length > 0) {
                        disponibilitysMedico.map((item, index) => {
                            if(dateCurrent < item.date_disponibility){
                                const disponibility = {
                                    id: item.id,
                                    title: `Disponible`,
                                    start: item.date_disponibility,
                                    end: moment(item.date_disponibility).add(30, 'minutes').format('YYYY-MM-DD HH:mm:ss'),
                                    color: "#56E226",
                                }
                                events.push(disponibility);
                            };
                        });
                    };

                    renderCalendarWithDisponibilities(events, medic);
                });
            });


            /* Show Calendar */
            const renderCalendarWithDisponibilities = async (events, infoMedic) => {
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
                    eventClick: async function(info){
                        var check = moment(info.event.startStr).format('YYYY-MM-DD HH:mm:ss');
                        //Validar que el paciente no haya apartado otra cita con la misma fecha con otro doctor
                        const citaWithOtherDoctor = await validateFechaRepeat(check);
                        if(!citaWithOtherDoctor){
                            viewFormCita(check, infoMedic);
                        }else{
                            swal.fire(
                                'Atención',
                                `Ya apartaste una cita con el doctor ${citaWithOtherDoctor} con este mismo horario`,
                                'info',
                            );
                        }
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
            };

            /* Validar que el paciente no haya apartado otra cita con la misma fecha con otro doctor */
            const validateFechaRepeat = (dateSelected) => {
                return new Promise((resolve, reject) => {
                    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
                    axios.post('/api/cita/validateCitaWithOtherDoctor', {
                        dateSelected: dateSelected,
                        auth: {!! json_encode(Auth::user()->id) !!}
                    }, {
                        headers: {'X-CSRF-TOKEN': laravelToken }
                    })
                    .then(response => {
                        resolve(response.data.info);
                    })
                    .catch(error => {
                        console.log(error);
                        swal.fire(
                            '¡Opss, Ocurrió un error!',
                            'Inténtalo más tarde!',
                            'error'
                        )
                    })
                });
            }

            /* Show form add Cita */
            const viewFormCita = (check, infoMedic) => {
                Swal.fire({
                    title: 'Agendamiento de Cita',
                    inputLabel: 'Seleccione la modalidad de la cita',
                    input: 'select',
                    inputOptions: {
                        'Modalidad': {
                            Presencial: 'Presencial',
                            Virtual: 'Virtual',
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
                    if(modality === "Virtual"){
                        resolve(`
                            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_f1jblfgm.json"  background="transparent"  speed="1"
                                style="width: 400px; height: 400px; margin-top: -80px; margin-bottom: -80px; margin-left: -80px;"   loop autoplay
                            >
                            </lottie-player>
                        `);
                    }else if(modality === "Presencial"){
                        resolve(`<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_bjvf84zw.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px; margin-top: -50px; margin-bottom: -40px;"   loop autoplay></lottie-player>`);
                    }
                });
                let animationModality = await promiseLottie;
                Swal.fire({
                    title: 'Confirmar cita',
                    html: `
                        <h4>¿Estas seguro de programar tu cita para el día ${dateSelected[0]} a las ${hourSelected[0]}:${hourSelected[1]} con el doctor ${infoMedic.usuario.nombres} de forma ${modality}?</h4>
                        <div class="d-flex justify-content-center">
                            ${animationModality}
                        </div>
                    `,
                    showCancelButton: true,
                    cancelButtonText: 'No, cancelar <i class="bi bi-x-circle-fill"></i>',
                    confirmButtonText: 'Si, agendar cita <i class="bi bi-hand-thumbs-up-fill"></i>',
                }).then((result) => {
                    if (result.isConfirmed) {
                        selectedTypePayment(modality, check, infoMedic);
                        //addCita(modality, check, infoMedic);
                    };
                });
            };


            /* Select type of payment */
            const selectedTypePayment = async (modality, check, infoMedic) => {
                Swal.fire({
                    title: 'Seleccione el tipo de pago',
                    html: `
                        <div class="row justify-content-center align-items-center">
                            <label for="methodPay" class="col-form-label text-center">Seleccione el método de pago
                                preferido</label>
                        </div>

                        <div class="row mb-3 justify-content-center align-items-center">
                            <div class="col-md-10 d-flex justify-content-center">
                                <div class="form-check form-check-inline d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="typePaymentCita" id="nequi"
                                        value="nequi" checked onclick="clickRadioPayment('nequi')">
                                    <label class="form-check-label" for="nequi">
                                        <img src="{{asset('images/nequi-logo.png')}}" class="img-fluid"
                                            style="max-height: 105px;" />
                                    </label>
                                </div>
                                ${modality === 'Presencial' ? `
                                <div class="form-check form-check-inline d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="typePaymentCita" id="efectivo"
                                        value="efectivo" onclick="clickRadioPayment('efectivo')">
                                    <label class="form-check-label" for="efectivo">
                                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_jOH2sn.json"
                                            background="transparent" speed="1" style="max-height: 100px; max-width: 100px; margin-top: -20px; margin-bottom: -20px;" loop autoplay>
                                        </lottie-player> Pagar efectivo
                                    </label>
                                </div>
                                ` : ''}
                            </div>
                        </div>
                    `,
                    showConfirmButton: true,
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: 'Pagar ya <i class="bi bi-check-circle-fill"></i>',
                    denyButtonText: `Pagar despues <i class="bi bi-hourglass-top"></i>`,
                    cancelButtonText: 'Continuar <i class="bi bi-arrow-right-circle-fill"></i>',
                    cancelButtonColor: '#F0B825'
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        // Dió clic en Pagar ya
                        let typePaymentSelected = document.querySelector('input[name="typePaymentCita"]:checked').value;
                        const cita = await addCita(modality, check, infoMedic, typePaymentSelected);
                        if(typePaymentSelected === "nequi"){
                            showFormNequi(cita.id);
                        }
                    }else if (result.isDenied){
                        console.log('Dió clic en Pagar despues');
                        // Dió clic en Pagar despues
                        let typePaymentSelected = document.querySelector('input[name="typePaymentCita"]:checked').value;
                        //await addCita(modality, check, infoMedic, typePaymentSelected);
                        //Mostrar alerta de que lo de las 12 horas y que no se que
                    }else{
                        // Selecciono pagar en efectivo - BTN CONTINUAR
                        let typePaymentSelected = document.querySelector('input[name="typePaymentCita"]:checked').value;
                        /*await addCita(modality, check, infoMedic, typePaymentSelected);
                        swal.fire(
                            'Registro exitoso!',
                            '¡Tu cita se guardó de forma segura, recuerda hacer el pago en efectivo!',
                            'success'
                        ).then(
                            function(e) {
                                if (e.value === true) {
                                    window.location.replace(`/panel/citas`);
                                } else {
                                    window.location.replace(`/panel/citas`);
                                }
                            },
                            function(dismiss) {
                                return false;
                            }
                        );*/
                    }
                });
            }

            function clickRadioPayment(radioChecked) {
                if (radioChecked === "efectivo"){
                    Swal.getConfirmButton().style.display = 'none';
                    Swal.getDenyButton().style.display = 'none';
                    Swal.getCancelButton().style.display = 'inline-block';
                }else{
                    Swal.getConfirmButton().style.display = 'inline-block';
                    Swal.getDenyButton().style.display = 'inline-block';
                    Swal.getCancelButton().style.display = 'none';
                }
            }

            /* Add Cita in BD */
            const addCita = async (modality, check, infoMedic, typePaymentSelected) => {
                swal.fire({
                    title: 'Cargando...',
                    text: '¡Espera unos segundos mientras se agenda la cita!',
                    icon: 'info',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });
                swal.showLoading();

                const horarySelected = infoMedic.horary.find(function(horary) {
                    return horary.date_disponibility === check;
                });

                var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
                return new Promise((resolve, reject) => {
                    axios.post('/panel/citas', {
                        horary_medico_id: horarySelected.id,
                        modality: modality,
                        typePaymentSelected: typePaymentSelected
                    }, {
                        headers: {'X-CSRF-TOKEN': laravelToken }
                    })
                    .then(response => {
                        setTimeout(() => {
                            if (response.data.info.message === "created") {
                                resolve(response.data.info.cita);
                            } else if(response.data.info.message === "failed") {
                                swal.fire(
                                    '¡Opss, Ocurrió un error!',
                                    'Inténtalo más tarde!',
                                    'error'
                                )
                            }
                        }, 3000);
                    })
                    .catch(error => {
                        swal.fire(
                            '¡Opss, Ocurrió un error!',
                            'Inténtalo más tarde!',
                            'error'
                        )
                    })
                });
            }


            /* Form of Nequi */
            const showFormNequi = (idCita) => {
                const telephonePacient = {!! json_encode(Auth::user()->telefono) !!};
                Swal.fire({
                    title: 'Formulario Nequi',
                    inputLabel: 'Cuenta Nequi',
                    input: 'tel',
                    inputValue: telephonePacient,
                    inputPlaceholder: 'Teléfono',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar <i class="bi bi-x-circle-fill"></i>',
                    confirmButtonText: 'Continuar <i class="bi bi-arrow-right-circle-fill"></i>',
                    inputValidator: (value) => {
                        return new Promise((resolve) => {
                            if (value) {
                                resolve(value);
                            } else {
                                resolve('Escribe el número de teléfono');
                            }
                        })
                    }
                });
            }

                                        /*swal.fire(
                                'Registro exitoso!',
                                'Tu cita se guardó de forma segura!',
                                'success'
                            ).then(
                                function(e) {
                                    if (e.value === true) {
                                        window.location.replace(`/panel/citas`);
                                    } else {
                                        window.location.replace(`/panel/citas`);
                                    }
                                },
                                function(dismiss) {
                                    return false;
                                }
                            );*/
        </script>
    </x-slot>
</x-admin>
