<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'cita';

    protected $fillable = [
        'horary_medico_id',
        'paciente_id',
        'modality',
        'payed',
        'typePayment'
    ];

    public function horaryMedico()
    {
        return $this->belongsTo(HoraryMedico::class, 'horary_medico_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
