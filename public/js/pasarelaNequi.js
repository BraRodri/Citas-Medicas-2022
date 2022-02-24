/* Form of Nequi */
const showFormNequi = async (idCita) => {
    const userLogued = await getUserLogged(idCita);
    if(userLogued.status === 200){
        const telephonePacient = userLogued.user.telefono;
        Swal.fire({
            title: '<img src="/public/images/nequi-logo.png" style="max-height: 100px;"/>',
            inputLabel: 'Verifica que el número de teléfono corresponda a tu cuenta Nequi',
            input: 'number',
            inputValue: telephonePacient,
            inputPlaceholder: 'Teléfono',
            showCancelButton: true,
            cancelButtonText: 'Cancelar <i class="bi bi-x-circle-fill"></i>',
            confirmButtonText: 'Continuar <i class="bi bi-arrow-right-circle-fill"></i>',
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value) {
                        payWithNequi(value, idCita);
                    } else {
                        resolve('Escribe el número de teléfono');
                    }
                })
            }
        });
    }else{
        swal.fire(
            '¡Opss, Ocurrió un error!',
            'Inténtalo más tarde!',
            'error'
        );
    }
}


/* Payment with pasarela NEQUI */
const payWithNequi = (telefono, idCita) => {
    swal.fire({
        title: 'Cargando...',
        text: '¡Nequi esta validando tus datos!',
        icon: 'info',
        allowOutsideClick: false,
        allowEscapeKey: false,
    });
    swal.showLoading();

    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    axios.post('/panel/paymentWithNequi', {
        idCita: idCita,
        telefono: telefono
    }, {
        headers: {'X-CSRF-TOKEN': laravelToken }
    })
    .then(response => {
        console.log(response.data);
        setTimeout(() => {
            if (response.data.info.title === "success") {
                swal.fire({
                    title: '<img src="/public/images/nequi-logo.png" style="max-height: 100px;"/>',
                    html: `
                        <div>
                            <div class="alert alert-secondary" role="alert">
                                Notificación de confirmación enviada con exito a tu teléfono, confirma el pago desde tu celular
                            </div>
                            <div class="d-flex justify-content-center">
                                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_n9b10oth.json"
                                    background="transparent" speed="1" style="width: 300px; height: 300px; justify-content: center; align-items: center;" loop autoplay>
                                </lottie-player>
                            </div>
                        </div>
                    `,
                    showCancelButton: true,
                    showConfirmButton: true,
                    cancelButtonText: 'No recibí notificación, intentar denuevo <i class="bi bi-emoji-frown-fill"></i>',
                    confirmButtonText: 'Ya confirme <i class="bi bi-emoji-laughing-fill"></i>',
                    confirmButtonColor: '#674C7D'
                }).then((result) => {
                    if (result.isConfirmed) {
                        getStatusPaymentNequi(idCita, response.data.info.message);
                    }else{
                        showFormNequi(idCita);
                    }
                });
            } else if(response.data.info.title === "errornequi"){
                swal.fire({
                    title: '¡Opss, ocurrió un error con Nequi, intentalo denuevo!',
                    text: response.data.info.message,
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: 'Intentar nuevamente <i class="bi bi-arrow-right-circle-fill"></i>',
                }).then((result) => {
                    if (result.isConfirmed) {
                        showFormNequi(idCita);
                    }
                })
            } else if(response.data.info.title === "failed") {
                swal.fire(
                    '¡Opss, Ocurrió un error!',
                    response.data.info.message,
                    'error'
                );
            }
        }, 3000);
    })
    .catch(error => {
        swal.fire(
            '¡Opss, Ocurrió un error!',
            'Inténtalo más tarde!',
            'error'
        )
    });
}


/* Obtener el estado de la transacción nequi*/
const getStatusPaymentNequi = (idCita, transactionIdNequi) => {
    swal.fire({
        title: 'Cargando...',
        text: '¡Consultando el estado de la transacción!',
        icon: 'info',
        allowOutsideClick: false,
        allowEscapeKey: false,
    });
    swal.showLoading();

    axios.get(`/panel/getStatusPaymentNequi/${idCita}/${transactionIdNequi}`)
    .then(response => {
        setTimeout(() => {
            if (response.data.info.title === "success") {
                swal.fire({
                    title: 'Pago exitoso <img src="/public/images/nequi-logo.png" style="max-height: 100px;"/>',
                    html: `
                        <div class="d-flex justify-content-center">
                            <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_6vde7ftr.json"
                                background="transparent"  speed="1"  style="width: 400px; height: 400px; margin-top: -90px; margin-bottom: -90px;" loop autoplay>
                            </lottie-player>
                        </div>
                        <h4>¡El pago se realizo sin problemas!</h4>
                    `,
                }).then(
                    function(e) {
                        if (e.value === true) {
                            window.location.replace(`/panel/citas`);
                        } else {
                            window.location.replace(`/panel/citas`);
                        }
                    },
                    function(dismiss) {
                        return false;
                    }
                );
            } else if(response.data.info.title === "errornequi"){
                swal.fire({
                    title: '¡Opss, hay una novedad con Nequi!',
                    text: response.data.info.message,
                    icon: 'warning',
                    showConfirmButton: true,
                    confirmButtonText: 'Verificar nuevamente <i class="bi bi-arrow-right-circle-fill"></i>',
                }).then((result) => {
                    if (result.isConfirmed) {
                        getStatusPaymentNequi(idCita, transactionIdNequi);
                    }
                })
            } else if(response.data.info.title === "failed") {
                swal.fire(
                    '¡Opss, Ocurrió un error!',
                    response.data.info.message,
                    'error'
                );
            }
        }, 3000);
    })
    .catch(error => {
        swal.fire(
            '¡Opss, Ocurrió un error!',
            'Inténtalo más tarde!',
            'error'
        )
    });
}
