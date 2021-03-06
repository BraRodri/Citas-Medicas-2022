<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntLaborales extends Model
{
    use HasFactory;

    protected $table = 'ant_laborales';

    protected $fillable = [
        'historia_medica_id',
        'area',
        'oficio',
        'tiempoPermanencia',
        'fDeR',
        'elementosProPersonal',
    ];
}
