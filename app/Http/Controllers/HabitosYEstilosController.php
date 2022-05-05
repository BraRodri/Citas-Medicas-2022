<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\HabitosYEstilos;

class HabitosYEstilosController extends Controller
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
        HabitosYEstilos::create([
            'historia_medica_id' => $historiaMedica->id,

            'checkHabitoTabaquismo' => $request['checkHabitoTabaquismo'] ? 1 : 0,
            'tipoHabitoTabaquismo',
            'frecuenciaHabitoTabaquismo',
            'antiguedadHabitoTabaquismo',

            'checkHabitoLicor' => $request['checkHabitoLicor'] ? 1 : 0,
            'tipoHabitoLicor' => $request['tipoHabitoLicor'],
            'frecuenciaHabitoLicor' => $request['frecuenciaHabitoLicor'],
            'antiguedadHabitoLicor' => $request['antiguedadHabitoLicor'],

            'checkHabitoSustanciassicoactivas' => $request['checkHabitoSustanciassicoactivas'] ? 1 : 0,
            'tipoHabitoSustanciassicoactivas' => $request['tipoHabitoSustanciassicoactivas'],
            'frecuenciaHabitoSustanciassicoactivas' => $request['frecuenciaHabitoSustanciassicoactivas'],
            'antiguedadHabitoSustanciassicoactivas' => $request['antiguedadHabitoSustanciassicoactivas'],

            'checkHabitoDeportesoactividadfisica' => $request['checkHabitoDeportesoactividadfisica'] ? 1 : 0,
            'tipoHabitoDeportesoactividadfisica' => $request['tipoHabitoDeportesoactividadfisica'],
            'frecuenciaHabitoDeportesoactividadfisica' => $request['frecuenciaHabitoDeportesoactividadfisica'],
            'antiguedadHabitoDeportesoactividadfisica' => $request['antiguedadHabitoDeportesoactividadfisica'],

            'checkHabitoActividadesextralaborales' => $request['checkHabitoActividadesextralaborales'] ? 1 : 0,
            'tipoHabitoActividadesextralaborales' => $request['tipoHabitoActividadesextralaborales'],
            'frecuenciaHabitoActividadesextralaborales' => $request['frecuenciaHabitoActividadesextralaborales'],
            'antiguedadHabitoActividadesextralaborales' => $request['antiguedadHabitoActividadesextralaborales'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HabitosYEstilos  $habitosYEstilos
     * @return \Illuminate\Http\Response
     */
    public function show(HabitosYEstilos $habitosYEstilos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HabitosYEstilos  $habitosYEstilos
     * @return \Illuminate\Http\Response
     */
    public function edit(HabitosYEstilos $habitosYEstilos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HabitosYEstilos  $habitosYEstilos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HabitosYEstilos $habitosYEstilos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HabitosYEstilos  $habitosYEstilos
     * @return \Illuminate\Http\Response
     */
    public function destroy(HabitosYEstilos $habitosYEstilos)
    {
        //
    }
}
