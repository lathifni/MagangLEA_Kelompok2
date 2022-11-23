<?php
 
namespace App\Http\Controllers;
 
use App\Models\Peminjaman_sewa;
use Illuminate\Http\Request;
 
class Peminjaman_sewaController extends Controller
{
    public function inisiate (){
        $id_peminjaman_sewa = 1;
        $a=1;

        return redirect()->route('peminjaman_sewa/create', ['id' => $id_peminjaman_sewa]);
    }

    public function create (Request $request){
        // $peminjaman_sewa = $request -> peminjaman_sewa;
        // echo $peminjaman_sewa;
        $id = $request->query('id');
        echo $id;
        return view('peminjaman_sewa/create_peminjaman_sewa');
    }
}