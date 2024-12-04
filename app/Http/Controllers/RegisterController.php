<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    //
    public function create(){
        return view ('auth.register');    
    }
        
    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'alergia' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required',
            'password' => 'required|confirmed'
        ]);
    $user = User::create(request(['name','alergia','email','telefono','fecha_nacimiento','password']));
    auth()-> login($user);
    return redirect()->route('users.index');

    }
}

