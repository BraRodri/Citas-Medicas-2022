<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Models\RevisionPorSistemas;

class RevisionPorSistemasController extends Controller
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
        RevisionPorSistemas::create([
            'historia_medica_id' => $historiaMedica->id,

            'revisionPorSistemasYEnfermedadActual' => $request['revisionPorSistemasYEnfermedadActual']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RevisionPorSistemas  $revisionPorSistemas
     * @return \Illuminate\Http\Response
     */
    public function show(RevisionPorSistemas $revisionPorSistemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RevisionPorSistemas  $revisionPorSistemas
     * @return \Illuminate\Http\Response
     */
    public function edit(RevisionPorSistemas $revisionPorSistemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RevisionPorSistemas  $revisionPorSistemas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RevisionPorSistemas $revisionPorSistemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RevisionPorSistemas  $revisionPorSistemas
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevisionPorSistemas $revisionPorSistemas)
    {
        //
    }
}
