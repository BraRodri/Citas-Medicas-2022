<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntPatologicosOcupacionales extends Model
{
    use HasFactory;
    protected $table = 'ant_patologicos_ocupacionales';

    protected $fillable = [
        'historia_medica_id',
        'tipoAfeccion',
        'parteCuerpoAfectada',
        'tiempoDeOcurrencia',
        'secuelas',
    ];
}
