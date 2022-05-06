<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observaciones;
use App\Models\HistoriaMedica;

class ObservacionesController extends Controller
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
        Observaciones::create([
            'historia_medica_id' => $historiaMedica->id,

            'descripcionObservacionesForm18' => $request['descripcionObservacionesForm18']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Observaciones $observaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Observaciones $observaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Observaciones $observaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Observaciones  $observaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observaciones $observaciones)
    {
        //
    }
}
