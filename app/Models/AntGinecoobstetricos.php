<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntGinecoobstetricos extends Model
{
    use HasFactory;

    protected $table = 'ant_ginecoobstetricos';

    protected $fillable = [
        'historia_medica_id',
        'checkantGineCoobstetricos',
        'menarca',
        'fum',
        'gestaciones',
        'planificacion'
    ];

}
