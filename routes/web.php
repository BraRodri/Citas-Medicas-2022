<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'auth', 'prefix' => '/panel'], function () {

    //panel
    Route::controller(PanelController::class)
    ->group(function () {
        Route::get('/', 'index')->name('panel');
        Route::get('/faq', 'faq')->name('faq');
    });

    //perfil
    Route::controller(UserController::class)
    ->group(function () {
        Route::get('/mi-perfil', 'perfil')->name('mi-perfil');
        Route::post('/mi-perfil/actualizar-datos', 'actualizarPerfil')->name('actualizarPerfil');
        Route::post('/mi-perfil/actualizar-password', 'actualizarPassword')->name('actualizarPassword');
        Route::post('/mi-perfil/actualizar-firma', 'actualizarFirma')->name('actualizarFirma');
    });

    //contacto
    Route::controller(ContactoController::class)
    ->group(function () {
        Route::get('/contacto', 'index')->name('contacto');
    });

});
