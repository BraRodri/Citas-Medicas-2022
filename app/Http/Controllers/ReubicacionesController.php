<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reubicaciones;
use App\Models\HistoriaMedica;

class ReubicacionesController extends Controller
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
        foreach ($request['areaReubicado'] as $key => $value) {
            if($request['areaReubicado'][$key] || $request['diagnosticoReubicaciones'][$key] || $request['fechaReubicado'][$key] || $request['tiempoReubicado'][$key]){
                Reubicaciones::create([
                    'historia_medica_id' => $historiaMedica->id,
                    'checkReubicaciones' => 1,
                    'areaReubicado' => $request['areaReubicado'][$key],
                    'diagnosticoReubicaciones' => $request['diagnosticoReubicaciones'][$key],
                    'fechaReubicado' => $request['fechaReubicado'][$key],
                    'tiempoReubicado' => $request['tiempoReubicado'][$key],
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reubicaciones  $reubicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Reubicaciones $reubicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reubicaciones  $reubicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Reubicaciones $reubicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reubicaciones  $reubicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reubicaciones $reubicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reubicaciones  $reubicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reubicaciones $reubicaciones)
    {
        //
    }
}
