<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Detail_peminjaman_sewa;
use App\Models\Peminjaman_sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    public function index (Request $request){

        $listPinjaman = Peminjaman_sewa::join("anggota", "anggota.id", "=", "peminjaman_sewa.id_anggota" )
                        ->get(['peminjaman_sewa.*', 'anggota.nama']);

        return view('pengembalian/index_pengembalian', compact('listPinjaman'));
    }

    public function process (Request $request){
        $id = $request->query('id');

        return view('pengembalian/process_pengembalian', ['id' => $id]);
    }
}
