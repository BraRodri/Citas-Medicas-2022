<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'cita';

    protected $fillable = [
        'horary_medicos_id',
        'paciente_id',
        'modality'
    ];

    public function horaryMedico()
    {
        return $this->belongsTo(HoraryMedico::class, 'horary_medicos_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
