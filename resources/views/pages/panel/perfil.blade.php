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
                            <form id="" method="POST" enctype="multipart/form-data" novalidate>
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
                                    <input name="cedula" type="text" class="form-control" id="cedula" value="{{ Auth::user()->numero_documento }}" required>
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
                            </form><!-- End Profile Edit Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                            <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña actual</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="currentPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva Contraseña</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Repetir Nueva Contraseña</label>
                                <div class="col-md-8 col-lg-9">
                                <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                            </div>
                            </form><!-- End Change Password Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-firma">
                            <!-- Change Password Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagen Firma</label>
                                    <div class="col-md-8 col-lg-9">
                                        @if(Auth::user()->firma == null)
                                            <img src="{{ asset('images/sin_firma.jpg') }}" alt="Profile">
                                            @else
                                            <img src="{{ asset(Auth::user()->firma) }}" alt="Profile">
                                        @endif
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Actualizar Firma</button>
                                </div>
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
            })
        </script>
    </x-slot>

</x-admin>
