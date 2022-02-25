<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Medico;
use App\Models\Cita;
use App\Models\HoraryMedico;
use App\Models\Paciente;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class CitasController extends Controller
{
    public function viewAgendPaciente()
    {
        if (auth()->user()->roles[0]->name === "Medico") {
            /* Ejecutar el policy */
            $this->authorize('viewAny');
        }
        $citasByPacient = Cita::where('paciente_id', auth()->user()->paciente->id)->with('horaryMedico')->get();
        return view('pages.panel.citas.index', compact('citasByPacient'));
    }

    public function create()
    {
        if (auth()->user()->roles[0]->name === "Medico") {
            /* Ejecutar el policy */
            $this->authorize('viewAny');
        }
        /* Get all medics that have one or more disponibiliies */
        $medicsWithHorarys = Medico::has('horary')->with('usuario')->with('horary')->get();
        $medicsWithHorarysDisponibilities = [];
        foreach ($medicsWithHorarys as $medic) {
            foreach($medic->horary as $horary){
                /* Añadir unicamente los medicos que tengan disponibilidad */
                if(!$horary->cita){
                    $dateCurrent = Carbon::now();
                    if($dateCurrent < $horary->date_disponibility){
                        array_push($medicsWithHorarysDisponibilities, $medic);
                        break;
                    }
                };
            }
        }
        return view('pages.panel.citas.create', compact('medicsWithHorarysDisponibilities'));
    }

    public function store(Request $request)
    {
        try {
            $cita = Cita::create([
                'horary_medico_id' => $request->horary_medico_id,
                'paciente_id' => auth()->user()->paciente->id,
                'modality' => $request->modality,
                'payed' => false,
                'typePayment' => $request->typePaymentSelected,
                'created_at' => Carbon::now('America/Bogota')
            ]);
            $info = [
                'message' => 'created',
                'cita' => $cita
            ];
            return response()->json(['info' => $info]);
        } catch (\Exception $e) {
            $info = [
                'message' => 'failed',
                'cita' => null
            ];
            return response()->json(['info' => $info]);
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
            'medico' => Medico::with('usuario')->find($cita->horaryMedico->medico_id)
        ];

        return response()->json($infoCita);
    }

    public function validateCitaWithOtherDoctor(Request $request)
    {
        $paciente = Paciente::where('users_id', $request->auth)->first();
        $allCitas = Cita::where('paciente_id', $paciente->id)->get();
        $response = false;
        foreach ($allCitas as $cita) {
            if($cita->horaryMedico->date_disponibility === $request->dateSelected){
                $response = $cita->horaryMedico->medico->usuario->nombres;
                break;
            };
        };

        return response()->json(['info' => $response]);
    }

    public function sendEmailPayAfter(Cita $cita, Request $request)
    {
        //Code to send email
        require base_path('vendor/autoload.php');
        //Load Composer's autoloader
        $mail = new PHPMailer(true);
        try {
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Host = env('MAIL_HOST');
            $mail->Port = 465;
            $mail->IsHTML(true);
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Cita Medica', false);
            $mail->Subject = "Recordatorio de pago de cita";

            $mail->AddEmbeddedImage("images/img-pay-after.jpg", "img-pay-after"); //Controller

            $namePacient = $cita->paciente->usuario->nombres;
            if($cita->horaryMedico->medico->usuario->genero === "Femenino"){
                $nameMedic = 'la medico ' . $cita->horaryMedico->medico->usuario->nombres;
            }else{
                $nameMedic = 'el medico ' . $cita->horaryMedico->medico->usuario->nombres;
            }
            $urlServer =$request->root();
            $telephoneMedic = $cita->horaryMedico->medico->usuario->telefono;
            $mail->Body = view('pages.panel.citas.email', compact('namePacient', 'nameMedic', 'urlServer', 'telephoneMedic'))->render();
            $mail->addAddress($cita->paciente->usuario->email, $cita->paciente->usuario->nombres);
            if ($mail->Send()) {
                return response()->json([
                    'status' => 200,
                    'emailPaciente' => $cita->paciente->usuario->email
                ]);
            } else {
                return response()->json([
                    'status' => 503,
                    'emailPaciente' => $cita->paciente->usuario->email
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 500
            ]);
        }
    }

    public function notificationsPayAfter($paciente)
    {
        try {
            $citas = Cita::where('paciente_id', $paciente)->where('payed', 0)->where('typePayment', '<>', 'efectivo')->with('horaryMedico')->get();
            if(count($citas) > 0){
                foreach ($citas as $cita) {
                    $cita->medic = $cita->horaryMedico->medico->usuario;
                }
            }
            return response()->json([
                'status' => 200,
                'citas' => $citas
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500
            ]);
        }
    }
}
