<x-login>

    <!-- title -->
    @section('pagina')Registro @endsection

    <div class="col-md-12 col-lg-10 col-12 mt-5 ">
        <div class="img_banner_registro" style="background-image: url({{ asset('images/banner_registro.png')}})">
        </div>
        <div class="wrap p-4 p-md-5 mb-5">

            <div class="text-center">
                <h4>Registrarme</h4>
                <p>
                    Complete los datos del siguiente formulario para proceder al registro. <br>
                    Los campos con <span class="text-danger">(*)</span> son obligatorios
                </p>
            </div>
            <form class="registro-clientes needs-validation" id="formulario_registro" action="#" method="POST" novalidate>
                @csrf
                <div class="row">
                    <div class="titulo-registro">
                        <h2>Datos Personales</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Nombres y Apellidos <span>(*)</span></label>
                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres') }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Tipo Documento <span>(*)</span></label>
                            <select class="custom-select" id="tipo_documento" name="tipo_documento" required="">
                                <option value="">- Seleccionar -</option>
                                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="Documento País Origen">Documento País Origen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Cedula <span>(*)</span></label>
                            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ old('cedula') }}" placeholder="ej: 11.111.111-1" maxlength="12" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Teléfono o Celular <span>(*)</span></label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required="" value="{{ old('telefono') }}" placeholder="Cód. área + número">
                        </div>
                        <div class="form-group">
                            <label for="">Fecha de Nacimiento <span>(*)</span></label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Género <span>(*)</span></label>
                            <fieldset>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" value="Femenino" required="">
                                    <label class="form-check-label" for="Femenino">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" value="Masculino" required="">
                                    <label class="form-check-label" for="Masculino">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genero" value="Otro" required="">
                                    <label class="form-check-label" for="Otro">Otro</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="titulo-registro">
                        <h2>Datos de Acceso</h2>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Email <span>(*)</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Confirmar tu Email <span>(*)</span></label>
                            <input type="email" class="form-control" id="confirmar_email" name="confirmar_email" value="{{ old('confirmar_email') }}"  required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Contraseña <span>(*)</span></label>
                            <input type="password" class="form-control" minlength="6" id="password" name="password" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Repetir Contraseña <span>(*)</span></label>
                            <input type="password" class="form-control" minlength="6" id="confirmar_password" name="confirmar_password" required="">
                        </div>
                    </div>

                    <div class="titulo-registro">
                        <h2>Datos de Despacho</h2>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Dirección <span>(*)</span></label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}" required="" >
                        </div>
                    </div>

                    <div class="col-6 text-left">
                        <a href="{{ route('login') }}" class="btn btn-dark mt-4">Iniciar Sesión</a>
                    </div>
                    <div class="col-6 text-right">
                        <button type="submit" class="btn btn-primary mt-4">Registrarme</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-login>
