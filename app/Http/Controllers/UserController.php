<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function perfil()
    {
        return view('pages.panel.perfil');
    }

    public function actualizarPerfil(Request $request)
    {
        //dd($request);
        $error = false;
        $mensaje = '';

        //validacion
        $val_numero_documento = User::where('numero_documento', $request->numero_documento)->where('id', '<>', $request->id_usuario)->get()->count();
        if ($val_numero_documento > 0) {
            $error = true;
            $mensaje = 'Error! Ya se encuentra registrado un usuario con este numero de documento "'.$request->numero_documento.'". Intente con otro.';
        } else {

            $val_email = User::where('email', $request->email)->where('id', '<>', $request->id_usuario)->get()->count();
            if ($val_email > 0) {
                $error = true;
                $mensaje = 'Error! Ya se encuentra registrado un usuario con este correo electronico "'.$request->email.'". Intente con otro.';
            } else {

                $usuario = User::findOrFail($request->id_usuario);

                $data = array(
                    'tipo_documento' => $request->tipo_documento,
                    'numero_documento' => $request->numero_documento,
                    'nombres' => $request->nombres,
                    'fecha_nacimiento' => $request->fecha_nacimiento,
                    'genero' => $request->genero,
                    'telefono' => $request->telefono,
                    'direccion' => $request->direccion,
                    'email' => $request->email
                );

                //imagen
                if($request->hasFile('file_avatar')){
                    // busco la imagen anterior y la elimino
                    $url_anterior = str_replace('storage','public/profile', $usuario->avatar);
                    Storage::delete($url_anterior);

                    //agrego la nueva imagen
                    $image = $request->file('file_avatar')->store('public/profile');
                    $url = Storage::url($image);
                }

                if(!empty($image)){
                    $data['avatar'] = $url;
                }

                if (User::findOrFail($request->id_usuario)->update($data)){
                    $error = false;
                    $mensaje = 'Actualización Exitosa!';
                } else {
                    $error = true;
                    $mensaje = 'Error! Se presento un problema al actualizar datos, intenta de nuevo.';
                }

            }

        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function actualizarPassword(Request $request)
    {
        $error = false;
        $mensaje = '';

        $user = User::findOrFail($request->id_usuario);
        if(Hash::check($request->password, $user->password)){

            $pass_1 = $request->newpassword;
            $pass_2 = $request->renewpassword;
            if ($pass_1 != $pass_2) {
                $error = true;
                $mensaje = 'Error! Los Contraseñas registradas no son iguales.';
            } else {

                $data = array(
                    'password' => bcrypt($pass_1)
                );

                if(User::findOrFail($user->id)->update($data)){
                    $error = false;
                    $mensaje = 'Actualización Exitosa!';
                } else {
                    $error = true;
                    $mensaje = 'Error! Se presento un problema al actualizar la contraseña, intenta de nuevo.';
                }

            }

        } else {
            $error = true;
            $mensaje = 'Error!, la contraseña actual digitada no coindice con nuestra base de datos!';
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function actualizarFirma(Request $request)
    {
        $error = false;
        $mensaje = '';

        $user = User::findOrFail($request->id_usuario);

        //imagen
        if($request->hasFile('file_firma')){
            // busco la imagen anterior y la elimino
            $url_anterior = str_replace('storage','public/firmas', $user->firma);
            Storage::delete($url_anterior);

            //agrego la nueva imagen
            $image = $request->file('file_firma')->store('public/firmas');
            $url = Storage::url($image);
        }

        $data = array();

        if(!empty($image)){
            $data['firma'] = $url;
        }

        if(User::findOrFail($user->id)->update($data)){
            $error = false;
            $mensaje = 'Actualización Exitosa!';
        } else {
            $error = true;
            $mensaje = 'Error! Se presento un problema al actualizar la contraseña, intenta de nuevo.';
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function usuarios()
    {
        $usuarios_registrados = User::all()->count();
        $usuarios_activos = User::where('active', 1)->count();
        $usuarios_inactivos = User::where('active', 0)->count();
        return view('pages.panel.usuarios.index')->with([
            'usuarios_registrados' => $usuarios_registrados,
            'usuarios_activos' => $usuarios_activos,
            'usuarios_inactivos' => $usuarios_inactivos
        ]);
    }

    public function getUsuarios()
    {
        $data = array();
        $usuarios = User::all();
        foreach ($usuarios as $key => $value) {

            $class_status = ($value->active == 1)? "success" : "danger";
            $text_status = ($value->active == 1)? "Activo" : "Inactivo";

            $ruta_editar = route('usuarios.editar', $value->id);

            $info = [
                $value->id,
                $value->roles[0]->name,
                $value->numero_documento,
                $value->nombres,
                '<span class="badge bg-' . $class_status . '">' . $text_status . '</span>',
                date("Y-m-d H:m", strtotime($value->created_at)),
                '
                <a href="'.$ruta_editar.'" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                <button type="button" class="btn btn-danger" onclick="eliminarUsuario('.$value->id.');"><i class="bi bi-trash"></i></button>
                '
            ];

            $data[] = $info;

        }

        echo json_encode([
            'data' => $data
        ]);
    }

    public function crearUsuarios()
    {
        $departamentos_array = array();
        $departamentos = null;
        $response = file_get_contents('asset/json/ciudades.json');
        $respuesta = json_decode($response, true);
        foreach ($respuesta as $key => $value) {
            $departamentos_array[] = $value['departamento'];
        }
        $departamentos = array_unique($departamentos_array);

        $roles = Role::all();

        return view('pages.panel.usuarios.create')->with([
            'departamentos' => $departamentos,
            'roles' => $roles
        ]);
    }

    public function insertarUsuarios(Request $request)
    {
        $error = false;
        $mensaje = '';

        //validacion
        $val_numero_documento = User::where('numero_documento', $request->cedula)->get()->count();
        if ($val_numero_documento > 0) {
            $error = true;
            $mensaje = 'Error! Ya se encuentra registrado un paciente con este numero de documento "'.$request->cedula.'". Intente con otro.';
        } else {

            $val_email = User::where('email', $request->email)->get()->count();
            if ($val_email > 0) {
                $error = true;
                $mensaje = 'Error! Ya se encuentra registrado un paciente con este correo electronico "'.$request->email.'". Intente con otro.';
            } else {

                $tipo_usuario = $request->tipo_usuario;

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
                    'active' => 1,
                    'video_confirm' => 1,
                    'confirm_edad' => 1,
                    'avatar' => '',
                    'pais' => $request->pais,
                    'departamento' => $request->departamento,
                    'ciudad' => $request->ciudad
                );

                if($result = User::create($data)->assignRole($tipo_usuario)){
                    $id = $result->id;

                    if($tipo_usuario == 'Medico'){

                        $data_medico = array(
                            'users_id' => $id,
                            'especialidad' => $request->especialidad_medico,
                            'correo_empresarial' => $request->correo_empresarial_medico
                        );

                        if(Medico::create($data_medico)){
                            $error = false;
                             $mensaje = 'Registro Exitoso!';
                        } else {
                            $error = true;
                            $mensaje = 'Error! Se presento un problema al registrar al medico, intenta de nuevo.';
                        }

                    } else {
                        $error = false;
                        $mensaje = 'Registro Exitoso!';
                    }


                } else {
                    $error = true;
                    $mensaje = 'Error! Se presento un problema al registrar, intenta de nuevo.';
                }

            }

        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function eliminarUsuario($id)
    {
        $error = false;
        $mensaje = '';

        $user = User::findOrFail($id);

        $tipo_usuario = $user->roles[0]->name;
        switch ($tipo_usuario) {
            case 'Medico':
                Medico::where('users_id', $id)->first()->delete();
                break;
        }

        if(User::findOrFail($id)->delete()){
            $error = false;
        } else {
            $error = true;
            $mensaje = 'Error! Se presento un problema al registrar, intenta de nuevo.';
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function editarUsuario($id)
    {
        $departamentos_array = array();
        $departamentos = null;
        $response = file_get_contents('asset/json/ciudades.json');
        $respuesta = json_decode($response, true);
        foreach ($respuesta as $key => $value) {
            $departamentos_array[] = $value['departamento'];
        }
        $departamentos = array_unique($departamentos_array);

        $roles = Role::all();

        $usuario = User::findOrFail($id);
        $tipo_usuario = $usuario->roles[0]->name;

        return view('pages.panel.usuarios.edit')->with([
            'departamentos' => $departamentos,
            'roles' => $roles,
            'usuario' => $usuario,
            'tipo_usuario' => $tipo_usuario
        ]);
    }

    public function actualizarUsuario(Request $request)
    {
        $error = false;
        $mensaje = '';

        $usuario_actual = User::findOrFail($request->id_usuario);

        //validacion
        $val_numero_documento = User::where('numero_documento', $request->numero_documento)->where('id', '<>', $request->id_usuario)->get()->count();
        if ($val_numero_documento > 0) {
            $error = true;
            $mensaje = 'Error! Ya se encuentra registrado un usuario con este numero de documento "'.$request->numero_documento.'". Intente con otro.';
        } else {

            $val_email = User::where('email', $request->email)->where('id', '<>', $request->id_usuario)->get()->count();
            if ($val_email > 0) {
                $error = true;
                $mensaje = 'Error! Ya se encuentra registrado un usuario con este correo electronico "'.$request->email.'". Intente con otro.';
            } else {

                $tipo_usuario = $request->tipo_usuario;

                $data = array(
                    'tipo_documento' => $request->tipo_documento,
                    'numero_documento' => $request->cedula,
                    'nombres' => $request->nombres,
                    'fecha_nacimiento' => $request->fecha_nacimiento,
                    'genero' => $request->genero,
                    'telefono' => $request->telefono,
                    'direccion' => $request->direccion,
                    'email' => $request->email,
                    'active' => $request->estado,
                    'pais' => $request->pais,
                    'departamento' => $request->departamento,
                    'ciudad' => $request->ciudad
                );

                if($request->password){
                    $data['password'] = bcrypt($request->password);
                }

                if($resultado = User::findOrFail($request->id_usuario)->update($data)){

                    //remover rol
                    User::findOrFail($request->id_usuario)->removeRole($usuario_actual->roles[0]->name);

                    //asignar nuevo rol
                    User::findOrFail($request->id_usuario)->assignRole($tipo_usuario);

                    if($tipo_usuario == 'Medico'){

                        $data_medico = array(
                            'users_id' => $request->id_usuario,
                            'especialidad' => $request->especialidad_medico,
                            'correo_empresarial' => $request->correo_empresarial_medico
                        );

                        $validar_medico = Medico::where('users_id', $request->id_usuario)->first();
                        if($validar_medico){
                            if(Medico::findOrFail($validar_medico->id)->update($data_medico)){
                                $error = false;
                                $mensaje = 'Actualización Exitosa!';
                            } else {
                                $error = true;
                                $mensaje = 'Error! Se presento un problema al actualizar al medico, intenta de nuevo.';
                            }
                        } else {
                            if(Medico::create($data_medico)){
                                $error = false;
                                $mensaje = 'Creación Exitosa!';
                            } else {
                                $error = true;
                                $mensaje = 'Error! Se presento un problema al crear al medico, intenta de nuevo.';
                            }
                        }

                    } else {
                        $error = false;
                        $mensaje = 'Actualización Exitosa!';
                    }


                } else {
                    $error = true;
                    $mensaje = 'Error! Se presento un problema al actualizar, intenta de nuevo.';
                }

            }

        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje));
    }

    public function userLoggedApi(Cita $cita)
    {
        try {
            return response()->json([
                'status' => 200,
                'user' => $cita->paciente->usuario
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
            ]);
        }
    }
}
