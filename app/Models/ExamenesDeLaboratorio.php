<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenesDeLaboratorio extends Model
{
    use HasFactory;

    protected $table = 'examenes_de_laboratorio';

    protected $fillable = [
        'historia_medica_id',

        'dateHemogramaExamen',
        'HemoglobinaHemogramaExamen',
        'HematocritoHemogramaExamen',

        'dateGlicemiaExamen',
        'GlicemiaExamen',

        'datePERFILLIPIDICOExamen',
        'ColesterolTotalExamen',
        'ColesterolHDLExamen',
        'ColesterolLDLExamen',
        'TrigliceridosExamen',

        'dateCitoQuimicoExamen',
        'CitoQuimicoAspectoExamen',
        'CitoQuimicoQuimicaExamen',
        'CitoQuimicoMicroscopioExamen',

        'dateOtrosExamen',
        'otrosExamen',

        'dateMANIPULADORESExamen',
        'KOHMANIPULADORESExamen',
        'FROTISMANIPULADORESExamen',
        'COPROLOGICOMANIPULADORESExamen'
    ];
}
