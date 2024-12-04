<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use Illuminate\Support\Facades\Auth;

class MedicoController extends Controller
{
    public function createDoctor()
    {
        return view('auth.login');
    }

    public function storeMedico(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('medico')->attempt($credentials)) {
            return redirect()->route('medico.dashboard'); // Cambia esto por la ruta adecuada para los médicos
        } else {
            return back()->withErrors([
                'message' => 'Correo o contraseña incorrectos',
            ]);
        }
    }

    public function destroy()
    {
        Auth::guard('medico')->logout();
        return redirect()->to('/');
    }
}

