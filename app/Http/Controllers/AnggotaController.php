<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function create (){
        return view('anggota/create_anggota');
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
        return view('anggota/index_anggota', compact('anggota'));
    }

    public function destroy(Anggota $anggota){
        $anggota->delete();
        return redirect()->back();
    }

    public function edit(Anggota $anggota){
        return view('anggota/edit_anggota', compact('anggota'));
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
        return redirect('anggota/list');
    }
}
