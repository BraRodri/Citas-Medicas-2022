<x-admin>

    <!-- title -->
    @section('pagina')Respuesta de Pago @endsection

    <div class="pagetitle">
        <h1>Respuesta de Pago</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('citas') }}">Mis Citas</a></li>
                <li class="breadcrumb-item"><a href="{{ route('citas.viewInformacion', $cita->id) }}">Cita #{{ $cita->id }}</a></li>
                <li class="breadcrumb-item active">Respuesta de Pago</li>
            </ol>
        </nav>
    </div>

    <section class="section faq">
        <div class="row">
            <div class="col-lg-12">
                <div class="card basic">
                    <div class="card-body">
                        <h5 class="card-title">Cita #{{ $cita->id }}</h5>
                        <hr>
                        <p><strong>Estado del pedido: </strong> {{ $pago->estado }}</p>
                        <p>Al correo <strong>{{ $pago->email_notificacion }}</strong>, en breves momento le llegara un correo informando el estado de su proceso de pago en la plataforma de PAYU.</p>
                        <p><strong>Descripción:</strong> {{ $pago->descripcion }}</p>
                        <div class="row mt-5 text-center">
                            <div class="col-12 col-lg-3 border-right border-dark">
                                <h6 class="font-weight-bold">CITA NÚMERO:</h6>
                                <p class="text-uppercase">#{{ $cita->id }}</p>
                            </div>
                            <div class="col-12 col-lg-3 border-right border-dark">
                                <h6 class="font-weight-bold">FECHA PAGO:</h6>
                                <p class="text-uppercase">{{ $pago->fecha_pago }} </p>
                            </div>
                            <div class="col-12 col-lg-3 ">
                                <h6 class="font-weight-bold">TOTAL:</h6>
                                <p class="text-uppercase">$ {{ number_format($pago->valor)}}</p>
                            </div>
                            <div class="col-12 col-lg-3 border-right border-dark">
                                <h6 class="font-weight-bold">TRANSACCIÓN ID:</h6>
                                <p class="text-uppercase">{{ $pago->transaccion_id }}</p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">REFERENCIA DE VENTA:</h6>
                                <p class="text-uppercase">{{ $pago->referencia_venta }}</p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">REFERENCIA DE TRANSACCIÓN:</h6>
                                <p class="text-uppercase">{{ $pago->referencia_transaccion }}</p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">FORMA DE PAGO:</h6>
                                <p class="text-uppercase">{{ $pago->metodo_pago }}</p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">ENTIDAD:</h6>
                                <p class="text-uppercase">
                                    {{ $pago->entidad }}
                                </p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">NUMERO DE CUOTAS:</h6>
                                <p class="text-uppercase">{{ $pago->numero_coutas }}</p>
                            </div>
                            <div class="col-12 col-lg-3 mt-4 border-right border-dark">
                                <h6 class="font-weight-bold">MONEDA DE PAGO:</h6>
                                <p class="text-uppercase">{{ $pago->moneda }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="text-cemter">
                            <p>Para ver mayor información de tu cita, <a href="{{ route('citas.viewInformacion', $cita->id) }}">ingrasa aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="js">
        <script>
        </script>
    </x-slot>

</x-admin>
