<x-admin>

    <!-- title -->
    @section('pagina')Mi Perfil @endsection

    <div class="pagetitle">
        <h1>Mi Perfil</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item">Información</li>
                <li class="breadcrumb-item active">Mi Perfil</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        @if(Auth::user()->avatar == null)
                            <img src="{{ asset('images/avatar.png') }}" alt="Profile" class="rounded-circle">
                            @else
                            <img src="{{ asset(Auth::user()->avatar) }}" alt="Profile" class="rounded-circle">
                        @endif
                        <h2>{{ Auth::user()->nombres }}</h2>
                        <h3>{{ Auth::user()->roles[0]->name }}</h3>
                    </div>
                </div>
            </div>

          <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Descripción general</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Actualizar Contraseña</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-firma">Actualizar Firma</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Detalles:</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nombre Completo</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->nombres }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tipo Documento</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->tipo_documento }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Numero Documento</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->numero_documento }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Especialidad</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->medico->especialidad  }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Fecha Nacimiento</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->fecha_nacimiento }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Genero</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->genero }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Telefono</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->telefono }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Dirección</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->direccion }}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form id="formulario_actualizacion_perfil" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen de perfil</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if(Auth::user()->avatar == null)
                                            <img src="{{ asset('images/avatar.png') }}" alt="Profile">
                                            @else
                                            <img src="{{ asset(Auth::user()->avatar) }}" alt="Profile">
                                        @endif
                                        <div class="pt-2 element_subir_img">
                                            <i class="bi bi-upload" id="btn_cambiar_img"></i><span class="name" id="texto_avatar">Nada seleccionado</span> <br>
                                            <input type="file" name="file_avatar" id="file_avatar" hidden>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nombres Completos</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="nombres" type="text" class="form-control" id="nombres" value="{{ Auth::user()->nombres }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Tipo Documento</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" name="tipo_documento" required>
                                            <option value="">- Seleccionar -</option>
                                            <option value="Cédula de Ciudadanía" @if(Auth::user()->tipo_documento == 'Cédula de Ciudadanía') selected @endif>Cédula de Ciudadanía</option>
                                            <option value="Cédula de Extranjería" @if(Auth::user()->tipo_documento == 'Cédula de Extranjería') selected @endif>Cédula de Extranjería</option>
                                            <option value="Pasaporte" @if(Auth::user()->tipo_documento == 'Pasaporte') selected @endif>Pasaporte</option>
                                            <option value="Documento País Origen" @if(Auth::user()->tipo_documento == 'Documento País Origen') selected @endif>Documento País Origen</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Numero Documento</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="numero_documento" type="text" class="form-control" id="numero_documento" value="{{ Auth::user()->numero_documento }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Fecha Nacimiento</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" value="{{ Auth::user()->fecha_nacimiento }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Genero</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" name="genero" required>
                                            <option value="">- Seleccionar -</option>
                                            <option value="Masculino" @if(Auth::user()->genero == 'Masculino') selected @endif>Masculino</option>
                                            <option value="Femenino" @if(Auth::user()->genero == 'Femenino') selected @endif>Femenino</option>
                                            <option value="Otro" @if(Auth::user()->genero == 'Otro') selected @endif>Otro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="telefono" type="text" class="form-control" id="telefono" value="{{ Auth::user()->telefono }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Dirección</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="direccion" type="text" class="form-control" id="direccion" value="{{ Auth::user()->direccion }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email" value="{{ Auth::user()->email }}" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                                <input name="id_usuario" value="{{ Auth::user()->id }}" hidden>
                            </form><!-- End Profile Edit Form -->
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form id="formulario_actualizacion_perfil_password" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="row mb-3">
                                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña actual</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="currentPassword" minlength="6" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newpassword" type="password" class="form-control" id="newPassword" minlength="6" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Repetir Nueva Contraseña</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewpassword" type="password" class="form-control" id="renewPassword" minlength="6" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                                </div>
                                <input name="id_usuario" value="{{ Auth::user()->id }}" hidden>
                            </form><!-- End Change Password Form -->
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-firma">
                            <!-- Change Password Form -->
                            <form id="formulario_actualizacion_perfil_firma" class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen Firma</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if(Auth::user()->firma == null)
                                            <img src="{{ asset('images/sin_firma.jpg') }}" alt="Profile" style="max-width: 300px; max-height: 200px;">
                                            @else
                                            <img src="{{ asset(Auth::user()->firma) }}" alt="Profile" style="max-width: 300px; max-height: 200px;">
                                        @endif
                                        <div class="pt-2 element_subir_img">
                                            <i class="bi bi-upload" id="btn_cambiar_firma"></i><span class="name" id="texto_firma">Nada seleccionado</span> <br>
                                            <input type="file" name="file_firma" id="file_firma" hidden required>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar Firma</button>
                                </div>
                                <input name="id_usuario" value="{{ Auth::user()->id }}" hidden>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
    </section>

    <x-slot name="js">
        <script>
            $("#btn_cambiar_img").click(function () {
                $("#file_avatar").trigger('click');
            });

            $('#file_avatar').on('change', function() {
                var val = $(this).val();
                $(this).siblings('#texto_avatar').text(val);
            });

            //proceso de actualizacion datos
            $('#formulario_actualizacion_perfil').on('submit', function(e) {
                event.preventDefault();
                if ($('#formulario_actualizacion_perfil')[0].checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    // agregar data
                    var $thisForm = $('#formulario_actualizacion_perfil');
                    var formData = new FormData(this);

                    //ruta
                    var url = route('actualizarPerfil');

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
                            swal.fire("Validando datos, espere porfavor...", {
                                button: false,
                                timer: 3000
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {

                            swal.fire("Datos Actualizados con exitoso.", {
                                icon: "success",
                                button: true,
                                timer: 2000
                            });

                            setTimeout(function(){
                                location.reload();
                            },2000);

                        } else {
                            setTimeout(function(){
                                swal.fire(respuesta.mensaje, {
                                    icon: "error",
                                    button: false,
                                    timer: 4000
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                    });

                }
                $('#formulario_actualizacion_perfil').addClass('was-validated');

            });

            //proceso de actualizacion de contraseña
            $('#formulario_actualizacion_perfil_password').on('submit', function(e) {
                event.preventDefault();
                if ($('#formulario_actualizacion_perfil_password')[0].checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    // agregar data
                    var $thisForm = $('#formulario_actualizacion_perfil_password');
                    var formData = new FormData(this);

                    //ruta
                    var url = route('actualizarPassword');

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
                            swal.fire("Validando datos, espere porfavor...", {
                                button: false,
                                timer: 3000
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {

                            swal.fire("Contraseña Actualizada exitosamente!", {
                                icon: "success",
                                button: true,
                                timer: 2000
                            });
                            $('#currentPassword').val('');
                            $('#newPassword').val('');
                            $('#renewPassword').val('');

                        } else {
                            setTimeout(function(){
                                swal.fire(respuesta.mensaje, {
                                    icon: "error",
                                    button: false,
                                    timer: 4000
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                    });

                }
                $('#formulario_actualizacion_perfil_password').addClass('was-validated');

            });

            $("#btn_cambiar_firma").click(function () {
                $("#file_firma").trigger('click');
            });

            $('#file_firma').on('change', function() {
                var val = $(this).val();
                $(this).siblings('#texto_firma').text(val);
            });

            //proceso de actualizacion de la firma
            $('#formulario_actualizacion_perfil_firma').on('submit', function(e) {
                event.preventDefault();
                if ($('#formulario_actualizacion_perfil_firma')[0].checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    // agregar data
                    var $thisForm = $('#formulario_actualizacion_perfil_firma');
                    var formData = new FormData(this);

                    //ruta
                    var url = route('actualizarFirma');

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
                            swal.fire("Validando datos, espere porfavor...", {
                                button: false,
                                timer: 3000
                            });
                        }
                    }).done(function(respuesta){
                        //console.log(respuesta);
                        if (!respuesta.error) {

                            swal.fire("Firma Actualizada exitosamente!", {
                                icon: "success",
                                button: true,
                                timer: 2000
                            });

                            setTimeout(function(){
                                location.reload();
                            },2000);

                        } else {
                            setTimeout(function(){
                                swal.fire(respuesta.mensaje, {
                                    icon: "error",
                                    button: false,
                                    timer: 4000
                                });
                            },2000);
                        }
                    }).fail(function(resp){
                        console.log(resp);
                    });

                }
                $('#formulario_actualizacion_perfil_firma').addClass('was-validated');

            });

        </script>
    </x-slot>

</x-admin>
