<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConceptoMedico;
use App\Models\HistoriaMedica;

class ConceptoMedicoController extends Controller
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
        ConceptoMedico::create([
            'historia_medica_id' => $historiaMedica->id,

            'checkAPTOPARACONTINUARLABORANDO' => $request['checkAPTOPARACONTINUARLABORANDO'] ? 1 : 0,
            'checkAPTOPARALABORARCONPATOLOGIANORESTRICTIVA' => $request['checkAPTOPARALABORARCONPATOLOGIANORESTRICTIVA'] ? 1: 0,
            'checkAPTOPARALABOARACONRECOMENDACIONESOCUPACIONAL' => $request['checkAPTOPARALABOARACONRECOMENDACIONESOCUPACIONAL'] ? 1 : 0,
            'checkAPLAZADO' => $request['checkAPLAZADO'] ? 1 : 0,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConceptoMedico  $conceptoMedico
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptoMedico $conceptoMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConceptoMedico  $conceptoMedico
     * @return \Illuminate\Http\Response
     */
    public function edit(ConceptoMedico $conceptoMedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConceptoMedico  $conceptoMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConceptoMedico $conceptoMedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConceptoMedico  $conceptoMedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConceptoMedico $conceptoMedico)
    {
        //
    }
}
