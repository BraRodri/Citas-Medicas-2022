<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\ConductasYRecomendaciones;

class ConductasYRecomendacionesController extends Controller
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
        ConductasYRecomendaciones::create([
            'historia_medica_id' => $historiaMedica->id,

            'checkRiesgospropiosdeloficioarealizar' => $request['checkRiesgospropiosdeloficioarealizar'] ? 1 : 0,
            'checkUsodelosprotectoresauditivos' => $request['checkUsodelosprotectoresauditivos'] ? 1 : 0,
            'checkUsodelaproteccionrespiratoria' => $request['checkUsodelaproteccionrespiratoria'] ? 1 : 0,
            'checkEntrenamientodetrabajosenalturas' => $request['checkEntrenamientodetrabajosenalturas'] ? 1 : 0,

            'checkSuministrarcapacitaryentrenarenelusodelosEPI' => $request['checkSuministrarcapacitaryentrenarenelusodelosEPI'] ? 1 : 0,
            'checkUsoadecuadodelosEPIquelesuministrelaempresa' => $request['checkUsoadecuadodelosEPIquelesuministrelaempresa'] ? 1 : 0,
            'checkUsodeproteccionnivelcondicionestrabajadorytipodetrabajo' => $request['checkUsodeproteccionnivelcondicionestrabajadorytipodetrabajo'] ? 1 : 0,
            'checkUtilizarproteccionauditivaenambientesruidosostanto' => $request['checkUtilizarproteccionauditivaenambientesruidosostanto'] ? 1 : 0,

            'checkUtilizarunaadecuadahigieneposturalymecanicacorporal' => $request['checkUtilizarunaadecuadahigieneposturalymecanicacorporal'] ? 1 : 0,
            'checkEntrenamientoscontinuossobrelamecanicacorporal' => $request['checkEntrenamientoscontinuossobrelamecanicacorporal'] ? 1 : 0,
            'checkLasmujeresnodebenmovilizarcargasdesdeelpiso' => $request['checkLasmujeresnodebenmovilizarcargasdesdeelpiso'] ? 1 : 0,
            'checkHacerseguimientocontinuodelasrecomendacionespara' => $request['checkHacerseguimientocontinuodelasrecomendacionespara'] ? 1 : 0,

            'checkConservacionAuditiva' => $request['checkConservacionAuditiva'] ? 1 : 0,
            'checkPrevenciondelaaccidentalidadlaboral' => $request['checkPrevenciondelaaccidentalidadlaboral'] ? 1 : 0,
            'checkPrevenciondepatologiasosteomusculares' => $request['checkPrevenciondepatologiasosteomusculares'] ? 1 : 0,
            'checkPrevencionmanejodesustanciasquimicas' => $request['checkPrevencionmanejodesustanciasquimicas'] ? 1 : 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConductasYRecomendaciones  $conductasYRecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function show(ConductasYRecomendaciones $conductasYRecomendaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConductasYRecomendaciones  $conductasYRecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(ConductasYRecomendaciones $conductasYRecomendaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConductasYRecomendaciones  $conductasYRecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConductasYRecomendaciones $conductasYRecomendaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConductasYRecomendaciones  $conductasYRecomendaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConductasYRecomendaciones $conductasYRecomendaciones)
    {
        //
    }
}
