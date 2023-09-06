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

Route::get('/doctor', [AdminController::class, 'doctor'])
->name('admin.doctores.doctors');

Route::get('/addoctor', [AdminController::class, 'addoctor'])
->name('admin.doctores.adddoctor');

Route::get('/pacientes', [AdminController::class, 'pacientes'])
->name('admin.pacientes.pacients');

Route::get('/addpaciente', [AdminController::class, 'addpacientes'])
->name('admin.pacientes.add-pacient');

Route::get('/servicio', [AdminController::class, 'servicios'])
->name('admin.servicios.service');

Route::get('/addservicio', [AdminController::class, 'addservicios'])
->name('admin.servicios.add-service');

Route::get('/cita', [AdminController::class, 'citas'])
->name('admin.citas.cita');

Route::get('/addcita', [AdminController::class, 'addcitas'])
->name('admin.citas.add-cita');

Route::get('/users', [UsersController::class, 'users'])
->middleware('auth.users')
->name('users.index');


