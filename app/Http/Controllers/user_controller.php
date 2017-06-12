<?php

namespace App\Http\Controllers;

use App\user_model;
use Request;


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

    public function getUser()
    {
        $username = request('username');
        $getUser = user_model::where('username',$username)->get();
        if(!isset($getUser[0])) {
            $status = false;
            return view('/login',compact('status'));
        }
        else {
            $status = true;
            return view('/login',compact('status','username'));
        }
    }

    public function getPass($username)
    {
        $password = Request::input('password');
        $getData = user_model::where('username',$username)->get();
        $getPass = $getData[0]->password;
        if(password_verify($password,$getPass))
            return redirect('/'.$getData[0]->username);
        else
            return view('users.invalidauth');
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

    public function partuser($username)
    {
        $getData = user_model::where('username', $username)->get();
        if(isset($getData[0])) {
            $getUserID = $getData[0]->email;
            $getUserName = $getData[0]->username;
            $getUserCreated = $getData[0]->created_at;
            return view('users.showuser', compact('getUserID', 'getUserName', 'getUserCreated'));
        }
        else
            return view('users.404');
    }
}
