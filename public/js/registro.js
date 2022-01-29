//proceso de registro
$('#formulario_registro').on('submit', function(e) {
    event.preventDefault();
    if ($('#formulario_registro')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {

        // agregar data
        var $thisForm = $('#formulario_registro');
        var formData = new FormData(this);

        //ruta
        var url = "/validar-registro";

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

                setTimeout(function(){
                    swal("Datos Guardados con exitoso, continua con el proceso de registro.", {
                        icon: "success",
                        button: true,
                        timer: 4000
                    });

                    $('#id_usuario').val(respuesta.id);

                    //$thisForm.reset();
                    $('#modal_video').modal('show');
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
    $('#formulario_registro').addClass('was-validated');

});

$("#subir_firma").hide();
var ppbutton = document.getElementById("play_video");
var video = document.getElementById("mi_video");
video.onended = function() {
    ppbutton.innerHTML = "Reproducir Video";
    $("#subir_firma").show();
};

ppbutton.addEventListener("click", playPause);
function playPause() {
    if (video.paused) {
        video.play();
        ppbutton.innerHTML = "Pausar Video";
    }
    else  {
        video.pause();
        ppbutton.innerHTML = "Reproducir Video";
    }
}
