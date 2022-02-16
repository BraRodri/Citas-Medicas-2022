<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoraryMedico extends Model
{
    use HasFactory;
    protected $table = 'horary_medicos';

    protected $fillable = [
        'medico_id',
        'date_disponibility',
    ];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function cita()
    {
        return $this->hasOne(Cita::class);
    }
}
