<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConductasYRecomendaciones extends Model
{
    use HasFactory;

    protected $table = 'conductas_y_recomendaciones';

    protected $fillable = [
        'historia_medica_id',

        'checkRiesgospropiosdeloficioarealizar',
        'checkUsodelosprotectoresauditivos',
        'checkUsodelaproteccionrespiratoria',
        'checkEntrenamientodetrabajosenalturas',

        'checkSuministrarcapacitaryentrenarenelusodelosEPI',
        'checkUsoadecuadodelosEPIquelesuministrelaempresa',
        'checkUsodeproteccionnivelcondicionestrabajadorytipodetrabajo',
        'checkUtilizarproteccionauditivaenambientesruidosostanto',

        'checkUtilizarunaadecuadahigieneposturalymecanicacorporal',
        'checkEntrenamientoscontinuossobrelamecanicacorporal',
        'checkLasmujeresnodebenmovilizarcargasdesdeelpiso',
        'checkHacerseguimientocontinuodelasrecomendacionespara',

        'checkConservacionAuditiva',
        'checkPrevenciondelaaccidentalidadlaboral',
        'checkPrevenciondepatologiasosteomusculares',
        'checkPrevencionmanejodesustanciasquimicas'
    ];
}
