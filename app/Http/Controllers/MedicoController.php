<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\HoraryMedico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    //
    public function index()
    {
        $disponibilitysMedico = auth()->user()->medico->horary;
        return view('pages.panel.medico.programar-horario', compact('disponibilitysMedico'));
    }

    public function store(Request $request)
    {
        if(auth()->user()->medico){
            $horaryMedico = HoraryMedico::create([
                'medico_id' => auth()->user()->medico->id,
                'date_disponibility' => $request->dateSelected,
                'created_at' => Carbon::now('America/Bogota')
            ]);
            if ($horaryMedico) {
                return response()->json(['info' => "created"]);
            } else {
                return response()->json(['info' => 'failed']);
            }
        }else{
            return response()->json(['info' => 'notIsMedic']);
        }
    }
}
