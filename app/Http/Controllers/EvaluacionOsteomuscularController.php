<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\EvaluacionOsteomuscular;

class EvaluacionOsteomuscularController extends Controller
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
        EvaluacionOsteomuscular::create([
            'historia_medica_id' => $historiaMedica->id,

            'hombrosEvaluacionOsteomuscularDer' => $request['hombrosEvaluacionOsteomuscularDer'],
            'hombrosEvaluacionOsteomuscularIzq' => $request['hombrosEvaluacionOsteomuscularIzq'],
            'BrazosEvaluacionOsteomuscularDer' => $request['BrazosEvaluacionOsteomuscularDer'],
            'BrazosEvaluacionOsteomuscularIzq' => $request['BrazosEvaluacionOsteomuscularIzq'],
            'CodosEvaluacionOsteomuscularDer' => $request['CodosEvaluacionOsteomuscularDer'],
            'CodosEvaluacionOsteomuscularIzq' => $request['CodosEvaluacionOsteomuscularIzq'],
            'AntebrazosEvaluacionOsteomuscularDer' => $request['AntebrazosEvaluacionOsteomuscularDer'],
            'AntebrazosEvaluacionOsteomuscularIzq' => $request['AntebrazosEvaluacionOsteomuscularIzq'],
            'MunecasEvaluacionOsteomuscularDer' => $request['MunecasEvaluacionOsteomuscularDer'],
            'MunecasEvaluacionOsteomuscularIzq' => $request['MunecasEvaluacionOsteomuscularIzq'],
            'ManosEvaluacionOsteomuscularDer' => $request['ManosEvaluacionOsteomuscularDer'],
            'ManosEvaluacionOsteomuscularIzq' => $request['ManosEvaluacionOsteomuscularIzq'],

            'CaderasEvaluacionOsteomuscularDer' => $request['CaderasEvaluacionOsteomuscularDer'],
            'CaderasEvaluacionOsteomuscularIzq' => $request['CaderasEvaluacionOsteomuscularIzq'],
            'MuslosEvaluacionOsteomuscularDer' => $request['MuslosEvaluacionOsteomuscularDer'],
            'MuslosEvaluacionOsteomuscularIzq' => $request['MuslosEvaluacionOsteomuscularIzq'],
            'RodillasEvaluacionOsteomuscularDer' => $request['RodillasEvaluacionOsteomuscularDer'],
            'RodillasEvaluacionOsteomuscularIzq' => $request['RodillasEvaluacionOsteomuscularIzq'],
            'PiernasEvaluacionOsteomuscularDer' => $request['PiernasEvaluacionOsteomuscularDer'],
            'PiernasEvaluacionOsteomuscularIzq' => $request['PiernasEvaluacionOsteomuscularIzq'],
            'TobillosEvaluacionOsteomuscularDer' => $request['TobillosEvaluacionOsteomuscularDer'],
            'TobillosEvaluacionOsteomuscularIzq' => $request['TobillosEvaluacionOsteomuscularIzq'],
            'PiesEvaluacionOsteomuscularDer' => $request['PiesEvaluacionOsteomuscularDer'],
            'PiesEvaluacionOsteomuscularIzq' => $request['PiesEvaluacionOsteomuscularIzq'],

            'TINNELEvaluacionOsteomuscularDer' => $request['TINNELEvaluacionOsteomuscularDer'],
            'TINNELEvaluacionOsteomuscularIzq' => $request['TINNELEvaluacionOsteomuscularIzq'],
            'PHANELEvaluacionOsteomuscularDer' => $request['PHANELEvaluacionOsteomuscularDer'],
            'PHANELEvaluacionOsteomuscularIzq' => $request['PHANELEvaluacionOsteomuscularIzq'],
            'REFLEJOSEvaluacionOsteomuscularDer' => $request['REFLEJOSEvaluacionOsteomuscularDer'],
            'REFLEJOSEvaluacionOsteomuscularIzq' => $request['REFLEJOSEvaluacionOsteomuscularIzq'],

            'FUERZAMUSCULAREvaluacionOsteomuscular' => $request['FUERZAMUSCULAREvaluacionOsteomuscular'],
            'SENSIBILIDADEvaluacionOsteomuscular' => $request['SENSIBILIDADEvaluacionOsteomuscular'],
            'MOTILIDADEvaluacionOsteomuscular' => $request['MOTILIDADEvaluacionOsteomuscular'],

            'AmpliacionEvaluacionOsteomuscular' => $request['AmpliacionEvaluacionOsteomuscular']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }
}
