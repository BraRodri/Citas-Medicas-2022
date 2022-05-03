<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reubicaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'historia_medica_id',
        'checkReubicaciones',
        'areaReubicado',
        'diagnosticoReubicaciones',
        'fechaReubicado',
        'tiempoReubicado'
    ];
}
