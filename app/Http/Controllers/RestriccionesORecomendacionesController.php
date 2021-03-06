<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\RestriccionesORecomendaciones;

class RestriccionesORecomendacionesController extends Controller
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
        foreach ($request['restriccionesOrecomendaciones'] as $key => $value) {
            if($request['restriccionesOrecomendaciones'][$key]){
                RestriccionesORecomendaciones::create([
                    'historia_medica_id' => $historiaMedica->id,

                    'restriccionesOrecomendaciones' => $request['restriccionesOrecomendaciones'][$key]
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RestriccionesORecomendaciones  $restriccionesORecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function show(RestriccionesORecomendaciones $restriccionesORecomendaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RestriccionesORecomendaciones  $restriccionesORecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(RestriccionesORecomendaciones $restriccionesORecomendaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RestriccionesORecomendaciones  $restriccionesORecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestriccionesORecomendaciones $restriccionesORecomendaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RestriccionesORecomendaciones  $restriccionesORecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestriccionesORecomendaciones $restriccionesORecomendaciones)
    {
        //
    }
}
