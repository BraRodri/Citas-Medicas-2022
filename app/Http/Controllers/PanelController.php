<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    //
    public function index()
    {
        return view('pages.panel.panel');
    }

    public function faq()
    {
        return view('pages.panel.faq');
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
}
