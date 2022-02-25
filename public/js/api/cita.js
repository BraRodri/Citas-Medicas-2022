/* Add Cita in BD */
const addCita = async (modality, check, infoMedic, typePaymentSelected) => {
    swal.fire({
        title: 'Cargando...',
        text: '¡Tu cita se está agendando, espera unos segundos!',
        icon: 'info',
        allowOutsideClick: false,
        allowEscapeKey: false,
    });
    swal.showLoading();

    const horarySelected = infoMedic.horary.find(function(horary) {
        return horary.date_disponibility === check;
    });

    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    return new Promise((resolve, reject) => {
        axios.post('/panel/citas', {
            horary_medico_id: horarySelected.id,
            modality: modality,
            typePaymentSelected: typePaymentSelected
        }, {
            headers: {'X-CSRF-TOKEN': laravelToken }
        })
        .then(response => {
            setTimeout(() => {
                if (response.data.info.message === "created") {
                    resolve(response.data.info.cita);
                } else if(response.data.info.message === "failed") {
                    swal.fire(
                        '¡Opss, Ocurrió un error!',
                        'Inténtalo más tarde!',
                        'error'
                    )
                }
            }, 3000);
        })
        .catch(error => {
            swal.fire(
                '¡Opss, Ocurrió un error!',
                'Inténtalo más tarde!',
                'error'
            )
        })
    });
}

/* Send email when pay after */
const sendEmailPayAfter = (citaId) => {
    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    const url = `/api/sendEmailPayAfter/${citaId}`;
    const params = {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': laravelToken
        },
        method: 'GET'
    };
    return fetch(url, params)
        .then(response => {return response.json()})
        .then(response => {return response})
        .catch(err => {return err});
}
