<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceptoMedico extends Model
{
    use HasFactory;

    protected $table = 'concepto_medico';

    protected $fillable = [
        'historia_medica_id',

        'checkAPTOPARACONTINUARLABORANDO',
        'checkAPTOPARALABORARCONPATOLOGIANORESTRICTIVA',
        'checkAPTOPARALABOARACONRECOMENDACIONESOCUPACIONAL',
        'checkAPLAZADO'
    ];
}
