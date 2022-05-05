<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyudasDiagnosticas extends Model
{
    use HasFactory;

    protected $table = 'ayudas_diagnosticas';

    protected $fillable = [
        'historia_medica_id',

        'dateAgudezatamizExamen',
        'OJODERECHOExamen',
        'OJOIZQUIERDOExamen',
        'ResultadoAgudezaExamen',

        'dateAudiometriaTamizExamen',
        'AudiometriaTamizExamen',
        'ResultadoAudiometriaTamizExamen',

        'dateAudiometriaclinicaExamen',
        'SALExamen',
        'ELIExamen',
        'LARSENExamen',
        'ResultadoAudiometriaclinicaExamen',

        'dateEspirometriaExamen',
        'EspirometriaFVCExamen',
        'EspirometriaFEV1Examen',
        'EspirometriaFEV1',
        'ResultadoEspirometriaExamen'
    ];
}
