<?php

namespace App\Http\Controllers;

use App\Models\AntLaborales;
use Illuminate\Http\Request;
use App\Models\HistoriaMedica;

class AntLaboralesController extends Controller
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
        foreach ($request['area'] as $key => $value) {
            if($request['area'][$key] || $request['oficio'][$key] || $request['tiempoPermanencia'][$key] || $request['fDeR'][$key] || $request['elementosProPersonal'][$key]){
                AntLaborales::create([
                    'historia_medica_id' => $historiaMedica->id,
                    'area' => $request['area'][$key],
                    'oficio' => $request['oficio'][$key],
                    'tiempoPermanencia' => $request['tiempoPermanencia'][$key],
                    'fDeR' => $request['fDeR'][$key],
                    'elementosProPersonal' => $request['elementosProPersonal'][$key],
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AntLaborales  $antLaborales
     * @return \Illuminate\Http\Response
     */
    public function show(AntLaborales $antLaborales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AntLaborales  $antLaborales
     * @return \Illuminate\Http\Response
     */
    public function edit(AntLaborales $antLaborales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AntLaborales  $antLaborales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AntLaborales $antLaborales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AntLaborales  $antLaborales
     * @return \Illuminate\Http\Response
     */
    public function destroy(AntLaborales $antLaborales)
    {
        //
    }
}
