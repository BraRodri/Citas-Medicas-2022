let notificationsPayPacient = document.getElementById('notificationsPayPacient');

if(notificationsPayPacient){
    (async () => {
        // * The user Logued is pacient
        var numberNotifications = document.getElementById('numberNotifications');
        var titleNotifications = document.getElementById('titleNotifications');
        numberNotifications.textContent = 'Cargando...';
        titleNotifications.textContent = 'Cargando...';
        let idPacient = document.getElementById('pacientLogued').value;
        let notifications = await getNotificationsPayAfter(idPacient);
        console.log(notifications.citas);
        if(notifications.status === 200){
            if(notifications.citas.length > 0){
                numberNotifications.textContent = notifications.citas.length;
                titleNotifications.textContent = `Tienes ${notifications.citas.length} citas sin pagar`;
                let allNotificationsHTML = '';
                notifications.citas.map((notification) => {
                    var eventTimeOne =  moment(notification.hour_limit_pay).unix();
                    var currentTimeOne = moment().unix();
                    var diffTimeOne = eventTimeOne - currentTimeOne;

                    let notificationHtml = `
                        <li class="notification-item">
                            <div class="align-items-center text-center">
                                <a class="btn btn-success" onclick="selectedTypePaymentWithouthEfect(${notification.id})">Pagar</a>
                                <i class="bi bi-exclamation-circle text-warning text-center"></i>
                            </div>

                            <div class="text-center">
                                <h4>Cita con ${notification.medic.genero === 'Masculino' ? 'el doctor' : 'la doctora'} ${notification.medic.nombres}</h4>
                                <p>La cita está para el día ${moment(notification.horary_medico.date_disponibility).format('YYYY-MM-DD')}</p>
                                <p>Tiempo restante para pagar la cita: <span id="cronometroNotification_${notification.id}">${diffTimeOne}</span></p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    `;
                    allNotificationsHTML += notificationHtml;
                    var eventTime =  moment(notification.hour_limit_pay).unix();
                    var currentTime = moment().unix();
                    var diffTime = eventTime - currentTime;
                    var duration = moment.duration(diffTime*1000, 'milliseconds');
                    var interval = 1000;

                    setInterval(() => {
                        duration = moment.duration(duration - interval, 'milliseconds');
                        document.getElementById(`cronometroNotification_${notification.id}`).textContent = `${duration.hours()}:${duration.minutes()}:${duration.seconds()}`;
                    }, interval);
                });

                document.getElementById('allNotifications').innerHTML = allNotificationsHTML;
            }else{
                numberNotifications.textContent = 0;
                titleNotifications.textContent = `No hay notificaciones`;
            }
        }else if(notifications.status === 500){
            swal.fire(
                '¡Opss, Ocurrió un error!',
                `Error en el servidor al intentar obtener notificaciones`,
                'error'
            );
        };
    })();
}

/* Select type of payment */
const selectedTypePaymentWithouthEfect = async (idCita) => {
    Swal.fire({
        title: 'Seleccione el tipo de pago',
        html: `
            <div class="row justify-content-center align-items-center">
                <label for="methodPay" class="col-form-label text-center">Seleccione el método de pago
                    preferido</label>
            </div>

            <div class="row mb-3 justify-content-center align-items-center">
                <div class="col-md-10 d-flex justify-content-center">
                    <div class="form-check form-check-inline d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="typePaymentCita" id="nequi"
                            value="nequi" checked onclick="clickRadioPayment('nequi')">
                        <label class="form-check-label" for="nequi">
                            <img src="../../images/nequi-logo.png" class="img-fluid"
                                style="max-height: 105px;" />
                        </label>
                    </div>
                </div>
            </div>
        `,
        showConfirmButton: true,
        confirmButtonText: 'Pagar <i class="bi bi-check-circle-fill"></i>',
    }).then(async (result) => {
        if (result.isConfirmed) {
            // Dió clic en Pagar ya
            let typePaymentSelected = document.querySelector('input[name="typePaymentCita"]:checked').value;
            if(typePaymentSelected === "nequi"){
                showFormNequi(idCita);
            }
        }
    });
}
