<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpresionDiagnostica extends Model
{
    use HasFactory;

    protected $table = 'impresion_diagnostica';

    protected $fillable = [
        'historia_medica_id',

        'descripcionEXAMENDESALUDOCUPACIONAL'
    ];
}
