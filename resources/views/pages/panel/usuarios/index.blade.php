<x-admin>

    <!-- title -->
    @section('pagina')Gestión de Usuarios @endsection

    <div class="pagetitle">
        <h1>Gestionar Usuarios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Gestionar Usuarios</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios <span>| registrados</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $usuarios_registrados }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios <span>| activos</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $usuarios_activos }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios <span>| inactivos</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-dash"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $usuarios_inactivos }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <p class="mt-4">Gestionar todos los usuarios registrados en el sistema, puedes añadir, actualizar o eliminar cualquierda usuario.</p>
                        <p class="mb-5">
                            <a class="btn btn-success" href="{{ route('usuarios.crear') }}">
                                Agregar nuevo usuario
                            </a>
                        </p>

                        <table id="tabla_usuarios" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">N° Documento</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha Registro</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-slot name="js">
        <script>

            var tabla_usuarios = $('#tabla_usuarios').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                "order": [[ 0, "desc" ]],
                "ajax": route('usuarios.obtener')
            });

            function eliminarUsuario(id){

                Swal.fire({
                    title: 'Eliminar Usuario',
                    text: "¿Estas seguro de eliminar al usuario?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        var url = route('usuarios.eliminar', id);

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            type: "GET",
                            encoding:"UTF-8",
                            url: url,
                            dataType:'json',
                            beforeSend:function(){
                                Swal.fire({
                                    text: 'Eliminando usuario, espere...',
                                    timer: 4000,
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                    },
                                });
                                tabla_usuarios.ajax.reload();
                            }
                        }).done(function(respuesta){
                            //console.log(respuesta);
                            if (!respuesta.error) {
                                Swal.fire({
                                    title: 'Usualio Eliminado!',
                                    icon: 'success',
                                    showConfirmButton: true,
                                    timer: 2000
                                });

                                tabla_usuarios.ajax.reload();

                            } else {
                                setTimeout(function(){
                                    Swal.fire({
                                        title: espuesta.mensaje,
                                        icon: 'error',
                                        showConfirmButton: true,
                                        timer: 4000
                                    });
                                },2000);
                            }
                        }).fail(function(resp){
                            console.log(resp);
                        });

                    }
                })

            }

        </script>
    </x-slot>

</x-admin>
