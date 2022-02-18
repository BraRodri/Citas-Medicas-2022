<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Medico;
use App\Models\Cita;
use App\Models\HoraryMedico;
use App\Models\Paciente;
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
        $medicsWithHorarys = Medico::has('horary')->with('usuario')->with('horary')->get();
        $medicsWithHorarysDisponibilities = [];
        foreach ($medicsWithHorarys as $medic) {
            foreach($medic->horary as $horary){
                /* Añadir unicamente los medicos que tengan disponibilidad */
                if(!$horary->cita){
                    array_push($medicsWithHorarysDisponibilities, $medic);
                    break;
                };
            }
        }
        return view('pages.panel.citas.create', compact('medicsWithHorarysDisponibilities'));
    }

    public function store(Request $request)
    {
        try {
            Cita::create([
                'horary_medico_id' => $request->horary_medico_id,
                'paciente_id' => auth()->user()->paciente->id,
                'modality' => $request->modality,
                'created_at' => Carbon::now()
            ]);
            return response()->json(['info' => 'created']);
        } catch (\Exception $e) {
            return response()->json(['info' => 'failed']);
        }
    }


    /* View agend Medico */
    public function viewAgendMedico()
    {
        if (auth()->user()->roles[0]->name !== "Medico") {
            /* Ejecutar el policy */
            $this->authorize('viewAny');
        }

        $citasByMedico = HoraryMedico::where('medico_id', auth()->user()->medico->id)->has('cita')->with('cita')->get();
        return view('pages.panel.medico.index', compact('citasByMedico'));
    }


    /* Api - Details of Cita */
    public function show($idCita)
    {
        $cita = Cita::with('horaryMedico')->with('paciente')->find($idCita);
        $infoCita = [
            'cita' => $cita,
            'paciente' => Paciente::with('usuario')->find($cita->paciente_id),
        ];

        return response()->json($infoCita);
    }
}
