<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    protected $fillable = [
        'users_id',
        'enfermedad'
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
