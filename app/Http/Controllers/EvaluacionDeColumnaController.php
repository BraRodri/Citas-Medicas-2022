<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\EvaluacionDeColumna;

class EvaluacionDeColumnaController extends Controller
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
        EvaluacionDeColumna::create([
            'historia_medica_id' => $historiaMedica->id,

            'InspeccionEvaluacionDeColumna' => $request['InspeccionEvaluacionDeColumna'],
            'PalpacionEvaluacionDeColumna' => $request['PalpacionEvaluacionDeColumna'],
            'SensibilidadEvaluacionDeColumna' => $request['SensibilidadEvaluacionDeColumna'],
            'MotricidadEvaluacionDeColumna' => $request['MotricidadEvaluacionDeColumna'],
            'EquilibrioestaticoEvaluacionDeColumna' => $request['EquilibrioestaticoEvaluacionDeColumna'],

            'AlineacionescapularEvaluacionDeColumna' => $request['AlineacionescapularEvaluacionDeColumna'],
            'AlineacionpelvicaEvaluacionDeColumna' => $request['AlineacionpelvicaEvaluacionDeColumna'],
            'CifosisEvaluacionDeColumna' => $request['CifosisEvaluacionDeColumna'],
            'LordosisEvaluacionDeColumna' => $request['LordosisEvaluacionDeColumna'],
            'EscoliosisEvaluacionDeColumna' => $request['EscoliosisEvaluacionDeColumna'],

            'FlexionanteriorEvaluacionDeColumna' => $request['FlexionanteriorEvaluacionDeColumna'],
            'ExtensionposteriorEvaluacionDeColumna' => $request['ExtensionposteriorEvaluacionDeColumna'],
            'FlexionlateralEvaluacionDeColumna' => $request['FlexionlateralEvaluacionDeColumna'],
            'RotacionEvaluacionDeColumna' => $request['RotacionEvaluacionDeColumna'],
            'MedicionextremidadesEvaluacionDeColumna' => $request['MedicionextremidadesEvaluacionDeColumna'],

            'TestdeWellsEvaluacionDeColumna' => $request['TestdeWellsEvaluacionDeColumna'],
            'PruebadeLassegueEvaluacionDeColumna' => $request['PruebadeLassegueEvaluacionDeColumna'],
            'SignodeltimbreEvaluacionDeColumna' => $request['SignodeltimbreEvaluacionDeColumna'],
            'MarchaentalonesEvaluacionDeColumna' => $request['MarchaentalonesEvaluacionDeColumna'],
            'MarchaenpuntasEvaluacionDeColumna' => $request['MarchaenpuntasEvaluacionDeColumna'],

            'AmpliacionEvaluacionDeColumna' => $request['AmpliacionEvaluacionDeColumna']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EvaluacionDeColumna  $evaluacionDeColumna
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionDeColumna $evaluacionDeColumna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluacionDeColumna  $evaluacionDeColumna
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionDeColumna $evaluacionDeColumna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluacionDeColumna  $evaluacionDeColumna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionDeColumna $evaluacionDeColumna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluacionDeColumna  $evaluacionDeColumna
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionDeColumna $evaluacionDeColumna)
    {
        //
    }
}
