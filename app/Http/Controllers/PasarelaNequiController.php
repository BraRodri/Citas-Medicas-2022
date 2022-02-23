<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasarelaNequiController extends Controller
{
    public function paymentWithNequi(Request $request)
    {
        // Prueba Nequi
        // return redirect()->route('nequi.generateTokenNequi')->with('status', 'Profile updated!');
        $tokenNequi = $this->generateTokenNequi();
        if($tokenNequi){
            return $this->generateTransacctionPushNequi($tokenNequi['access_token'], $request->telefono, $request->idCita);
        }else{
            $info = [
                'title' => 'failed',
                'message' => 'Error al generar Token de Nequi'
            ];
            return response()->json(['info' => $info]);
        }
    }

    public function generateTokenNequi()
    {
        //  dd($request->session()->get('status'));
        $response = Http::withBasicAuth(env('NEQUI_CLIENT_ID'), env('NEQUI_CLIENT_SECRET'))->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json',
        ])->post(env('NEQUI_AUTH_URI'). '?grant_type=' . env('NEQUI_AUTH_GRANT_TYPE'));
        if($response->status() === 200){
            return $response->json();
        }else{
            return null;
        }
    }

    public function generateTransacctionPushNequi($token, $telefono, $idCita)
    {
        $body = array(
            'RequestMessage' => array(
                'RequestHeader' => array(
                    'Channel' => 'PNP04-C001',
                    'RequestDate' => Carbon::now(),
                    'MessageID' => strval(mt_rand(1000000000,9999999999)),
                    'ClientID' => env('NEQUI_CLIENT_ID'),
                    'Destination' => array(
                        'ServiceName' => 'PaymentsService',
                        'ServiceOperation' => 'unregisteredPayment',
                        'ServiceRegion' => 'C001',
                        'ServiceVersion' => '1.2.0'
                    )
                ),
                'RequestBody' => array(
                    'any' => array(
                        'unregisteredPaymentRQ' => array(
                            'phoneNumber'=> strval($telefono),
                            'code' => 'NIT_1',
                            'value' => '5000',
                            'reference1' => 'Referencia numero 1',
                            'reference2' => 'Referencia numero 2',
                            'reference3' => 'Referencia numero 3'
                        )
                    )
                )
            )
        );

        $response = Http::withToken($token)->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'x-api-key' => env('NEQUI_API_KEY')
        ])->post(env('NEQUI_API_BASE_PATH') . '/payments/v2/-services-paymentservice-unregisteredpayment', $body);

        if($response->status() === 200){
            if($response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusCode'] === "0"){
                $message = $response->json()['ResponseMessage']['ResponseBody']['any']['unregisteredPaymentRS']['transactionId'];
                $info = [
                    'title' => 'success',
                    'message' => $message
                ];
                return response()->json(['info' => $info]);
            }else{
                // Return error validation of Nequi
                $message = $response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusDesc'];
                $info = [
                    'title' => 'errornequi',
                    'message' => $message
                ];
                return response()->json(['info' => $info]);
            }
        }else{
            $info = [
                'title' => 'failed',
                'message' => 'Error al generar la transacción de Nequi'
            ];
            return response()->json(['info' => $info]);
        }
    }

    public function getStatusPaymentNequi($cita, $transactionIdNequi)
    {
        $tokenNequi = $this->generateTokenNequi();
        if($tokenNequi){
            $body = array(
                'RequestMessage' => array(
                    'RequestHeader' => array(
                        'Channel' => 'PNP04-C001',
                        'RequestDate' => Carbon::now(),
                        'MessageID' => strval(mt_rand(1000000000,9999999999)),
                        'ClientID' => env('NEQUI_CLIENT_ID'),
                        'Destination' => array(
                            'ServiceName' => 'PaymentsService',
                            'ServiceOperation' => 'getStatusPayment',
                            'ServiceRegion' => 'C001',
                            'ServiceVersion' => '1.0.0'
                        )
                    ),
                    'RequestBody' => array(
                        'any' => array(
                            'getStatusPaymentRQ' => array(
                                'codeQR' => $transactionIdNequi
                            )
                        )
                    )
                )
            );

            $response = Http::withToken($tokenNequi['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'x-api-key' => env('NEQUI_API_KEY')
            ])->post(env('NEQUI_API_BASE_PATH') . '/payments/v2/-services-paymentservice-getstatuspayment', $body);

            if($response->status() === 200){
                if($response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusCode'] === "0"){
                    $statusPaymentNequi = $response->json()['ResponseMessage']['ResponseBody']['any']['getStatusPaymentRS']['status'];
                    if($statusPaymentNequi === "33"){
                        // Payment Pendeint
                        $info = [
                            'title' => 'errornequi',
                            'message' => 'Pago Pendiente'
                        ];
                        return response()->json(['info' => $info]);
                    }else if($statusPaymentNequi === "35"){
                        // Payment Success
                        $this->updateBdWithPayment($cita);
                        $info = [
                            'title' => 'success',
                            'message' => 'Pago exitoso'
                        ];
                        return response()->json(['info' => $info]);
                    };
                }else{
                    // Return error validation of Nequi
                    $message = $response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusDesc'];
                    $info = [
                        'title' => 'errornequi',
                        'message' => $message
                    ];
                    return response()->json(['info' => $info]);
                }
            }else{
                $info = [
                    'title' => 'failed',
                    'message' => 'Error al obtener el estado de la transacción Nequi'
                ];
                return response()->json(['info' => $info]);
            }
        }else{
            $info = [
                'title' => 'failed',
                'message' => 'Error al generar Token de Nequi'
            ];
            return response()->json(['info' => $info]);
        }
    }

    public function updateBdWithPayment(Cita $cita)
    {
        $cita->payed = true;
        $cita->update();
    }
}
