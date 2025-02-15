<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function register()
    {
        return View('user.register');
    }

    public function handleRegister(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ]);
        User::create(
            [
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>Hash::make($data['password'])
            ]
            );
            return View('user.login');
    }

    public function login()
    {
        return View('user.login');
    }

    public function handleLogin(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (!Auth::attempt($data))
        {
            return back()->withErrors([
                'email'=>'The provided credentails are incorrect',
            ])->withInput($request->only('email'));
        }
         return View ('app');
    }

    public function logout()
    {
        Auth::logout();
        return View('app');
    }

}
