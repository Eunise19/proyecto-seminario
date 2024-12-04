<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medico;
use App\Models\Servicio;
use App\Models\Cita;
use App\Models\Historial;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index() {
        $numMedicos = Medico::count();
        $numPacientes = User::count();
        $numHistoriales = Historial::count();
        $citas = Cita::all();
        return view ('admin.index', compact('numMedicos', 'numPacientes', 'numHistoriales', 'citas'));
    }
    /////////////////doctores
    public function doctores() {
        $medicos = Medico::all();
        return view ('admin.doctores.doctors', ['medicos' => $medicos]);
    }
    public function add_doctores() {
        return view ('admin.doctores.add-doctor');
    }
    public function storeDoctor(Request $request) {
        $request->validate([
            'nombre_apellido' => 'required',
            'ci' => 'required|string',
            'correo' => 'required|email',
            'telefono' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Crear una nueva instancia de Medico y asignar valores
        $medico = new Medico();
        $medico->nombre_apellido = $request->input('nombre_apellido');
        $medico->ci = $request->input('ci');
        $medico->correo = $request->input('correo');
        $medico->telefono = $request->input('telefono');
        $medico->password = Hash::make($request->input('password')); // Hashear la contraseña

        // Guardar el médico en la base de datos
        $medico->save();

        // Redireccionar a la lista de doctores o a donde desees
        return redirect()->route('admin.doctores.doctors');
    }

    public function edit_doctores() {
        return view ('admin.doctores.edit-doctor');
    }

    ////////// pacientes
    public function paciente() {
        //$users = User::all(); // Obtener todos los usuarios excluyendo los administradores
        $users = User::whereNull('role')->get();
        
        return view ('admin.pacientes.paciente', compact('users'));
    }
    public function add_paciente() {
        $users = User::all();
        return view ('admin.pacientes.add-paciente', ['users' => $users]);
    }
    public function edit_paciente() {
        return view ('admin.pacientes.edit-paciente');
    }
    public function storeUsers(Request $request) {
        $this->validate(request(),[
            'name' => 'required',
            'alergia' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'password' => 'required|confirmed'
        ]);

        $users = new User();
        $users->name = $request->input('name');
        $users->alergia = $request->input('alergia');
        $users->email = $request->input('email');
        $users->telefono = $request->input('telefono');
        $users->fecha_nacimiento = $request->date('fecha_nacimiento');
        $users->password = Hash::make($request->input('password'));
     
        // Guardar el paciente en la base de datos
        $users->save();
        // Redireccionar a la lista de pacientes o a donde desees
        return redirect()->route('admin.pacientes.paciente');
    }

    /////////////servicios
    public function servicio(){
        $servicios = Servicio::all();
        return view ('admin.servicios.servicio', ['servicios'=>$servicios]);
    }
    public function add_servicio(){
        return view ('admin.servicios.add-servicio');
    }
    public function edit_servicio() {
        return view ('admin.servicios.edit-servicio');
    }
    public function storeServicio(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'costo' => 'required',
        ]);

        // Crear un nuevo servicio
        $servicio = new Servicio();
        $servicio->nombre = $request->input('nombre');
        $servicio->descripcion = $request->input('descripcion');
        $servicio->costo = $request->input('costo');

        // Guardar el servicio en la base de datos
        $servicio->save();

        // Redirigir a la lista de servicios o a donde desees
        return redirect()->route('servicios');
    }

    ////////////citas
    public function cita(){
        $citas = Cita::all();
        return view ('admin.citas.cita', ['citas'=>$citas]);
    }
    public function add_cita(){
        $servicios = Servicio::all();
        $medicos = Medico::all();
        $users = User::whereNull('role')->get();
        return view ('admin.citas.add-cita', ['servicios'=>$servicios, 'medicos'=>$medicos, 'users'=>$users]);
    }
    public function edit_cita(){
        return view ('admin.citas.edit-cita');
    }
    public function storeCita(Request $request){
        // Validar los datos del formulario
        $request->validate([
            'id_pacientes' => 'required|exists:users,id',
            'id_medicos' => 'required|exists:medicos,id',
            'id_servicios' => 'required|exists:servicios,id',
            'fecha' => 'required|date',
            
        ]);

        // Crear una nueva cita y asignar valores
        $cita = new Cita();
        $cita->id_pacientes = $request->input('id_pacientes');
        $cita->id_medicos = $request->input('id_medicos');
        $cita->id_servicios = $request->input('id_servicios');
        $cita->fecha = $request->input('fecha');
        

        // Guardar la cita en la base de datos
        $cita->save();

        // Redirigir a la lista de citas o a donde desees
        return redirect()->route('citas');
    }

    ///////// historial
    public function historial(){
        $historiales = Historial::all();
        return view ('admin.historiales.historial', ['historiales'=>$historiales]);
    }
    public function add_historial(){
        $servicios = Servicio::all();
        $medicos = Medico::all();
        $users = User::whereNull('role')->get();
        return view ('admin.historiales.add-historial', ['servicios'=>$servicios, 'medicos'=>$medicos, 'users'=>$users]);
    }
    public function storeHistorial(Request $request){
        // Validar los datos del formulario
        $request->validate([
            'id_pacientes' => 'required|exists:users,id',
            'id_medicos' => 'required|exists:medicos,id',
            'id_servicios' => 'required|exists:servicios,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
        ]);

        // Crear una nueva historial y asignar valores
        $historial = new Historial();
        $historial->id_pacientes = $request->input('id_pacientes');
        $historial->id_medicos = $request->input('id_medicos');
        $historial->id_servicios = $request->input('id_servicios');
        $historial->fecha = $request->input('fecha');
        $historial->descripcion = $request->input('descripcion');

        // Guardar la $historial en la base de datos
        $historial->save();

        // Redirigir a la lista de citas o a donde desees
        return redirect()->route('historiales');
    }
    public function updateHistorial(Request $request, Historial $historial){
        $request->validate([
            'id_pacientes' => 'required|exists:users,id',
            'id_medicos' => 'required|exists:medicos,id',
            'id_servicios' => 'required|exists:servicios,id',
            'fecha' => 'required|date',
            'descripcion' => 'required|string',
        ]);

        $historial->update($request->all());

        return redirect()->route('historiales')->with('success', 'Historial médico actualizado exitosamente');
    }

    public function edit_historial(Historial $historial){
        $medicos = Medico::all();
        $pacientes = User::all();
        $servicios = Servicio::all();
        return view ('admin.historiales.edit-historial', compact('historial', 'medicos', 'pacientes', 'servicios'));
    } 

}

