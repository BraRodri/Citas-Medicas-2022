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
        if (auth()->user()->roles[0]->name === "Paciente" || auth()->user()->roles[0]->name === "Farmaceutico") {
            /* Ejecutar el policy */
            $this->authorize('viewAny');
        }

        /* Get Only horarys disponibles without Citas apartadas */
        //$disponibilitysMedico = HoraryMedico::where('medico_id', auth()->user()->medico->id)->has('cita', '===', 0)->get();
        $disponibilitysMedico = HoraryMedico::where('medico_id', auth()->user()->medico->id)->with('cita')->get();
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

    public function destroy(Request $request)
    {
        $horary = HoraryMedico::where('medico_id', auth()->user()->medico->id)
                    ->where('date_disponibility', $request->dateSelected)
                    ->first();

        if($horary->delete()){
            return response()->json(['info' => 'deleted']);
        }else{
            return response()->json(['info' => 'failed']);
        }
    }

    public function update(Request $request)
    {
        $horary = HoraryMedico::where('medico_id', auth()->user()->medico->id)
                    ->where('date_disponibility', $request->dateOld)
                    ->first();
        $horary->date_disponibility = $request->dateNew;
        $updated = $horary->update();
        if($updated){
            return response()->json(['info' => 'updated']);
        }else{
            return response()->json(['info' => 'failed']);
        }
    }
}
