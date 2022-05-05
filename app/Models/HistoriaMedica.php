<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaMedica extends Model
{
    use HasFactory;

    protected $table = 'historia_medica';

    protected $fillable = [
        'user_id'
    ];

    public function infGeneral()
    {
        return $this->hasOne(InfGeneral::class);
    }
}
