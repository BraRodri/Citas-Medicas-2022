<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'cita_id',
        'estado',
        'transaccion_id',
        'referencia_venta',
        'referencia_transaccion',
        'descripcion',
        'metodo_pago',
        'entidad',
        'numero_coutas',
        'pse_bank',
        'cus_pse',
        'valor',
        'valor_iva',
        'moneda',
        'fecha_pago',
        'email_notificacion',
    ];
}
