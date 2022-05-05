<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\AyudasDiagnosticas;

class AyudasDiagnosticasController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AyudasDiagnosticas  $ayudasDiagnosticas
     * @return \Illuminate\Http\Response
     */
    public function show(AyudasDiagnosticas $ayudasDiagnosticas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AyudasDiagnosticas  $ayudasDiagnosticas
     * @return \Illuminate\Http\Response
     */
    public function edit(AyudasDiagnosticas $ayudasDiagnosticas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AyudasDiagnosticas  $ayudasDiagnosticas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AyudasDiagnosticas $ayudasDiagnosticas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AyudasDiagnosticas  $ayudasDiagnosticas
     * @return \Illuminate\Http\Response
     */
    public function destroy(AyudasDiagnosticas $ayudasDiagnosticas)
    {
        //
    }
}
