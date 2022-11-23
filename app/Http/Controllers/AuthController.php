<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login()
    // {
    //     return view("auth.login");
    // }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('welcome');
    //     }
 
    //     return back();
    // }
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
        return redirect('create_inventaris');
       }

       return redirect('login');
    }
}
