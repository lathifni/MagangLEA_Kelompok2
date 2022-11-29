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
        ], [
            'email.required' => 'email tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/admin');
        } else {

            return redirect('login')->withErrors('email user dan password yang anda masukkan salah');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('auth.login');
    }

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
            'role' => $request->role,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin
        ];
        User::create($data);
        return redirect('/login');
    }
    public function store()
    {
        $user = User::all();
        return view('auth.index', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }

    public function edit(User $user)
    {

        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',

        ]);
        $user->update($validated);
        return redirect('/user/list');
        $id = [];
    }

    public function profile(User $user)
    {
        return view('auth.profile', compact('user'));
    }

    public function data(Request $request, User $user)
    {
        return view('auth.profile', compact('user'));
    }

    public function daftar()
    {
        return view('auth.add');
    }
    public function tambah(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin
        ];
        User::create($data);
        return redirect()->back()->with("Akun Berhasi Ditambah kan  ");
    }
    public function ganti()
    {
        return view('auth.sandi');
    }
}
