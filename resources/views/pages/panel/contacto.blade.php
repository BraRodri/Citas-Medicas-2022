<x-admin>

    <!-- title -->
    @section('pagina')Contacto @endsection

    <div class="pagetitle">
        <h1>Contacto</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
                <li class="breadcrumb-item active">Contacto</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

        <div class="row gy-4">

          <div class="col-xl-6">

            <div class="row">
              <div class="col-lg-6">
                <div class="info-box card">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dirección</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info-box card">
                  <i class="bi bi-telephone"></i>
                  <h3>Llámenos</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info-box card">
                  <i class="bi bi-envelope"></i>
                  <h3>Correo Contacto</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info-box card">
                  <i class="bi bi-clock"></i>
                  <h3>Horario Atención</h3>
                  <p>Lunes - Viernes<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-6">
            <div class="card p-4">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Asunto" required>
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Enviar Mensaje</button>
                  </div>

                </div>
              </form>
            </div>

          </div>

        </div>

    </section>

    <x-slot name="js">
    </x-slot>

</x-admin>
