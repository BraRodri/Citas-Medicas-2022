<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\EvaluacionOsteomuscular;

class EvaluacionOsteomuscularController extends Controller
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
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluacionOsteomuscular  $evaluacionOsteomuscular
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluacionOsteomuscular $evaluacionOsteomuscular)
    {
        //
    }
}
