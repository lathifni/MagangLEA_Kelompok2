<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            $request->session()->regenerate();

            return redirect()->intended('/inventaris/create');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        //====================================================================== 
        //Versi Youtube   
        //======================================================================
        // Session::flash('email', $request->email);
        // $credentials = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',

        // ]);


        // if (Auth::attempt($credentials)) {
        //     return redirect('invertaris/create');
        // } else {
        //     return view('auth.login');
        // }
        //----------------------------------------------------------------------   
    }
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     return view('auth.login');

    // } 

    public function register()
    {
        return view('auth.create');
    }

    public function create(Request $request)
    {
        Session::flash('name', $request->email);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role'


        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'
        ];
        User::create($data);


        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/inventaris/create')->with('sucsess');
        } else {
            return redirect('auth.login')->withErrors('gagal');
        }
    }
}
