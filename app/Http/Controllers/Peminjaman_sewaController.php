<?php
 
namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjaman_sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

 
class Peminjaman_sewaController extends Controller
{
    public function inisiate (){
        $id_peminjaman_sewa = 1;
        $a=1;
        

        // $id = DB::select('SELECT AUTO_INCREMENT 
        //         FROM information_schema.tables 
        //         WHERE table_name = "peminjaman_sewa"
        //         and table_schema = "inventaris"', [1]);
        $queryId  = DB::select("SHOW TABLE STATUS LIKE 'peminjaman_sewa'");
        $id = $queryId[0]->Auto_increment;
        return redirect()->route('peminjaman_sewa/create_g', ['id' => $id]);
    }

    public function create (Request $request){
        // $peminjaman_sewa = $request -> peminjaman_sewa;
        // echo $peminjaman_sewa;
        $anggota = Anggota::all();
        $id = $request->query('id');
        echo $id;
        // return view('peminjaman_sewa/create_peminjaman_sewa');
        return view ('peminjaman_sewa/inisiate_peminjaman_sewa', ['anggota' => $anggota]);
    }

    public function storeCreate (Request $request) {
        $id = $request->query('id');

        // $validated = $request -> validate([
        //     'tanggal_transaksi_pengembalian' => 'required',
        //     'tanggal_dikembalikan' => 'required',
        //     'id_anggota' => 'required'
        // ]);
	    // $validated["tanggal_transaksi"] = date('Y-m-d');
        // Peminjaman_sewa::create($validated);
        return redirect()->route('index/peminjaman_sewa', ['id' => $id]);
    }

    public function index (Request $request){
        $id = $request->query('id');

        $listPinjaman = Peminjaman_sewa::join("detail_peminjaman_sewa", "detail_peminjaman_sewa.id", "=", "peminjaman_sewa.id_anggota" )
                        ->where("peminjaman_sewa.id", "{$id}")
                        ->get(['']);

        return view('peminjaman_sewa.index_peminjaman_sewa', compact('listPinjaman'));
    }
}