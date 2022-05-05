<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\AntPatologicosPersonales;

class AntPatologicosPersonalesController extends Controller
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
        AntPatologicosPersonales::create([
            'historia_medica_id' => $historiaMedica->id,

            'cardiacsP' => $request['cardiacsP'] ? 1 : 0,
            'cardiacsF' => $request['cardiacsF'] ? 1 : 0,
            'hiperP' => $request['hiperP'] ? 1 : 0,
            'hiperF' => $request['hiperF'] ? 1 : 0,
            'cancerP' => $request['cancerP'] ? 1 : 0,
            'cancerF' => $request['cancerF'] ? 1 : 0,
            'diabetesP' => $request['diabetesP'] ? 1 : 0,
            'diabetesF' => $request['diabetesF'] ? 1 : 0,
            'dislipidemiasP' => $request['dislipidemiasP'] ? 1 : 0,
            'dislipidemiasF' => $request['dislipidemiasF'] ? 1 : 0,
            'otrosMetabolicosP' => $request['otrosMetabolicosP'] ? 1 : 0,
            'otrosMetabolicosF' => $request['otrosMetabolicosF'] ? 1 : 0,
            'epilepsiaP' => $request['epilepsiaP'] ? 1 : 0,
            'epilepsiaF' => $request['epilepsiaF'] ? 1 : 0,
            'siquiatricosP' => $request['siquiatricosP'] ? 1 : 0,
            'siquiatricosF' => $request['siquiatricosF'] ? 1 : 0,
            'congenitosP' => $request['congenitosP'] ? 1 : 0,
            'congenitosF' => $request['congenitosF'] ? 1 : 0,
            'rinitisP' => $request['rinitisP'] ? 1 : 0,
            'rinitisF' => $request['rinitisF'] ? 1 : 0,
            'alergiasP' => $request['alergiasP'] ? 1 : 0,
            'alergiasF' => $request['alergiasF'] ? 1 : 0,
            'asmaP' => $request['asmaP'] ? 1 : 0,
            'asmaF' => $request['asmaF'] ? 1 : 0,

            'reumatologicosP' => $request['reumatologicosP'] ? 1 : 0,
            'reumatologicosF' => $request['reumatologicosF'] ? 1 : 0,
            'varicesP' => $request['varicesP'] ? 1 : 0,
            'varicesF' => $request['varicesF'] ? 1 : 0,
            'otrosP' => $request['otrosP'] ? 1 : 0,
            'otrosF' => $request['otrosF'] ? 1 : 0,
            'fobiasP' => $request['fobiasP'] ? 1 : 0,
            'fobiasF' => $request['fobiasF'] ? 1 : 0,
            'dermatologicosP' => $request['dermatologicosP'] ? 1 : 0,
            'dermatologicosF' => $request['dermatologicosF'] ? 1 : 0,
            'tuberculosisP' => $request['tuberculosisP'] ? 1 : 0,
            'tuberculosisF' => $request['tuberculosisF'] ? 1 : 0,
            'osteomuscularesP' => $request['osteomuscularesP'] ? 1 : 0,
            'osteomuscularesF' => $request['osteomuscularesF'] ? 1 : 0,
            'quirurgicosP' => $request['quirurgicosP'] ? 1 : 0,
            'quirurgicosF' => $request['quirurgicosF'] ? 1 : 0,
            'traumaticosP' => $request['traumaticosP'] ? 1 : 0,
            'traumaticosF' => $request['traumaticosF'] ? 1 : 0,
            'obesidadP' => $request['obesidadP'] ? 1 : 0,
            'obesidadF' => $request['obesidadF'] ? 1 : 0,
            'hipoacusiaP' => $request['hipoacusiaP'] ? 1 : 0,
            'hipoacusiaF' => $request['hipoacusiaF'] ? 1 : 0,
            'intoxicacionesP' => $request['intoxicacionesP'] ? 1 : 0,
            'intoxicacionesF' => $request['intoxicacionesF'] ? 1 : 0,

            'observationsAntPer' => $request['observationsAntPer'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntPatologicosPersonales  $antPatologicosPersonales
     * @return \Illuminate\Http\Response
     */
    public function show(AntPatologicosPersonales $antPatologicosPersonales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntPatologicosPersonales  $antPatologicosPersonales
     * @return \Illuminate\Http\Response
     */
    public function edit(AntPatologicosPersonales $antPatologicosPersonales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AntPatologicosPersonales  $antPatologicosPersonales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntPatologicosPersonales $antPatologicosPersonales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntPatologicosPersonales  $antPatologicosPersonales
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntPatologicosPersonales $antPatologicosPersonales)
    {
        //
    }
}
