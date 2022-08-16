<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigosCiiu extends Model
{
    use HasFactory;

    protected $table = 'codigos_ciiu';

    protected $fillable = [
        'codigo',
        'descripcion'
    ];
}
