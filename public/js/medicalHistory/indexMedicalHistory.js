import formsSection1 from './forms/formsSection1.js';
import formsSection2 from './forms/formsSection2.js';
import formsSection6 from './forms/formsSection6.js';

document.addEventListener('DOMContentLoaded', async () => {
    responsesServer();

    document.getElementById('loading').style.display = 'none';
    document.getElementById('contenido').style.display = 'block';
    await formsSection1();
    await formsSection2();
    await formsSection6();
});

const responsesServer = () => {
    if(document.getElementById('yaExiste')){
        Swal.fire(
            'Opss, Ocurrió una novedad',
            '¡El paciente ya tiene Historia Clinica!',
            'warning'
        );
    }
    if(document.getElementById('saved')){
        Swal.fire(
            'Información guardada',
            '¡Historia Clinica añadida con exito!',
            'success'
        );
    }
}
