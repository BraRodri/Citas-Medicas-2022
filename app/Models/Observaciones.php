<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observaciones extends Model
{
    use HasFactory;

    protected $table = 'observaciones';

    protected $fillable = [
        'historia_medica_id',

        'descripcionObservacionesForm18'
    ];
}
