<x-login>

    <!-- title -->
    @section('pagina')Login @endsection

    <div class="col-md-12 col-lg-10 col-12">
        <div class="wrap d-md-flex">
            <div class="img" style="background-image: url({{ asset('images/bg-1.jpg') }});">
            </div>
            <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                    <div class="w-100">
                        <h3 class="mb-4">Iniciar Sesión</h3>
                    </div>
                </div>
                <form action="#" class="signin-form" autocomplete="off">
                    <div class="form-group mb-3">
                        <label class="label" for="name">Usuario</label>
                        <input type="text" class="form-control" placeholder="Correo Electronico" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Recuerdame
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#">Olvide mi Contraseña</a>
                        </div>
                    </div>
                </form>
                <p class="text-center">¿No estas Registrado? <a data-toggle="tab" href="{{ route('register') }}">Registrarme</a></p>
            </div>
        </div>
    </div>

</x-login>
