<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestriccionesORecomendacionesDeAnt extends Model
{
    use HasFactory;

    protected $fillable = [
        'historia_medica_id',
        'tipoRestriccion',
        'diagnosticoRestriccion',
        'tiempoRestriccion',
        'entidadQueOrdeno'
    ];
}
