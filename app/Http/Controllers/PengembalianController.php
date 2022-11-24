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
        $id = $request->query('id');

        $listPinjaman = Peminjaman_sewa::join("anggota", "anggota.id", "=", "peminjaman_sewa.id_anggota" )
                        ->get();

        return view('pengembalian/index_pengembalian', compact('listPinjaman'), ['id' => $id]);
    }


}
