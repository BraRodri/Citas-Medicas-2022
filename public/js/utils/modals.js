export const showModalLoading = (text) => {
    console.log("entro a cargar");
    Swal.fire({
        title: 'Cargando...',
        text: text,
        icon: 'info',
        allowOutsideClick: false,
        allowEscapeKey: false,
    });
    Swal.showLoading();
}
