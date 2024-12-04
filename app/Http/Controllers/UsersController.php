<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Servicio;
use App\Models\Medico;
use App\Models\Cita;

class UsersController extends Controller{
    public function users(){
        $usuario = auth()->user();
        $servicios = Servicio::all();
        $medicos = Medico::all();
        $historiales = $usuario->historiales;
        $citas = $usuario->citas;
        return view('users.index', compact('usuario', 'historiales', 'citas', 'medicos', 'servicios'));
    }
    public function reservarCita(Request $request){
        $request->validate([
            'id_pacientes' => 'required|exists:users,id',
            'id_medicos' => 'required|exists:medicos,id',
            'id_servicios' => 'required|exists:servicios,id',
            'fecha' => 'required|date',
        ]);

        // Crear una nueva cita y asignar valores
        $cita = new Cita();
        $cita->id_pacientes = auth()->user()->id;
        $cita->id_medicos = $request->input('id_medicos');
        $cita->id_servicios = $request->input('id_servicios');
        $cita->fecha = $request->input('fecha');
        

        // Guardar la cita en la base de datos
        $cita->save();

        // Redirigir a la lista de citas o a donde desees
        return redirect()->route('users.index');
    }
    
}
