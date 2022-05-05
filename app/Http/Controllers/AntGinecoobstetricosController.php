<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\AntGinecoobstetricos;

class AntGinecoobstetricosController extends Controller
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
        foreach ($request['menarca'] as $key => $value) {
            if($request['menarca'][$key] || $request['fum'][$key] || $request['gestaciones'][$key] || $request['planificacion'][$key]){
                AntGinecoobstetricos::create([
                    'historia_medica_id' => $historiaMedica->id,
                    'checkantGineCoobstetricos' => 1,
                    'menarca' => $request['menarca'][$key],
                    'fum' => $request['fum'][$key],
                    'gestaciones' => $request['gestaciones'][$key],
                    'planificacion' => $request['planificacion'][$key],
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntGinecoobstetricos  $antGinecoobstetricos
     * @return \Illuminate\Http\Response
     */
    public function show(AntGinecoobstetricos $antGinecoobstetricos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntGinecoobstetricos  $antGinecoobstetricos
     * @return \Illuminate\Http\Response
     */
    public function edit(AntGinecoobstetricos $antGinecoobstetricos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AntGinecoobstetricos  $antGinecoobstetricos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntGinecoobstetricos $antGinecoobstetricos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntGinecoobstetricos  $antGinecoobstetricos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntGinecoobstetricos $antGinecoobstetricos)
    {
        //
    }
}
