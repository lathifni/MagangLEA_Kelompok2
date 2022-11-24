<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

            
        ]);
 
        if (Auth::attempt($credentials)) {

        }
 
    }
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    // } 

    public function postlogin (Request $request)
    {
       // dd($request->all());
       if(Auth::attempt($request->only('email','password')))
       {
        return view('/inventaris/create');
       }

       return redirect('/inventaris/create');
    }
}
