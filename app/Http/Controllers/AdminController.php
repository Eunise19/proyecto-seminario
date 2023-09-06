<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function doctor(){
        return view('admin.doctores.doctors');
    
    }

    public function addoctor(){
        return view('admin.doctores.adddoctor');
    }

    public function pacientes(){
        $users = Users::whereNull('role')->get();
        return view('admin.pacientes.pacients',['users' => $users]);
    }

    public function addpacientes(){
        return view('admin.pacientes.add-pacient');
    }

    public function servicios(){
        return view('admin.servicios.service');
    }

    public function addservicios(){
        return view('admin.servicios.add-service');
    }

    public function citas(){
        return view('admin.citas.cita');
    }

    public function addcitas(){
        return view('admin.citas.add-cita');
    }

}

