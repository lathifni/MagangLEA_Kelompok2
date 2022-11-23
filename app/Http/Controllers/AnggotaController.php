<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    //ADMIN
    public function create (){
        return view('admin/create_anggota');
    }

    public function member(Request $request){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'no_hp'=> 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required',
        ]);
        Anggota::create($validated);
        return redirect()->back();
    }

    public function index(){
        $anggota = Anggota::all();
        return view('admin/index_anggota', compact('anggota'));
    }

    public function destroy(Anggota $anggota){
        $anggota->delete();
        return redirect()->back();
    }

    public function edit(Anggota $anggota){
        return view('admin/edit_anggota', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'no_hp'=> 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required',
        ]);
        $anggota->update($validated);
        return redirect('/admin/anggota/list');
    }

//STAFF
    public function create1 (){
        return view('staff/create_anggota');
    }

    public function member1(Request $request){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'no_hp'=> 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required',
        ]);
        Anggota::create($validated);
        return redirect()->back();
    }

    public function index1(){
        $anggota = Anggota::all();
        return view('staff/index_anggota', compact('anggota'));
    }

    public function destroy1(Anggota $anggota){
        $anggota->delete();
        return redirect()->back();
    }

    public function edit1(Anggota $anggota){
        return view('staff/edit_anggota', compact('anggota'));
    }

    public function update1(Request $request, Anggota $anggota){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'no_hp'=> 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required',
            'alamat'=> 'required',
        ]);
        $anggota->update1($validated);
        return redirect('/staff/anggota/list');
    }
}
