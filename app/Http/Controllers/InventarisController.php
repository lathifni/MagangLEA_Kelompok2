<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function create (){
        return view('/admin/create_inventaris');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'harga'=> 'required',
            'kategori'=> 'required',
            'status'=> 'required',
            'tersedia'=> 'required',
        ]);
        Inventaris::create($validated);
        return redirect()->back();
    }

    public function index(){
        $inventaris = Inventaris::all();
        return view('/admin/index_inventaris', compact('inventaris'));
    }

    public function destroy(Inventaris $inventaris){
        $inventaris->delete();
        return redirect()->back();
    }

    public function edit(Inventaris $inventaris){
        return view('/admin/edit_inventaris', compact('inventaris'));
    }

    public function update(Request $request, Inventaris $inventaris){
        $validated = $request->validate([
            'nama'=> 'required || max:50',
            'harga'=> 'required',
            'kategori'=> 'required',
            'status'=> 'required',
            'tersedia'=> 'required',
        ]);
        $inventaris->update($validated);
        return redirect('inventaris/list');
    }
}
