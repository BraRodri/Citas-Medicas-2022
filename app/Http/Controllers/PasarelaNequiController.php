<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasarelaNequiController extends Controller
{
    // Prueba Nequi
    // return redirect()->route('nequi.generateTokenNequi')->with('status', 'Profile updated!');
    /* $tokenNequi = $this->generateTokenNequi();
    $transactionIdNequi = $this->generateTransacctionPushNequi($tokenNequi['access_token']);
    //Get status payment
    $statusPaymentNequi = $this->getStatusPaymentNequi($transactionIdNequi, $tokenNequi['access_token']);
    if($statusPaymentNequi === "33"){
        // Payment Pendeint
        dd("Pago Pendiente");
    }else if($statusPaymentNequi === "35"){
        // Payment Success
        dd("Pago exitoso");
    }; */

    public function generateTokenNequi(Request $request)
    {
        //  dd($request->session()->get('status'));
        $response = Http::withBasicAuth(env('NEQUI_CLIENT_ID'), env('NEQUI_CLIENT_SECRET'))->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json',
        ])->post(env('NEQUI_AUTH_URI'). '?grant_type=' . env('NEQUI_AUTH_GRANT_TYPE'));
        if($response->status() === 200){
            return $response->json();
        }else{
            dd("ocurrio un error en la autenticacion de nequi");
        }
    }

    public function generateTransacctionPushNequi($token)
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
                            'phoneNumber'=> '3998764643',
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
                return $response->json()['ResponseMessage']['ResponseBody']['any']['unregisteredPaymentRS']['transactionId'];
            }else{
                // Return error validation of Nequi
                dd($response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusDesc']);
            }
        }else{
            dd("erro al realizar la transaccion por nequi");
        }
    }

    public function getStatusPaymentNequi($transactionIdNequi, $token)
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

        $response = Http::withToken($token)->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'x-api-key' => env('NEQUI_API_KEY')
        ])->post(env('NEQUI_API_BASE_PATH') . '/payments/v2/-services-paymentservice-getstatuspayment', $body);

        if($response->status() === 200){
            if($response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusCode'] === "0"){
                return $response->json()['ResponseMessage']['ResponseBody']['any']['getStatusPaymentRS']['status'];
            }else{
                // Return error validation of Nequi
                dd($response->json()['ResponseMessage']['ResponseHeader']['Status']['StatusDesc']);
            }
        }else{
            dd("erro al realizar la transaccion por nequi");
        }
    }
}
