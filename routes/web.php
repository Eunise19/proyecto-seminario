<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

//loginDoctores

//doctores
Route::get('/doctores', [AdminController::class, 'doctores'])
    ->name('admin.doctores.doctors');

Route::post('/doctores', [AdminController::class, 'storeDoctor'])
    ->name('medicos.store');

Route::get('/add-doctor', [AdminController::class, 'add_doctores'])
    ->name('admin.doctores.add-doctor');

Route::get('/edit-doctor', [AdminController::class, 'edit_doctores'])
    ->name('admin.doctores.edit-doctor');

//pacientes
Route::get('/pacientes', [AdminController::class, 'paciente'])
    ->name('admin.pacientes.paciente');
Route::get('/add-paciente', [AdminController::class, 'add_paciente'])
    ->name('pacientes.addpaciente');
Route::get('/edit-paciente', [AdminController::class, 'edit_paciente'])
    ->name('pacientes.edit-paciente');
Route::post('/pacientes', [AdminController::class, 'storeUsers'])
    ->name('user.store');

//servicios   
Route::get('/servicios', [AdminController::class, 'servicio'])
    ->name('servicios');
Route::get('/add-servicio', [AdminController::class, 'add_servicio'])
    ->name('add-servicios');
Route::post('/servicios', [AdminController::class, 'storeServicio'])
    ->name('servicio.store');
Route::get('/edit-servicio', [AdminController::class, 'edit_servicio'])
    ->name('edit-servicio');

//citas
Route::get('/citas', [AdminController::class, 'cita'])
    ->name('citas');
Route::get('/add-citas', [AdminController::class, 'add_cita'])
    ->name('add-citas');
Route::get('/edit-citas', [AdminController::class, 'edit_cita'])
    ->name('edit-citas');
Route::post('/citas', [AdminController::class, 'storeCita'])
    ->name('cita.store');

//historiales
Route::get('/historial', [AdminController::class, 'historial'])
    ->name('historiales');
Route::get('/add-historial', [AdminController::class, 'add_historial'])
    ->name('add-historiales');
Route::get('/historial/{historial}/edit', [AdminController::class, 'edit_historial'])
    ->name('edit-historiales');
Route::post('/historial', [AdminController::class, 'storeHistorial'])
    ->name('historial.store');
Route::put('/historiales/{historial}', 'HistorialesController@updateHistorial')->name('historiales.update');

//user page
Route::get('/users', [UsersController::class, 'users'])
    ->middleware('auth.users')
    ->name('users.index');
Route::post('/users', [UsersController::class, 'reservarCita'])
    ->name('cita.user');

