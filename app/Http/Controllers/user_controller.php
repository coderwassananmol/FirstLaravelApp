<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_model;

class user_controller extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function users()
    {
        $user = new user_model;
        $user->username = request('username');
        $user->email = request('email');
        $password = password_hash(request('password'),PASSWORD_DEFAULT);
        $user->password = $password;
        $user->confpass = $password;
        $user->save();
        return view('success');
    }
}
