
<!-- Modal -->
<div class="modal fade" id="modal_video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video Informativo</h5>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <video id="mi_video">
                        <source src="{{ asset('asset/videos/video.mp4') }}">
                    </video>
                </div>
                <button class="btn btn-primary mt-3" id="play_video">Reproducir Video</button>
                <div id="subir_firma" class="mt-4 p-5">
                    <form action="{{ route('registarFirma') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Muchas gracias por ver el video. Para continuar con la finalización
                            del registro, por favor suba una firma indicando el concentimiento de
                            haber visto el video y de aceptar nuestros terminos y condiciones para el
                            proceso de registro.
                        </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Selecciona una Firma:</label>
                            <input class="form-control" type="file" id="file" name="file" accept="image/png,image/jpeg" required>
                        </div>
                        <input type="hidden" id="id_usuario" name="id" required>
                        <button type="submit" class="btn btn-dark mt-2">Registrar Firma</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
