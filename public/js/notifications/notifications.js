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
                            <i class="bi bi-exclamation-circle text-warning"></i>
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
