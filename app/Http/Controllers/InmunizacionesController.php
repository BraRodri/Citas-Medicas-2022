<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\Inmunizaciones;

class InmunizacionesController extends Controller
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
        Inmunizaciones::create([
            'historia_medica_id' => $historiaMedica->id,

            'checkIndemnizacionTetanos' => $request['checkIndemnizacionTetanos'] ? 1 : 0,
            'checkIndemnizacionFiebreAmarilla' => $request['checkIndemnizacionFiebreAmarilla'] ? 1 : 0,
            'checkIndemnizacionHepatitisB' => $request['checkIndemnizacionHepatitisB'] ? 1 : 0,
            'checkIndemnizacionINFLUENZA' => $request['checkIndemnizacionINFLUENZA'] ? 1 : 0,
            'checkIndemnizacionOtras' => $request['checkIndemnizacionOtras'] ? 1 : 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inmunizaciones  $inmunizaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Inmunizaciones $inmunizaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inmunizaciones  $inmunizaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmunizaciones $inmunizaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inmunizaciones  $inmunizaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmunizaciones $inmunizaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inmunizaciones  $inmunizaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmunizaciones $inmunizaciones)
    {
        //
    }
}
