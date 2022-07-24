<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function respuesta(Request $request)
    {

        //dd($request);
        //valores
        $transactionState = $request->transactionState;
        $transactionId = $request->transactionId;
        $reference_pol = $request->reference_pol;
        $referenceCode = $request->referenceCode;
        $pseBank = $request->pseBank;
        $cus = $request->cus;
        $valor = $request->TX_VALUE;
        $valor_iva = $request->TX_TAX;
        $currency = $request->currency;
        $cita_id = $request->extra1;
        $entidad = $request->lapPaymentMethod;
        $polPaymentMethodType = $request->polPaymentMethodType;
        $fecha_pago = $request->processingDate;
        $descripcion_pago = $request->description;
        $numero_coutas = $request->installmentsNumber;
        $email_notificacion = $request->buyerEmail;

        //cita
        $cita = Cita::findOrFail($cita_id);

        //validar estado del pago
        $estadoTx  = '';
        $estado_cita = 1;
        if ($transactionState == 4 ) {
            $estadoTx = "Transacción aprobada";
            $estado_cita = 2;
        } else if ($transactionState == 6 ) {
            $estadoTx = "Transacción rechazada";
            $estado_cita = 3;
        } else if ($transactionState == 104 ) {
            $estadoTx = "Error";
            $estado_cita = 3;
        } else if ($transactionState == 7 ) {
            $estadoTx = "Pago pendiente";
            $estado_cita = 4;
        } else {
            $estadoTx = $request->message;
            $estado_cita = 3;
        }

        //validar metodo de pago
        $metodo_pago = '';
        if($polPaymentMethodType == 2){
            $metodo_pago = 'Tarjetas de Crédito';
        } else if($polPaymentMethodType == 4){
            $metodo_pago = 'Transferencias bancarias PSE';
        } else if($polPaymentMethodType == 5){
            $metodo_pago = 'Débitos ACH';
        } else if($polPaymentMethodType == 6){
            $metodo_pago = 'Tarjetas débito';
        } else if($polPaymentMethodType == 7){
            $metodo_pago = 'Efectivo';
        } else if($polPaymentMethodType == 8){
            $metodo_pago = 'Referencia de pago';
        } else if($polPaymentMethodType == 10){
            $metodo_pago = 'Pago en bancos';
        } else if($polPaymentMethodType == 14){
            $metodo_pago = 'Transferencias bancarias SPEI';
        }

        //guardando info del pago
        $pago = array(
            'cita_id' => $cita->id,
            'estado' => $estadoTx,
            'transaccion_id' => $transactionId,
            'referencia_venta' => $reference_pol,
            'referencia_transaccion' => $referenceCode,
            'descripcion' => $descripcion_pago,
            'metodo_pago' => $metodo_pago,
            'numero_coutas' => $numero_coutas,
            'pse_bank' => $pseBank,
            'cus_pse' => $cus,
            'valor' => $valor,
            'valor_iva' => $valor_iva,
            'moneda' => $currency,
            'entidad' => $entidad,
            'fecha_pago' => $fecha_pago,
            'email_notificacion' => $email_notificacion
        );
        $pago = Payments::create($pago);

        //actualizar cita
        $act_cita = array(
            'status' => $estado_cita
        );
        Cita::findOrFail($cita->id)->update($act_cita);

        return redirect()->route('payment.mostrarPago', [$cita->id, $pago->id]);

    }

    public function confirmacion(Request $request)
    {

        dd($request);

    }

    public function mostrarPago($cita, $pago)
    {
        $cita = Cita::findOrFail($cita);
        $pago = Payments::findOrFail($pago);

        return view('pages.panel.payments.respuesta')->with([
            'cita' => $cita,
            'pago' => $pago
        ]);
    }

}
