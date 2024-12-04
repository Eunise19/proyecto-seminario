<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medico;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller{

        public function create(){
            return view ('auth.login');  
        }

        public function store(){
            if(auth()-> attempt(request(['email','password']))== false){
                return back()->withErrors([
                    'message'=>'Correo o contraseña incorrectos'
                ]);
            } else {
                if(auth()->user()->role == 'admin' || auth()->guard('medico')->check()){
                    return redirect()->route('admin.index');
                } else {
                    //return redirect()->route('users.index');
                    return redirect()->action([UsersController::class, 'users']);
                }
            }
        }

        public function destroy(){
            auth()->logout();
            return redirect()->to('/');
        }

}

