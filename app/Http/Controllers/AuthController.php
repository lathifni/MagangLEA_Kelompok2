<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        ],[
            'email.required'=>'email tidak boleh kosong',
            'password.required'=>'password tidak boleh kosong'
        ]);
        

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/inventaris/create');
        }else{

        return redirect('login')->withErrors('email user dan password yang anda masukkan salah');
           
        }

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
        // $validated= $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        //     'role'=>'required',
        //     'alamat'=>'required',
        //     'no_hp'=>'required',
        //     'jenis_kelamin'=>'required',
        // ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>$request->role,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            'jenis_kelamin'=>$request->jenis_kelamin
        ];
        User::create($data);
        return redirect('/login');
    }
}
