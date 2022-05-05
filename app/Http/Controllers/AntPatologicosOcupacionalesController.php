<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\AntPatologicosOcupacionales;

class AntPatologicosOcupacionalesController extends Controller
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
        foreach ($request['tipoAfeccion'] as $key => $value) {
            if($request['tipoAfeccion'][$key] || $request['parteCuerpoAfectada'][$key] || $request['tiempoDeOcurrencia'][$key] || $request['secuelas'][$key]){
                AntPatologicosOcupacionales::create([
                    'historia_medica_id' => $historiaMedica->id,
                    'tipoAfeccion' => $request['tipoAfeccion'][$key],
                    'parteCuerpoAfectada' => $request['parteCuerpoAfectada'][$key],
                    'tiempoDeOcurrencia' => $request['tiempoDeOcurrencia'][$key],
                    'secuelas' => $request['secuelas'][$key],
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntPatologicosOcupacionales  $antPatologicosOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function show(AntPatologicosOcupacionales $antPatologicosOcupacionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntPatologicosOcupacionales  $antPatologicosOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function edit(AntPatologicosOcupacionales $antPatologicosOcupacionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AntPatologicosOcupacionales  $antPatologicosOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntPatologicosOcupacionales $antPatologicosOcupacionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntPatologicosOcupacionales  $antPatologicosOcupacionales
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntPatologicosOcupacionales $antPatologicosOcupacionales)
    {
        //
    }
}
