<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionDeColumna extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_de_columna';

    protected $fillable = [
        'historia_medica_id',

        'InspeccionEvaluacionDeColumna',
        'PalpacionEvaluacionDeColumna',
        'SensibilidadEvaluacionDeColumna',
        'MotricidadEvaluacionDeColumna',
        'EquilibrioestaticoEvaluacionDeColumna',

        'AlineacionescapularEvaluacionDeColumna',
        'AlineacionpelvicaEvaluacionDeColumna',
        'CifosisEvaluacionDeColumna',
        'LordosisEvaluacionDeColumna',
        'EscoliosisEvaluacionDeColumna',

        'FlexionanteriorEvaluacionDeColumna',
        'ExtensionposteriorEvaluacionDeColumna',
        'FlexionlateralEvaluacionDeColumna',
        'RotacionEvaluacionDeColumna',
        'MedicionextremidadesEvaluacionDeColumna',

        'TestdeWellsEvaluacionDeColumna',
        'PruebadeLassegueEvaluacionDeColumna',
        'SignodeltimbreEvaluacionDeColumna',
        'MarchaentalonesEvaluacionDeColumna',
        'MarchaenpuntasEvaluacionDeColumna',

        'AmpliacionEvaluacionDeColumna'
    ];
}
