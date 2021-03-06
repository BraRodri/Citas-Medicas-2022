<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasarelaNequiController;
use App\Http\Controllers\HistoriaMedicaController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
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
Route::controller(RegisterController::class)
->group(function () {
    Route::get('/registro', 'index')->name('registro');
    Route::post('/validar-registro', 'registar')->name('validar_registro');
    Route::post('/validar-registro/subir-firma', 'registarFirma')->name('registarFirma');
    Route::get('/obtener-ciudades/{departamento}', 'obtenerCiudades')->name('obtenerCiudades');
});

//login
Route::post('/validar-login', [LoginController::class, 'login'])->name('validar_login');

Route::group(['middleware' => 'auth', 'prefix' => '/panel'], function () {

    //panel
    Route::controller(PanelController::class)
    ->group(function () {
        Route::get('/', 'index')->name('panel');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/obtener-ciudades/{departamento}', 'obtenerCiudades')->name('panel.obtenerCiudades');
    });

    //gestion de usuarios
    Route::controller(UserController::class)
    ->group(function () {
        Route::get('/gestion-de-usuarios', 'usuarios')->name('usuarios');
        Route::get('/gestion-de-usuarios/obtener', 'getUsuarios')->name('usuarios.obtener');
        Route::get('/gestion-de-usuarios/crear', 'crearUsuarios')->name('usuarios.crear');
        Route::post('/gestion-de-usuarios/insertar', 'insertarUsuarios')->name('usuarios.insertar');
        Route::get('/gestion-de-usuarios/editar/{id}', 'editarUsuario')->name('usuarios.editar');
        Route::post('/gestion-de-usuarios/actualizar', 'actualizarUsuario')->name('usuarios.actualizar');
        Route::get('/gestion-de-usuarios/eliminar/{id}', 'eliminarUsuario')->name('usuarios.eliminar');
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

    //Medico - Programar disponibilidad
    Route::controller(MedicoController::class)
    ->group(function () {
        Route::get('/medico/programar-horario', 'index')->name('medico.programar_horario');
        Route::post('/medico/programar-horario', 'store')->name('medico.programar_horario_store');
        Route::put('/medico/programar-horario', 'update')->name('medico.programar_horario_update');
        Route::post('/medico/programar-horario/delete', 'destroy')->name('medico.programar_horario_destroy');
    });

    // Citas
    Route::controller(CitasController::class)
    ->group(function () {
        /* Gesti??n de citas - Paciente */
        Route::get('/citas', 'viewAgendPaciente')->name('citas');
        Route::get('/citas/create', 'create')->name('citas.create');
        Route::post('/citas', 'store')->name('citas.store');
        Route::get('/citas/ver-informacion/{id}', 'viewInformacion')->name('citas.viewInformacion');
        Route::match(['get', 'post'], '/citas/todas', 'citasFull')->name('citas.full');

        /* Gesti??n de citas - Medico */
        Route::get('/citas/medico', 'viewAgendMedico')->name('medico.viewAgend');
        Route::get('/citas/medico/view/{id}', 'viewCita')->name('medico.viewCita');
    });

    /* Pagos Nequi */
    Route::controller(PasarelaNequiController::class)
    ->group(function () {
        Route::post('/paymentWithNequi', 'paymentWithNequi')->name('nequi.paymentWithNequi');
        Route::get('/getStatusPaymentNequi/{cita}/{transactionIdNequi}', 'getStatusPaymentNequi')->name('nequi.getStatusPaymentNequi');
    });

    /* History Medical */
    Route::controller(HistoriaMedicaController::class)
    ->group(function () {
        Route::get('/historyMedical/{paciente}', 'create')->name('historiaMedica.create');
        Route::post('/historyMedical/{paciente}', 'store')->name('historiaMedica.store');
    });

    /* Payment */
    Route::controller(PaymentController::class)
    ->group(function () {
        Route::get('/payment/respuesta', 'respuesta')->name('payment.respuesta');
        Route::get('/payment/confirmacion', 'confirmacion')->name('payment.confirmacion');
        Route::get('/payment/detalles-pago/{cita}/{pago}', 'mostrarPago')->name('payment.mostrarPago');
    });
});
