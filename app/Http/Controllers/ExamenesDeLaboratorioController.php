<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\ExamenesDeLaboratorio;

class ExamenesDeLaboratorioController extends Controller
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
        ExamenesDeLaboratorio::create([
            'historia_medica_id' => $historiaMedica->id,

            'dateHemogramaExamen' => $request['dateHemogramaExamen'],
            'HemoglobinaHemogramaExamen' => $request['HemoglobinaHemogramaExamen'],
            'HematocritoHemogramaExamen' => $request['HematocritoHemogramaExamen'],

            'dateGlicemiaExamen' => $request['dateGlicemiaExamen'],
            'GlicemiaExamen' => $request['GlicemiaExamen'],

            'datePERFILLIPIDICOExamen' => $request['datePERFILLIPIDICOExamen'],
            'ColesterolTotalExamen' => $request['ColesterolTotalExamen'],
            'ColesterolHDLExamen' => $request['ColesterolHDLExamen'],
            'ColesterolLDLExamen' => $request['ColesterolLDLExamen'],
            'TrigliceridosExamen' => $request['TrigliceridosExamen'],

            'dateCitoQuimicoExamen' => $request['dateCitoQuimicoExamen'],
            'CitoQuimicoAspectoExamen' => $request['CitoQuimicoAspectoExamen'],
            'CitoQuimicoQuimicaExamen' => $request['CitoQuimicoQuimicaExamen'],
            'CitoQuimicoMicroscopioExamen' => $request['CitoQuimicoMicroscopioExamen'],

            'dateOtrosExamen' => $request['dateOtrosExamen'],
            'otrosExamen' => $request['otrosExamen'],

            'dateMANIPULADORESExamen' => $request['dateMANIPULADORESExamen'],
            'KOHMANIPULADORESExamen' => $request['KOHMANIPULADORESExamen'],
            'FROTISMANIPULADORESExamen' => $request['FROTISMANIPULADORESExamen'],
            'COPROLOGICOMANIPULADORESExamen' => $request['COPROLOGICOMANIPULADORESExamen']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamenesDeLaboratorio  $examenesDeLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenesDeLaboratorio $examenesDeLaboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamenesDeLaboratorio  $examenesDeLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenesDeLaboratorio $examenesDeLaboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenesDeLaboratorio  $examenesDeLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenesDeLaboratorio $examenesDeLaboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenesDeLaboratorio  $examenesDeLaboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenesDeLaboratorio $examenesDeLaboratorio)
    {
        //
    }
}
