<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index()
    {
        return view('pages.panel.citas.index');
    }

    public function create()
    {
        /* Get all medics that have one or more disponibiliies */
        $medics = Medico::has('horary')->with('usuario')->with('horary')->get();
        return view('pages.panel.citas.create', compact('medics'));
    }
}
