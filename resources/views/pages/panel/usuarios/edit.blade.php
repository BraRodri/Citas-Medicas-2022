<x-admin>

    <!-- title -->
    @section('pagina')Editar - Gestión de Usuarios @endsection

    <div class="pagetitle">
        <h1>Editar Usuario</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('usuarios') }}">Gestionar Usuarios</a></li>
                <li class="breadcrumb-item active">Editar Usuario</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <form class="needs-validation" id="form_editar_usuarios" action="#" method="POST" novalidate>
                            @csrf
                            <div class="row g-3">

                                <h4 class="mt-5">
                                    <strong>Usuario:</strong> {{ $usuario->nombres }} <br>
                                </h4>
                                <div id="datos_globales_usuario" class="row mb-3">
                                    <div class="titulo-registro mt-3">
                                        <h5 class="fw-bold">Principal</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Tipo de Usuario <span>(*)</span></label>
                                        <select name="tipo_usuario" id="tipo_usuario" class="form-select" required>
                                            <option value="">- Seleccione -</option>
                                            @foreach($roles as $key => $value)
                                                @php
                                                    $selected = $tipo_usuario == $value->name ? 'selected="selected"' : '';
                                                @endphp
                                                <option value="{{ $value->name }}" {{ $selected }}>{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="titulo-registro mt-5">
                                        <h5 class="fw-bold">Datos Personales</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Nombres y Apellidos <span>(*)</span></label>
                                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $usuario->nombres }}" required="">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Tipo Documento <span>(*)</span></label>
                                            <select class="form-select" id="tipo_documento" name="tipo_documento" required="">
                                                <option value="">- Seleccionar -</option>
                                                <option value="Cédula de Ciudadanía" @if($usuario->tipo_documento == 'Cédula de Ciudadanía') selected @endif>Cédula de Ciudadanía</option>
                                                <option value="Cédula de Extranjería"  @if($usuario->tipo_documento == 'Cédula de Extranjería') selected @endif>Cédula de Extranjería</option>
                                                <option value="Pasaporte"  @if($usuario->tipo_documento == 'Pasaporte') selected @endif>Pasaporte</option>
                                                <option value="Documento País Origen"  @if($usuario->tipo_documento == 'Documento País Origen') selected @endif>Documento País Origen</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Cedula <span>(*)</span></label>
                                            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $usuario->numero_documento }}" placeholder="ej: 11.111.111-1" maxlength="12" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Teléfono o Celular <span>(*)</span></label>
                                            <input type="text" class="form-control" id="telefono" name="telefono" required="" value="{{ $usuario->telefono }}" placeholder="Cód. área + número">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Fecha de Nacimiento <span>(*)</span></label>
                                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento }}" required="">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="form-label">Género <span>(*)</span></label>
                                            <fieldset>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="genero" value="Femenino" @if($usuario->genero == 'Femenino') checked @endif required="">
                                                    <label class="form-check-label" for="Femenino">Femenino</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="genero" value="Masculino" @if($usuario->genero == 'Masculino') checked @endif required="">
                                                    <label class="form-check-label" for="Masculino">Masculino</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="genero" value="Otro" @if($usuario->genero == 'Otro') checked @endif required="">
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
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" minlength="6" id="password" name="password">
                                        </div>
                                    </div>

                                    <div class="titulo-registro mt-4">
                                        <h5 class="fw-bold">Datos de Residencia</h5>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Dirección <span>(*)</span></label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $usuario->direccion }}" required="" >
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
                                                    @php
                                                        $selected = $usuario->departamento == $value ? 'selected="selected"' : '';
                                                    @endphp
                                                    <option value="{{ $value }}" {{ $selected }}>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group mt-3">
                                            <label class="form-label">Ciudad <span>(*)</span></label>
                                            <select class="form-control" name="ciudad" required>
                                                <option value="">- Seleccione -</option>
                                                <option value="{{ $usuario->ciudad }}" selected>{{ $usuario->ciudad }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="div_registro_usuario_medico" class="col-lg-12">
                                        @php
                                            $especialidad_medico = '';
                                            $correo_empresarial_medico = '';

                                            if($tipo_usuario == 'Medico'){
                                                $especialidad_medico = $usuario->medico[0]->especialidad;
                                                $correo_empresarial_medico = $usuario->medico[0]->correo_empresarial;
                                            }
                                        @endphp
                                        <div class="row">
                                            <div class="titulo-registro mt-4">
                                                <h5 class="fw-bold">Datos para Medico</h5>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Especialidad <span>(*)</span></label>
                                                    <input type="text" class="form-control" id="especialidad_medico" name="especialidad_medico" value="{{ $especialidad_medico }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">Correo Empresarial <span>(*)</span></label>
                                                    <input type="email" class="form-control" id="correo_empresarial_medico" name="correo_empresarial_medico" value="{{ $correo_empresarial_medico }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="titulo-registro mt-4">
                                        <h5 class="fw-bold">Estado Usuario</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Estado <span>(*)</span></label>
                                            <select class="form-control" name="estado" required>
                                                <option value="">- Seleccione -</option>
                                                <option value="1" @if($usuario->active == '1') selected @endif>Activo</option>
                                                <option value="0" @if($usuario->active == '0') selected @endif>Inactivo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input name="id_usuario" value="{{ $usuario->id }}" hidden required>

                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-success mt-4">Actualizar Usuario</button>
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

            $('#div_registro_usuario_medico').hide();
            var tipo_usuario_one = "{{ $tipo_usuario }}";
            if(tipo_usuario_one == 'Medico'){
                $('#div_registro_usuario_medico').show();
            }
            jQuery('select[name=tipo_usuario]').change(function() {
                var opcion = jQuery(this).find(':selected').val();
                if(opcion === 'Medico'){
                    $('#div_registro_usuario_medico').show();
                    $('#especialidad_medico').attr("required", true);
                    $('#correo_empresarial_medico').attr("required", true);
                } else {
                    $('#div_registro_usuario_medico').hide();
                    $('#especialidad_medico').attr("required", false);
                    $('#correo_empresarial_medico').attr("required", false);
                }
            });

            $('#form_editar_usuarios').on('submit', function(e) {
                event.preventDefault();
                if ($('#form_editar_usuarios')[0].checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    // agregar data
                    var $thisForm = $('#form_editar_usuarios');
                    var formData = new FormData(this);

                    //ruta
                    var url = route('usuarios.actualizar');

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
                            swal("Validando datos, espere porfavor...", {
                                button: false,
                                timer: 3000
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {
                            swal("Actualización exitosa!", {
                                icon: "success",
                                button: true,
                                timer: 2000
                            });

                            setTimeout(function(){
                                location.href = route('usuarios');
                            },2000);

                        } else {
                            setTimeout(function(){
                                swal(respuesta.mensaje, {
                                    icon: "error",
                                    button: false,
                                    timer: 5000
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                    });

                }
                $('#form_editar_usuarios').addClass('was-validated');

            });
        </script>
    </x-slot>

</x-admin>