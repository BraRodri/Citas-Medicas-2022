/* Get user Logued */
function getUserLogged (idCita){
    var laravelToken = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
    const params = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            'X-CSRF-TOKEN': laravelToken,
        },
        method: "GET",
    };
    return fetch(`/api/users/userLogged/${idCita}`, params)
    .then(response => {return response.json()})
    .then(result => {return result})
    .catch(error => {return error});
}
