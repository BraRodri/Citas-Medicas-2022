<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\HistoriaMedica;
use App\Http\Controllers\InfGeneralController;
use App\Http\Controllers\AntLaboralesController;
use App\Http\Controllers\ExamenFisicoController;
use App\Http\Controllers\ObservacionesController;
use App\Http\Controllers\ReubicacionesController;
use App\Http\Controllers\ConceptoMedicoController;
use App\Http\Controllers\InmunizacionesController;
use App\Http\Controllers\HabitosYEstilosController;
use App\Http\Controllers\AyudasDiagnosticasController;
use App\Http\Controllers\EvaluacionDeColumnaController;
use App\Http\Controllers\ExamenFisicoGeneralController;
use App\Http\Controllers\RevisionPorSistemasController;
use App\Http\Controllers\AntGinecoobstetricosController;
use App\Http\Controllers\ImpresionDiagnosticaController;
use App\Http\Controllers\ExamenesDeLaboratorioController;
use App\Http\Controllers\EvaluacionOsteomuscularController;
use App\Http\Controllers\AntPatologicosPersonalesController;
use App\Http\Controllers\ConductasYRecomendacionesController;
use App\Http\Controllers\AntPatologicosOcupacionalesController;
use App\Http\Controllers\RestriccionesORecomendacionesController;
use App\Http\Controllers\RestriccionesORecomendacionesDeAntController;

class HistoriaMedicaController extends Controller
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
    public function create(User $paciente)
    {
        return view('pages.panel.historyMedical.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $paciente, Request $request)
    {
        if(HistoriaMedica::where('user_id', $paciente->id)->count() === 0){
            $historiaMedica = HistoriaMedica::create([
                'user_id' => $paciente->id
            ]);

            // * Sección 1 - Inf General y Antecedentes
            InfGeneralController::store($historiaMedica, $request);
            AntPatologicosPersonalesController::store($historiaMedica, $request);
            AntGinecoobstetricosController::store($historiaMedica, $request);
            AntLaboralesController::store($historiaMedica, $request);
            AntPatologicosOcupacionalesController::store($historiaMedica, $request);
            ReubicacionesController::store($historiaMedica, $request);
            RestriccionesORecomendacionesDeAntController::store($historiaMedica, $request);

            // * Sección 2 - Hábitos, Inmunizaciones y Revisión
            HabitosYEstilosController::store($historiaMedica, $request);
            InmunizacionesController::store($historiaMedica, $request);
            RevisionPorSistemasController::store($historiaMedica, $request);

            // * Sección 3 - Examen Físico
            ExamenFisicoController::store($historiaMedica, $request);
            ExamenFisicoGeneralController::store($historiaMedica, $request);

            // * Sección 4 - Evaluaciones
            EvaluacionOsteomuscularController::store($historiaMedica, $request);
            EvaluacionDeColumnaController::store($historiaMedica, $request);

            // * Sección 5 - Exámenes y Diagnósticos
            ExamenesDeLaboratorioController::store($historiaMedica, $request);
            AyudasDiagnosticasController::store($historiaMedica, $request);
            ImpresionDiagnosticaController::store($historiaMedica, $request);
            ConceptoMedicoController::store($historiaMedica, $request);

            // * Sección 6 - Recomendaciones y Firma
            RestriccionesORecomendacionesController::store($historiaMedica, $request);
            ConductasYRecomendacionesController::store($historiaMedica, $request);
            ObservacionesController::store($historiaMedica, $request);

            session()->flash('success', 'saved');
            return back();
        }else{
            session()->flash('error', 'ya existe');
            return back();
        }
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
