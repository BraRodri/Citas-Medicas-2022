<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntPatologicosPersonales extends Model
{
    use HasFactory;

    protected $fillable = [
        'cardiacsP',
        'cardiacsF',
        'hiperP',
        'hiperF',
        'cancerP',
        'cancerF',
        'diabetesP',
        'diabetesF',
        'dislipidemiasP',
        'dislipidemiasF',
        'otrosMetabolicosP',
        'otrosMetabolicosF',
        'epilepsiaP',
        'epilepsiaF',
        'siquiatricosP',
        'siquiatricosF',
        'congenitosP',
        'congenitosF',
        'rinitisP',
        'rinitisF',
        'alergiasP',
        'alergiasF',
        'asmaP',
        'asmaF',

        'reumatologicosP',
        'reumatologicosF',
        'varicesP',
        'varicesF',
        'otrosP',
        'otrosF',
        'fobiasP',
        'fobiasF',
        'dermatologicosP',
        'dermatologicosF',
        'tuberculosisP',
        'tuberculosisF',
        'osteomuscularesP',
        'osteomuscularesF',
        'quirurgicosP',
        'quirurgicosF',
        'traumaticosP',
        'traumaticosF',
        'obesidadP',
        'obesidadF',
        'hipoacusiaP',
        'hipoacusiaF',
        'intoxicacionesP',
        'intoxicacionesF',

        'observationsAntPer'
    ];
}
