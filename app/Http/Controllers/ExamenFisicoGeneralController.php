<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\ExamenFisicoGeneral;

class ExamenFisicoGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    static public function store(HistoriaMedica $historiaMedica, Request $request)
    {
        ExamenFisicoGeneral::create([
            'historia_medica_id' => $historiaMedica->id,

            'CraneoExamenFisicoGeneral' => $request['CraneoExamenFisicoGeneral'],
            'ParescranealesExamenFisicoGeneral' => $request['ParescranealesExamenFisicoGeneral'],
            'ParpadosExamenFisicoGeneral' => $request['ParpadosExamenFisicoGeneral'],
            'ConjuntivasExamenFisicoGeneral' => $request['ConjuntivasExamenFisicoGeneral'],
            'PupilasExamenFisicoGeneral' => $request['PupilasExamenFisicoGeneral'],
            'FondodeojoExamenFisicoGeneral' => $request['FondodeojoExamenFisicoGeneral'],
            'PabellonExamenFisicoGeneral' => $request['PabellonExamenFisicoGeneral'],
            'ConductosExamenFisicoGeneral' => $request['ConductosExamenFisicoGeneral'],
            'TimpanosExamenFisicoGeneral' => $request['TimpanosExamenFisicoGeneral'],
            'TabiqueExamenFisicoGeneral' => $request['TabiqueExamenFisicoGeneral'],
            'CornetasMucosasExamenFisicoGeneral' => $request['CornetasMucosasExamenFisicoGeneral'],
            'LabiosExamenFisicoGeneral' => $request['LabiosExamenFisicoGeneral'],
            'LenguaExamenFisicoGeneral' => $request['LenguaExamenFisicoGeneral'],
            'DientesExamenFisicoGeneral' => $request['DientesExamenFisicoGeneral'],
            'PaladarExamenFisicoGeneral' => $request['PaladarExamenFisicoGeneral'],
            'AmigdalasExamenFisicoGeneral' => $request['AmigdalasExamenFisicoGeneral'],
            'CuelloExamenFisicoGeneral' => $request['CuelloExamenFisicoGeneral'],
            'ToraxExamenFisicoGeneral' => $request['ToraxExamenFisicoGeneral'],
            'EspaldaExamenFisicoGeneral' => $request['EspaldaExamenFisicoGeneral'],
            'PielExamenFisicoGeneral' => $request['PielExamenFisicoGeneral'],


            'CardiacoExamenFisicoGeneral' => $request['CardiacoExamenFisicoGeneral'],
            'CirculatorioExamenFisicoGeneral' => $request['CirculatorioExamenFisicoGeneral'],
            'PulmonarExamenFisicoGeneral' => $request['PulmonarExamenFisicoGeneral'],
            'SenosExamenFisicoGeneral' => $request['SenosExamenFisicoGeneral'],
            'AbdomenaspectoExamenFisicoGeneral' => $request['AbdomenaspectoExamenFisicoGeneral'],
            'ViscerasExamenFisicoGeneral' => $request['ViscerasExamenFisicoGeneral'],
            'GenitalesexternosExamenFisicoGeneral' => $request['GenitalesexternosExamenFisicoGeneral'],
            'HerniasExamenFisicoGeneral' => $request['HerniasExamenFisicoGeneral'],
            'AdenopatiasExamenFisicoGeneral' => $request['AdenopatiasExamenFisicoGeneral'],
            'MiembrossuperioresExamenFisicoGeneral' => $request['MiembrossuperioresExamenFisicoGeneral'],
            'MiembrosinferioresExamenFisicoGeneral' => $request['MiembrosinferioresExamenFisicoGeneral'],
            'VascularperifericoExamenFisicoGeneral' => $request['VascularperifericoExamenFisicoGeneral'],
            'NeurologicoExamenFisicoGeneral' => $request['NeurologicoExamenFisicoGeneral'],
            'ReflejostendinososExamenFisicoGeneral' => $request['ReflejostendinososExamenFisicoGeneral'],
            'MarchaExamenFisicoGeneral' => $request['MarchaExamenFisicoGeneral'],
            'EquilibrioExamenFisicoGeneral' => $request['EquilibrioExamenFisicoGeneral'],
            'EstadomentalExamenFisicoGeneral' => $request['EstadomentalExamenFisicoGeneral'],
            'CicatricesExamenFisicoGeneral' => $request['CicatricesExamenFisicoGeneral'],
            'GrupoExamenFisicoGeneral' => $request['GrupoExamenFisicoGeneral'],


            'AmpliacionExamenFisicoGeneral' => $request['AmpliacionExamenFisicoGeneral'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }
}
