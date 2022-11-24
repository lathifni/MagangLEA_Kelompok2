<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {   
        Session ::flash('email',$request->email) ;  
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

            
        ]);
 
        if (Auth::attempt($credentials)) {
            return redirect('inventaris/create');
        }
 
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return view('auth.login');

    } 

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        return 123;
    }
}
