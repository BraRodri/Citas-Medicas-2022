<?php

namespace App\Http\Controllers;

use App\Models\InfGeneral;
use Illuminate\Http\Request;
use App\Models\HistoriaMedica;

class InfGeneralController extends Controller
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
        InfGeneral::create([
            'historia_medica_id' => $historiaMedica->id,
            'nameCompany' => $request['nameCompany'],
            'placeBirth' => $request['placeBirth'],
            'statusCivil' => $request['statusCivil'],
            'sons' => $request['sons'],
            'profession' => $request['profession'],
            'ocupation' => $request['ocupation'],
            'dateAdmission' => $request['dateAdmission'],
            'seniorityCompany' => $request['seniorityCompany'],
            'dateExam' => $request['dateExam'],
            'eps' => $request['eps'],
            'afp' => $request['afp'],
            'rh' => $request['rh'],
            'scholarship' => $request['scholarship'],
            'areaWork' => $request['areaWork'],
            'stratum' => $request['stratum'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
