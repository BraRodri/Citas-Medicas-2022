<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenFisicoGeneral extends Model
{
    use HasFactory;
    protected $table = 'examen_fisico_general';

    protected $fillable = [
        'historia_medica_id',

        'CraneoExamenFisicoGeneral',
        'ParescranealesExamenFisicoGeneral',
        'ParpadosExamenFisicoGeneral',
        'ConjuntivasExamenFisicoGeneral',
        'PupilasExamenFisicoGeneral',
        'FondodeojoExamenFisicoGeneral',
        'PabellonExamenFisicoGeneral',
        'ConductosExamenFisicoGeneral',
        'TimpanosExamenFisicoGeneral',
        'TabiqueExamenFisicoGeneral',
        'CornetasMucosasExamenFisicoGeneral',
        'LabiosExamenFisicoGeneral',
        'LenguaExamenFisicoGeneral',
        'DientesExamenFisicoGeneral',
        'PaladarExamenFisicoGeneral',
        'AmigdalasExamenFisicoGeneral',
        'CuelloExamenFisicoGeneral',
        'ToraxExamenFisicoGeneral',
        'EspaldaExamenFisicoGeneral',
        'PielExamenFisicoGeneral',


        'CardiacoExamenFisicoGeneral',
        'CirculatorioExamenFisicoGeneral',
        'PulmonarExamenFisicoGeneral',
        'SenosExamenFisicoGeneral',
        'AbdomenaspectoExamenFisicoGeneral',
        'ViscerasExamenFisicoGeneral',
        'GenitalesexternosExamenFisicoGeneral',
        'HerniasExamenFisicoGeneral',
        'AdenopatiasExamenFisicoGeneral',
        'MiembrossuperioresExamenFisicoGeneral',
        'MiembrosinferioresExamenFisicoGeneral',
        'VascularperifericoExamenFisicoGeneral',
        'NeurologicoExamenFisicoGeneral',
        'ReflejostendinososExamenFisicoGeneral',
        'MarchaExamenFisicoGeneral',
        'EquilibrioExamenFisicoGeneral',
        'EstadomentalExamenFisicoGeneral',
        'CicatricesExamenFisicoGeneral',
        'GrupoExamenFisicoGeneral',


        'AmpliacionExamenFisicoGeneral'
    ];
}
