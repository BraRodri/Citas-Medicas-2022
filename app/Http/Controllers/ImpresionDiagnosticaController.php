<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\ImpresionDiagnostica;

class ImpresionDiagnosticaController extends Controller
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
        ImpresionDiagnostica::create([
            'historia_medica_id' => $historiaMedica->id,

            'descripcionEXAMENDESALUDOCUPACIONAL' => $request['descripcionEXAMENDESALUDOCUPACIONAL']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImpresionDiagnostica  $impresionDiagnostica
     * @return \Illuminate\Http\Response
     */
    public function show(ImpresionDiagnostica $impresionDiagnostica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImpresionDiagnostica  $impresionDiagnostica
     * @return \Illuminate\Http\Response
     */
    public function edit(ImpresionDiagnostica $impresionDiagnostica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImpresionDiagnostica  $impresionDiagnostica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpresionDiagnostica $impresionDiagnostica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImpresionDiagnostica  $impresionDiagnostica
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImpresionDiagnostica $impresionDiagnostica)
    {
        //
    }
}
