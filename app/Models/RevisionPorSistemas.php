<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionPorSistemas extends Model
{
    use HasFactory;

    protected $table = 'revision_por_sistemas';

    protected $fillable = [
        'historia_medica_id',

        'revisionPorSistemasYEnfermedadActual'
    ];
}
