<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionOsteomuscular extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_osteomuscular';

    protected $fillable = [
        'historia_medica_id',

        'hombrosEvaluacionOsteomuscularDer',
        'hombrosEvaluacionOsteomuscularIzq',
        'BrazosEvaluacionOsteomuscularDer',
        'BrazosEvaluacionOsteomuscularIzq',
        'CodosEvaluacionOsteomuscularDer',
        'CodosEvaluacionOsteomuscularIzq',
        'AntebrazosEvaluacionOsteomuscularDer',
        'AntebrazosEvaluacionOsteomuscularIzq',
        'MunecasEvaluacionOsteomuscularDer',
        'MunecasEvaluacionOsteomuscularIzq',
        'ManosEvaluacionOsteomuscularDer',
        'ManosEvaluacionOsteomuscularIzq',

        'CaderasEvaluacionOsteomuscularDer',
        'CaderasEvaluacionOsteomuscularIzq',
        'MuslosEvaluacionOsteomuscularDer',
        'MuslosEvaluacionOsteomuscularIzq',
        'RodillasEvaluacionOsteomuscularDer',
        'RodillasEvaluacionOsteomuscularIzq',
        'PiernasEvaluacionOsteomuscularDer',
        'PiernasEvaluacionOsteomuscularIzq',
        'TobillosEvaluacionOsteomuscularDer',
        'TobillosEvaluacionOsteomuscularIzq',
        'PiesEvaluacionOsteomuscularDer',
        'PiesEvaluacionOsteomuscularIzq',

        'TINNELEvaluacionOsteomuscularDer',
        'TINNELEvaluacionOsteomuscularIzq',
        'PHANELEvaluacionOsteomuscularDer',
        'PHANELEvaluacionOsteomuscularIzq',
        'REFLEJOSEvaluacionOsteomuscularDer',
        'REFLEJOSEvaluacionOsteomuscularIzq',

        'FUERZAMUSCULAREvaluacionOsteomuscular',
        'SENSIBILIDADEvaluacionOsteomuscular',
        'MOTILIDADEvaluacionOsteomuscular',

        'AmpliacionEvaluacionOsteomuscular'
    ];
}
