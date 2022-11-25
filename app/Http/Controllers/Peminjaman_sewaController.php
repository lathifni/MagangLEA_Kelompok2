<?php
namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Detail_peminjaman_sewa;
use App\Models\Peminjaman_sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Peminjaman_sewaController extends Controller
{
    public function inisiate (){
        $queryId  = DB::select("SHOW TABLE STATUS LIKE 'peminjaman_sewa'");
        $id = $queryId[0]->Auto_increment;
        return redirect()->route('peminjaman_sewa/create_g', ['id' => $id]);
    }

    public function create (Request $request){
        $anggota = Anggota::all();
        $id = $request->query('id');
        return view ('peminjaman_sewa/inisiate_peminjaman_sewa', ['anggota' => $anggota, 'id' => $id]);
    }

    public function storeCreate (Request $request) {
        $id = $request->query('id');

        $validated = $request -> validate([
            'tanggal_transaksi_pengembalian' => 'required',
            'tanggal_dikembalikan' => 'required',
            'id_anggota' => 'required'
        ]);
	    $validated["tanggal_transaksi"] = date('Y-m-d');
        $validated["status_pinjam"] = 'sedang dipinjam';
        Peminjaman_sewa::create($validated);
        return redirect()->route('index/peminjaman_sewa', ['id' => $id]);
    }

    public function index (Request $request){
        $id = $request->query('id');

        $listPinjaman = Detail_peminjaman_sewa::join("inventaris", "inventaris.id", "=", "detail_peminjaman_sewa.id_inventaris" )
                        ->where("detail_peminjaman_sewa.id", $id)
                        ->get(['inventaris.*']);

        return view('peminjaman_sewa.index_peminjaman_sewa', compact('listPinjaman'), ['id' => $id]);
    }
}