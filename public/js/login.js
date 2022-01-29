

//proceso de consulta
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
            console.log(respuesta);
            if (!respuesta.error) {

                setTimeout(function(){
                    swal("Registro Exitoso, ya puedes iniciar Sesión", {
                        icon: "success",
                        button: true,
                        timer: 4000
                    });

                },2000);

            } else {
                setTimeout(function(){
                    swal(respuesta.mensaje, {
                        icon: "error",
                        button: false,
                        timer: 3000
                    });
                },2000);
            }
        }).fail(function(resp){
            console.log(resp);
        });

    }
    $('#formulario_registro').addClass('was-validated');

});
