<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paciente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function index()
    {
        $departamentos_array = array();
        $departamentos = null;

        $response = file_get_contents('asset/json/ciudades.json');
        $respuesta = json_decode($response, true);
        foreach ($respuesta as $key => $value) {
            $departamentos_array[] = $value['departamento'];
        }
        $departamentos = array_unique($departamentos_array);

        return view('auth.register')->with([
            'departamentos' => $departamentos
        ]);
    }

    public function obtenerCiudades($departamento)
    {
        $option_locations  = '';
        $option_locations .= '<option value="">- Seleccionar -</option>';

        $response = file_get_contents('asset/json/ciudades.json');
        $respuesta = json_decode($response, true);
        foreach ($respuesta as $key => $value) {
            if($departamento == $value['departamento']){
                $option_locations .= '<option value="' . $value['municipio'] . '">' . $value['municipio'] . '</option>';
            }
        }

        echo $option_locations;
    }

    public function registar(Request $request)
    {

        $error = false;
        $mensaje = '';
        $id = '';

        //validacion
        $val_numero_documento = User::where('numero_documento', $request->cedula)->get()->count();
        if ($val_numero_documento > 0) {
            $error = true;
            $mensaje = 'Error! Ya se encuentra registrado un paciente con este numero de documento "'.$request->cedula.'". Intente con otro.';
        } else {

            $email_1 = $request->email;
            $email_2 = $request->confirmar_email;
            if ($email_1 != $email_2) {
                $error = true;
                $mensaje = 'Error! Los Correos registrados no son iguales.';
            } else {

                $pass_1 = $request->password;
                $pass_2 = $request->confirmar_password;
                if ($pass_1 != $pass_2) {
                    $error = true;
                    $mensaje = 'Error! Los Contraseñas registradas no son iguales.';
                } else {

                    $val_email = User::where('email', $request->email)->get()->count();
                    if ($val_email > 0) {
                        $error = true;
                        $mensaje = 'Error! Ya se encuentra registrado un paciente con este correo electronico "'.$request->email.'". Intente con otro.';
                    } else {

                        $data = array(
                            'tipo_documento' => $request->tipo_documento,
                            'numero_documento' => $request->cedula,
                            'nombres' => $request->nombres,
                            'fecha_nacimiento' => $request->fecha_nacimiento,
                            'genero' => $request->genero,
                            'telefono' => $request->telefono,
                            'direccion' => $request->direccion,
                            'email' => $request->email,
                            'password' => bcrypt($request->password),
                            'active' => 0,
                            'video_confirm' => 0,
                            'confirm_edad' => $request->confim_edad,
                            'avatar' => '',
                            'pais' => $request->pais,
                            'departamento' => $request->departamento,
                            'ciudad' => $request->ciudad
                        );

                        if($result = User::create($data)->assignRole('Paciente')){
                            $id = $result->id;

                            //añadir a la tabla paciente
                            $paciente = array(
                                'users_id' => $id,
                                'enfermedad' => ''
                            );
                            Paciente::create($paciente);

                            $error = false;
                            $mensaje = 'Registro Exitoso!';
                        } else {
                            $error = true;
                            $mensaje = 'Error! Se presento un problema al registrar, intenta de nuevo.';
                        }

                    }

                }

            }

        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje, 'id' => $id));
    }

    public function registarFirma(Request $request)
    {
        //dd($request);
        $id = $request->id;

        //firma
        //agrego la nueva imagen
        $image=$request->file('file')->store('public/firmas');
        $url = Storage::url($image);

        $data = array(
            'active' => 1,
            'video_confirm' => 1,
            'firma' => $url
        );

        if(User::findOrFail($id)->update($data)){
            session()->flash('error', 'success_registro');
            return redirect()->route('login');
        } else {
            session()->flash('error', 'failed');
            return redirect()->route('register');
        }
    }

}


