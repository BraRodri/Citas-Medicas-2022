<x-admin>

    <!-- title -->
    @section('pagina')Crear - Gestión de Usuarios @endsection

    <div class="pagetitle">
        <h1>Crear Usuario</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('usuarios') }}">Gestionar Usuarios</a></li>
                <li class="breadcrumb-item active">Crear Usuario</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <form class="needs-validation" id="form_registro_usuarios" action="#" method="POST" novalidate>
                            @csrf
                            <div class="row g-3">

                                <p class="mt-5">
                                    Primero, selecciona el tipo de usuario que desea registrar:
                                </p>
                                <select name="tipo_usuario" id="tipo_usuario" class="form-select" required>
                                    <option value="">- Seleccione -</option>
                                    @foreach($roles as $key => $value)
                                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>

                                <div id="datos_globales_usuario" class="row g-3">
                                    <div class="titulo-registro mt-5">
                                        <h5 class="fw-bold">Datos Personales</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Nombres y Apellidos <span>(*)</span></label>
                                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres') }}" required="">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Tipo Documento <span>(*)</span></label>
                                            <select class="form-select" id="tipo_documento" name="tipo_documento" required="">
                                                <option value="">- Seleccionar -</option>
                                                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                                <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                                <option value="Documento País Origen">Documento País Origen</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Cedula <span>(*)</span></label>
                                            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ old('cedula') }}" placeholder="ej: 11.111.111-1" maxlength="12" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Teléfono o Celular <span>(*)</span></label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" required="" value="{{ old('telefono') }}" placeholder="Cód. área + número">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Fecha de Nacimiento <span>(*)</span></label>
                                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required="">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Género <span>(*)</span></label>
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

                                    <div class="titulo-registro mt-4">
                                        <h5 class="fw-bold">Datos de Acceso</h5>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Email <span>(*)</span></label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Contraseña <span>(*)</span></label>
                                            <input type="password" class="form-control" minlength="6" id="password" name="password" required="">
                                        </div>
                                    </div>

                                    <div class="titulo-registro mt-4">
                                        <h5 class="fw-bold">Datos de Residencia</h5>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Dirección <span>(*)</span></label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}" required="" >
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mt-3">
                                            <label class="form-label">Pais <span>(*)</span></label>
                                            <select class="form-control" name="pais" required>
                                                <option value="Colombia" selected>Colombia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mt-3">
                                            <label class="form-label">Departamento <span>(*)</span></label>
                                            <select class="form-control" name="departamento" required>
                                                <option value="">- Seleccione -</option>
                                                @foreach($departamentos as $key => $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mt-3">
                                            <label class="form-label">Ciudad <span>(*)</span></label>
                                            <select class="form-control" name="ciudad" required>
                                                <option value="">- Seleccione -</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="div_registro_usuario_medico" class="col-lg-12">
                                        <div class="row">
                                            <div class="titulo-registro mt-4">
                                                <h5 class="fw-bold">Datos para Medico</h5>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Especialidad <span>(*)</span></label>
                                                    <select class="form-control" name="especialidad_medico" id="especialidad_medico">
                                                        <option value="">- Seleccione -</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Correo Empresarial <span>(*)</span></label>
                                                    <input type="email" class="form-control" id="correo_empresarial_medico" name="correo_empresarial_medico">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-success mt-4">Registrar Usuario</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-slot name="js">
        <script>
            $('select[name=departamento]').change(function() {
                var departamento = $(this).find(':selected').val();
                var url_principal = route('panel.obtenerCiudades', departamento);
                $('select[name=ciudad]').html("");
                $('select[name=ciudad]').load(url_principal);
            });
        </script>
        <script>
            $('#datos_globales_usuario').hide();
            $('#div_registro_usuario_medico').hide();

            jQuery('select[name=tipo_usuario]').change(function() {
                var opcion = jQuery(this).find(':selected').val();
                $('#datos_globales_usuario').show();
                if(opcion === ''){
                    $('#datos_globales_usuario').hide();
                } else {
                    if(opcion === 'Medico'){
                        $('#div_registro_usuario_medico').show();
                        $('#especialidad_medico').attr("required", true);
                        $('#correo_empresarial_medico').attr("required", true);
                    } else {
                        $('#div_registro_usuario_medico').hide();
                        $('#especialidad_medico').attr("required", false);
                        $('#correo_empresarial_medico').attr("required", false);
                    }
                }
            });



            $('#form_registro_usuarios').on('submit', function(e) {
                event.preventDefault();
                if ($('#form_registro_usuarios')[0].checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    // agregar data
                    var $thisForm = $('#form_registro_usuarios');
                    var formData = new FormData(this);

                    //ruta
                    var url = route('usuarios.insertar');

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        type: "POST",
                        encoding:"UTF-8",
                        url: url,
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        beforeSend:function(){
                            Swal.fire({
                                text: 'Validando datos, espere porfavor...',
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                },
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {
                            Swal.fire({
                                title: 'Registro exitoso!',
                                icon: 'success',
                                showConfirmButton: true,
                                timer: 2000
                            });

                            setTimeout(function(){
                                location.href = route('usuarios');
                            },2000);

                        } else {
                            setTimeout(function(){
                                Swal.fire({
                                    title: espuesta.mensaje,
                                    icon: 'error',
                                    showConfirmButton: true,
                                    timer: 2000
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                    });

                }
                $('#form_registro_usuarios').addClass('was-validated');

            });

        </script>
    </x-slot>

</x-admin>
