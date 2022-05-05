<?php

namespace App\Http\Controllers;

use App\Models\ExamenFisico;
use Illuminate\Http\Request;
use App\Models\HistoriaMedica;

class ExamenFisicoController extends Controller
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
        ExamenFisico::create([
            'historia_medica_id' => $historiaMedica->id,

            'Sp02' => $request['Sp02'],
            'TemperaturaExamenFisico' => $request['TemperaturaExamenFisico'],
            'PulsoExamenFisico' => $request['PulsoExamenFisico'],
            'RitmoExamenFisico' => $request['RitmoExamenFisico'],
            'PresionArterialExamenFisico' => $request['PresionArterialExamenFisico'],
            'DominanciaExamenFisico' => $request['DominanciaExamenFisico'],
            'FRespiratoriaExamenFisico' => $request['FRespiratoriaExamenFisico'],

            'PesoExamenFisico' => $request['PesoExamenFisico'],
            'TallaExamenFisico' => $request['TallaExamenFisico'],
            'IMCExamenFisico' => $request['IMCExamenFisico'],
            'DescripcionExamenFisico' => $request['DescripcionExamenFisico'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenFisico $examenFisico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenFisico $examenFisico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenFisico $examenFisico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenFisico  $examenFisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenFisico $examenFisico)
    {
        //
    }
}
