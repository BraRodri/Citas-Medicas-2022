<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\RestriccionesORecomendacionesDeAnt;

class RestriccionesORecomendacionesDeAntController extends Controller
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
        foreach ($request['tipoRestriccion'] as $key => $value) {
            if($request['tipoRestriccion'][$key] || $request['diagnosticoRestriccion'][$key] || $request['tiempoRestriccion'][$key] || $request['entidadQueOrdeno'][$key]){
                RestriccionesORecomendacionesDeAnt::create([
                    'historia_medica_id' => $historiaMedica->id,
                    'tipoRestriccion' => $request['tipoRestriccion'][$key],
                    'diagnosticoRestriccion' => $request['diagnosticoRestriccion'][$key],
                    'tiempoRestriccion' => $request['tiempoRestriccion'][$key],
                    'entidadQueOrdeno' => $request['entidadQueOrdeno'][$key],
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RestriccionesORecomendacionesDeAnt  $restriccionesORecomendacionesDeAnt
     * @return \Illuminate\Http\Response
     */
    public function show(RestriccionesORecomendacionesDeAnt $restriccionesORecomendacionesDeAnt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RestriccionesORecomendacionesDeAnt  $restriccionesORecomendacionesDeAnt
     * @return \Illuminate\Http\Response
     */
    public function edit(RestriccionesORecomendacionesDeAnt $restriccionesORecomendacionesDeAnt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RestriccionesORecomendacionesDeAnt  $restriccionesORecomendacionesDeAnt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestriccionesORecomendacionesDeAnt $restriccionesORecomendacionesDeAnt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RestriccionesORecomendacionesDeAnt  $restriccionesORecomendacionesDeAnt
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestriccionesORecomendacionesDeAnt $restriccionesORecomendacionesDeAnt)
    {
        //
    }
}
