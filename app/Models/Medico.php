<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medico';

    protected $fillable = [
        'users_id',
        'especialidad',
        'correo_empresarial'
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function horary()
    {
        return $this->hasMany(HoraryMedico::class);
    }
}
