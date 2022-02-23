/* Form of Nequi */
/*const showFormNequi = async (idCita) => {
    await
    const telephonePacient = '{{ Auth::user()->telefono }}';
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
}*/
