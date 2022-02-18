<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoraryMedicoController;
use App\Http\Controllers\CitasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/horary/{medico}', [HoraryMedicoController::class, 'index'])->name('horaryByMedico');
Route::get('/cita/show/{idCita}', [CitasController::class, 'show'])->name('detailsCita');

