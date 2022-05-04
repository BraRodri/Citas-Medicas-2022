<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    use HasFactory;

    protected $table = 'examen_fisico';

    protected $fillable = [
        'historia_medica_id',

        'Sp02',
        'TemperaturaExamenFisico',
        'PulsoExamenFisico',
        'RitmoExamenFisico',
        'PresionArterialExamenFisico',
        'DominanciaExamenFisico',
        'FRespiratoriaExamenFisico',

        'PesoExamenFisico',
        'TallaExamenFisico',
        'IMCExamenFisico',
        'DescripcionExamenFisico'
    ];
}
