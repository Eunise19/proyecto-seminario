<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class UsersController extends Controller


    {
    public function users(){
        $users = Users::whereNull('role')->get();
        return view('users.index',['users' => $users]);
    }
}
