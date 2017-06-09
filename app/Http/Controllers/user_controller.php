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
        $this->validate(request(), ['username' => 'required|unique:user_info,username|max:20',          'email' => 'required|unique:user_info,email', 'password' => 'required']);
        $user = new user_model;
        $user->username = request('username');
        $user->email = request('email');
        $password = password_hash(request('password'),PASSWORD_DEFAULT);
        $user->password = $password;
        $user->confpass = $password;
        $user->save();
        return view('success');
    }

    public function messages()
    {
        return [
            'username.required' => 'A username is required.',
            'username.unique' => 'Username already exists.',
            'username.max' => 'Username must be atmost 20 characters.',
            'email.required' => 'An E-Mail is required.',
            'email.unique' => 'E-Mail already exists.',
            'password.required' => 'Password is required'
        ];
    }
}
