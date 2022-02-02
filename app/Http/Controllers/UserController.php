<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

}
