<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfGeneral extends Model
{
    use HasFactory;

    protected $table = 'inf_general';

    protected $fillable = [
        'historia_medica_id',
        'nameCompany',
        'placeBirth',
        'statusCivil',
        'sons',
        'profession',
        'ocupation',
        'dateAdmission',
        'seniorityCompany',
        'dateExam',
        'eps',
        'afp',
        'rh',
        'scholarship',
        'areaWork',
        'stratum'
    ];

    public function historyMedica()
    {
        return $this->belongsTo(HistoriaMedica::class, 'historia_medica_id');
    }
}
