<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestriccionesORecomendaciones extends Model
{
    use HasFactory;

    protected $table = 'restricciones_o_recomendaciones';

    protected $fillable = [
        'historia_medica_id',

        'restriccionesOrecomendaciones'
    ];
}
