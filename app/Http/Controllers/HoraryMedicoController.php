<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\HoraryMedico;
use Illuminate\Http\Request;

class HoraryMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Medico $medico)
    {
        $horarysDisponibles = HoraryMedico::where('medico_id', $medico->id)->has('cita', '===', 0)->get();
        return response()->json(['horarysDisponibles' => $horarysDisponibles]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HoraryMedico  $horaryMedico
     * @return \Illuminate\Http\Response
     */
    public function show(HoraryMedico $horaryMedico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoraryMedico  $horaryMedico
     * @return \Illuminate\Http\Response
     */
    public function edit(HoraryMedico $horaryMedico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HoraryMedico  $horaryMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoraryMedico $horaryMedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoraryMedico  $horaryMedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoraryMedico $horaryMedico)
    {
        //
    }
}
