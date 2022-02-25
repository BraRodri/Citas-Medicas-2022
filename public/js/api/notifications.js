let laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');

const getNotificationsPayAfter = (idPacient) => {
    const url = `/api/notificationsPayAfter/${idPacient}`;
    const params = {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': laravelToken
        }
    }

    return fetch(url, params)
        .then(response => {return response.json()})
        .then(response => {return response})
        .catch(err => {return err});
};
