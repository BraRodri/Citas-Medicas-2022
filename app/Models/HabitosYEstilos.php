<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitosYEstilos extends Model
{
    use HasFactory;

    protected $table = 'habitos_y_estilos';

    protected $fillable = [
        'historia_medica_id',

        'checkHabitoTabaquismo',
        'tipoHabitoTabaquismo',
        'frecuenciaHabitoTabaquismo',
        'antiguedadHabitoTabaquismo',

        'checkHabitoLicor',
        'tipoHabitoLicor',
        'frecuenciaHabitoLicor',
        'antiguedadHabitoLicor',

        'checkHabitoSustanciassicoactivas',
        'tipoHabitoSustanciassicoactivas',
        'frecuenciaHabitoSustanciassicoactivas',
        'antiguedadHabitoSustanciassicoactivas',

        'checkHabitoDeportesoactividadfisica',
        'tipoHabitoDeportesoactividadfisica',
        'frecuenciaHabitoDeportesoactividadfisica',
        'antiguedadHabitoDeportesoactividadfisica',

        'checkHabitoActividadesextralaborales',
        'tipoHabitoActividadesextralaborales',
        'frecuenciaHabitoActividadesextralaborales',
        'antiguedadHabitoActividadesextralaborales'
    ];
}
