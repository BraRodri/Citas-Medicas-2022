const showNextSection = (sectionNext) => {
    for (let index = 0; index < 6; index++) {
        let sectionNumber = index + 1;
        if(sectionNumber === sectionNext){
            document.getElementById(`tabSection${sectionNumber}`).className = 'active';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'block';
        }else if(sectionNumber < sectionNext){
            document.getElementById(`tabSection${sectionNumber}`).className = 'completed';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'none';
        }else{
            document.getElementById(`tabSection${sectionNumber}`).className = 'todo';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'none';
        }
    }
}

//funcion de cambios para el select de genero
$('#div_genero').hide();
$('#sex').change(function() {
    var select = $( this ).val();
    if(select === 'Otro'){
        $('#div_genero').show();
    } else {
        $('#div_genero').hide();
    }
});

//funcion para el select de tipo de regimen
$('#select_entidad_salud').hide();
$('#tipo_regimen').change(function() {
    var select = $( this ).val();
    $("#entidad_salud option").remove();
    if(select === 'Contributivo'){
        $('#select_entidad_salud').show();

        $('#entidad_salud').append($('<option>', {
            value: 'ARP',
            text : 'ARP'
        }));
        $('#entidad_salud').append($('<option>', {
            value: 'EPS',
            text : 'EPS'
        }));
        $('#entidad_salud').append($('<option>', {
            value: 'IPS DE ATENCIÓN',
            text : 'IPS DE ATENCIÓN'
        }));
    } else if(select === 'Subsidiado') {
        $('#select_entidad_salud').show();

        $('#entidad_salud').append($('<option>', {
            value: 'EPS-S',
            text : 'EPS-S'
        }));
        $('#entidad_salud').append($('<option>', {
            value: 'IPS DE ATENCIÓN',
            text : 'IPS DE ATENCIÓN'
        }));
    } else {
        $('#select_entidad_salud').hide();
    }
})

//desabilitar todo lo de antecedentes laborales
$( '#no_aplica_antc_lab_empr' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        $('#div_nuevos_antecedentes').hide();
    } else {
        $('#div_nuevos_antecedentes').show();
    }
});

//evento para actividad_laboral
$('#div_select_act_indp').hide();
$('#div_select_act_empl').hide();
$('#actividad_laboral').change(function() {
    var select = $( this ).val();
    if(select === 'Empleado'){
        $('#div_select_act_empl').show();
        $('#div_select_act_indp').hide();
    } else if(select === 'Independiente') {
        $('#div_select_act_empl').hide();
        $('#div_select_act_indp').show();
    } else {
        $('#div_select_act_empl').hide();
        $('#div_select_act_indp').hide();
    }
});

//desabilitar todo lo de antecedentes patologicos personales
$( '#no_aplica_antc_patolo_per' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        $('#div_info_aplica_antc_patolo_per').hide();
    } else {
        $('#div_info_aplica_antc_patolo_per').show();
    }
});

//validar gestaciones
$(".input_abortos").prop("disabled", true);
$(".input_vivos").prop("disabled", true);
$(".input_mortinados").prop("disabled", true);
$('.input_gestaciones').on('input', function() {
    var valor = $(this).val();
    if(valor === '0'){
        $(".input_abortos").prop("disabled", true);
        $(".input_vivos").prop("disabled", true);
        $(".input_mortinados").prop("disabled", true);
    } else {
        $(".input_abortos").prop("disabled", false);
        $(".input_vivos").prop("disabled", false);
        $(".input_mortinados").prop("disabled", false);
    }
});

//desabilitar todo lo de antecedentes patologicos ocupacionales
$( '#no_aplica_antc_pato_ocupa' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        $('#div_apli_antc_pato_ocupa').hide();
    } else {
        $('#div_apli_antc_pato_ocupa').show();
    }
});
