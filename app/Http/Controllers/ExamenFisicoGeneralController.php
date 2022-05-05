<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\ExamenFisicoGeneral;

class ExamenFisicoGeneralController extends Controller
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
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamenFisicoGeneral  $examenFisicoGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamenFisicoGeneral $examenFisicoGeneral)
    {
        //
    }
}
