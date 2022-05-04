<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmunizaciones extends Model
{
    use HasFactory;

    protected $table = 'inmunizaciones';

    protected $fillable = [
        'historia_medica_id',

        'checkIndemnizacionTetanos',
        'checkIndemnizacionFiebreAmarilla',
        'checkIndemnizacionHepatitisB',
        'checkIndemnizacionINFLUENZA',
        'checkIndemnizacionOtras'
    ];
}
