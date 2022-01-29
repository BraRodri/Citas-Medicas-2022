<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

//registro
Route::post('/validar-registro', [RegisterController::class, 'registar'])->name('validar_registro');
Route::post('/validar-registro/subir-firma', [RegisterController::class, 'registarFirma'])->name('registarFirma');

//login
Route::post('/validar-login', [LoginController::class, 'login'])->name('validar_login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/panel', [PanelController::class, 'index'])->name('panel');

});
