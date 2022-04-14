<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntPatologicosPer extends Model
{
    use HasFactory;

    protected $fillable = [
        'cardiacs',
        'hiper',
        'cancer',
        'diabetes',
        'dislipidemias',
        'otrosMetabolicos',
        'epilepsia',
        'siquiatricos',
        'congenitos',
        'rinitis',
        'alergias',

        'reumatologicos',
        'varices',
        'otros',
        'fobias',
        'dermatologicos',
        'tuberculosis',
        'osteomusculares',
        'quirurgicos',
        'traumaticos',
        'obesidad',
        'hipoacusia',
        'intoxicaciones'
    ];
}
