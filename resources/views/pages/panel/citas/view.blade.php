<x-admin>

    <!-- title -->
    @section('pagina')Información de la Cita @endsection

    <div class="pagetitle">
        <h1>Información de la Cita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('citas') }}">Mis Citas</a></li>
                <li class="breadcrumb-item active">Información de la Cita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
        <div class="row">
            <div class="col-lg-12">
                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Cita #{{ $cita->id }}</h5>
                        <input type="hidden" id="hour_limit_pay" value="{{ $cita->hour_limit_pay }}">
                        <div class="row">
                            <div class="div col-lg-6">
                                <h6>Información del Paciente</h6>
                                <div>
                                    <strong>Nombres:</strong> {{ $cita->paciente->usuario->nombres }}
                                </div>
                                <div>
                                    <strong>Tipo Documento:</strong> {{ $cita->paciente->usuario->tipo_documento }}
                                </div>
                                <div>
                                    <strong>Numero de Documento:</strong> {{ $cita->paciente->usuario->numero_documento }}
                                </div>
                                <div>
                                    <strong>Telefono:</strong> {{ $cita->paciente->usuario->telefono }}
                                </div>
                                <div>
                                    <strong>Correo Electronico:</strong> {{ $cita->paciente->usuario->email }}
                                </div>
                            </div>
                            <div class="div col-lg-6">
                                <h6>Información del Medico</h6>
                                <div>
                                    <strong>Nombres:</strong> {{ $cita->horaryMedico->medico->usuario->nombres }}
                                </div>
                                <div>
                                    <strong>Especialidad:</strong> {{ $cita->horaryMedico->medico->especialidad }}
                                </div>
                                <div>
                                    <strong>Correo Empresarial:</strong> {{ $cita->horaryMedico->medico->correo_empresarial }}
                                </div>
                            </div>
                            <div class="div col-lg-12">
                                <hr>
                                <h6>Información de la Cita</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <strong>Fecha de la Cita agendada:</strong> {{ $cita->horaryMedico->date_disponibility }} <br>
                                        <strong>Modalidad: </strong> {{ $cita->modality }} <br>
                                        <strong>Estado actual de la Cita: </strong>
                                        @switch($cita->status)
                                            @case(1)
                                                <span class="badge bg-secondary">Pendiente</span>
                                                @break

                                            @case(2)
                                                <span class="badge bg-success">Agendada</span>
                                                @break

                                            @case(3)
                                                <span class="badge bg-danger">Rechazada</span>
                                                @break

                                            @case(4)
                                                <span class="badge bg-secondary">Pago Pendiente</span>
                                                @break

                                            @default
                                        @endswitch <br>
                                    </div>
                                    @if ($cita->status == 1)
                                        <div class="col-lg-6 text-center">
                                            <p>Te quedan (mins) para poder realizar el pago de tu cita!</p>
                                            <div class="cd__unit-group">
                                                <div class="cd__unit" style="width: auto;">
                                                    <div class="cd__digits">
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="hourFirst" >1</div>
                                                        </div>
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="hourSecond">2</div>
                                                        </div>
                                                    </div>
                                                    <div class="cd__unit-label">Hora(s)</div>
                                                </div>
                                                <div class="cd__unit" style="width: auto;">
                                                    <div class="cd__digits">
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="minuteFirst">0</div>
                                                        </div>
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="minuteSecond">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="cd__unit-label">Minuto(s)</div>
                                                </div>
                                                <div class="cd__unit" style="width: auto;">
                                                    <div class="cd__digits">
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="secondFirst">0</div>
                                                        </div>
                                                        <div class="cd__digit" data-col style="z-index: 999;">
                                                            <div data-pos="next" id="secondSecond">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="cd__unit-label">Segundo(s)</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @if ($cita->status == 1)
                                <div class="col-lg-12">
                                    <hr>
                                    <h6>Pago de la Cita</h6>
                                    <p class="text-dark">Para continuar con el agendamiento completo de tu cita, porfavor procede a pagar!</p>
                                    <form method="POST" id="form_validar_pago" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <strong>Selecciona un metodo de pago:</strong> <br> <br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="medio_de_pago" id="medio_de_pago" value="1" required>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        PayU (En linea)
                                                    </label> <br>
                                                    <img src="{{ asset('images/payments/PAYU.png') }}" class="img-thumbnail img-pagos" width="100" height="100">
                                                </div>
                                                @if ($cita->modality == 'Presencial')
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="medio_de_pago" id="medio_de_pago" value="2" required>
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Efectivo
                                                        </label> <br>
                                                        <img src="{{ asset('images/payments/EFECTIVO.png') }}" class="img-thumbnail img-pagos" width="100" height="100">
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <strong>Valor de la cita:</strong> <br> <br>
                                                <ul>
                                                    <li>
                                                        <strong>Subtotal:</strong>
                                                        $ 150.000
                                                    </li>
                                                    <li>
                                                        <strong>Total:</strong>
                                                        $ 150.000
                                                    </li>
                                                    <input type="hidden" name="total" value="{{ $amount }}" required>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="text-start mt-4">
                                            <button type="submit" class="btn btn-dark btn-sm">Ir a Pagar</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form id="form_envio_payu" action="{{ $url_form }}" method="POST">
        <input name="merchantId"      type="hidden"  value="{{ $merchantId }}" required>
        <input name="accountId"       type="hidden"  value="{{ $accountId }}" required>
        <input name="description"     type="hidden"  value="{{ $description }}" required>
        <input name="referenceCode"   type="hidden"  value="{{ $referenceCode }}" required>
        <input name="amount"          type="hidden"  value="{{ $amount }}" required>
        <input name="tax"             type="hidden"  value="{{ $tax }}" required>
        <input name="taxReturnBase"   type="hidden"  value="{{ $taxReturnBase }}" required>
        <input name="currency"        type="hidden"  value="{{ $currency }}" required>
        <input name="signature"       type="hidden"  value="{{ $signature }}" required>
        <input name="test"            type="hidden"  value="{{ $test }}" required>
        <input name="buyerEmail"      type="hidden"  value="{{ $buyerEmail }}" required>
        <input name="responseUrl"     type="hidden"  value="{{ $responseUrl }}" required>
        <input name="confirmationUrl" type="hidden"  value="{{ $confirmationUrl }}" required>
        <input name="extra1"          type="hidden"  value="{{ $extra1 }}" required>
    </form>

    <x-slot name="js">
        <script>

            $( document ).ready(function() {

                var fecha_limite = $('#hour_limit_pay').val();

                /* Cronometro */
                var eventTime =  moment(fecha_limite, "YYYY-M-D H:mm:ss").unix();
                var currentTime = moment().unix();
                var diffTime = eventTime - currentTime;
                var duration = moment.duration(diffTime*1000, 'milliseconds');
                var interval = 1000;

                setInterval(() => {

                    duration = moment.duration(duration - interval, 'milliseconds');
                    if(duration.hours() > 9){
                        console.log('entro 1');
                        var hour = duration.hours();
                        var hourText = hour.toString();
                        var hourArray = hourText.split("");
                        document.getElementById('hourFirst').textContent = hourArray[0];
                        document.getElementById('hourSecond').textContent = hourArray[1];
                    }else{
                        console.log('entro 2');
                        document.getElementById('hourFirst').textContent = 0;
                        document.getElementById('hourSecond').textContent = duration.hours();
                    }

                    if(duration.hours() > 9){
                        var hour = duration.minutes();
                        var hourText = hour.toString();
                        var hourArray = hourText.split("");
                        document.getElementById('minuteFirst').textContent = hourArray[0];
                        document.getElementById('minuteSecond').textContent = hourArray[1];
                    }else{
                        document.getElementById('minuteFirst').textContent = 0;
                        document.getElementById('minuteSecond').textContent = duration.minutes();
                    }

                    if(duration.hours() > 9){
                        var hour = duration.seconds();
                        var hourText = hour.toString();
                        var hourArray = hourText.split("");
                        document.getElementById('secondFirst').textContent = hourArray[0];
                        document.getElementById('secondSecond').textContent = hourArray[1];
                    }else{
                        document.getElementById('secondFirst').textContent = 0;
                        document.getElementById('secondSecond').textContent = duration.seconds();
                    }
                }, interval);
                });

            $('#form_validar_pago').on('submit', function(e) {
                event.preventDefault();
                $('#btn_guardar').prop('disabled', true);
                if ($('#form_validar_pago')[0].checkValidity() === false) {
                    event.stopPropagation();
                    $('#btn_guardar').prop('disabled', false);
                    Swal.fire({
                        title: "Error!",
                        text: 'Debes elegir un metodo de pago!',
                        icon: 'error',
                    });
                } else {

                    var metodo_pago = $('input:radio[name=medio_de_pago]:checked').val();
                    if(metodo_pago === '1'){
                        Swal.fire({
                            title: "Procesando Pago!",
                            text: "Se esta validando la información, espero un momento porfavor...",
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                            },
                        });
                        $('#form_envio_payu').submit();
                    } else {
                        alert('efectivo');
                    }

                }
                $('#form_validar_pago').addClass('was-validated');
            });

        </script>
    </x-slot>

</x-admin>
