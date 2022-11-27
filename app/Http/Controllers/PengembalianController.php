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

        return view('admin/index_pengembalian', compact('listPinjaman'));
    }

    public function process (Request $request){
        $id = $request->query('id');
        $pinjaman = Detail_peminjaman_sewa::join("inventaris", "inventaris.id", "=", "detail_peminjaman_sewa.id_inventaris" )
                    ->where("id_detail", $id)
                    ->get(['detail_peminjaman_sewa.*', 'inventaris.nama']);

                        return view('admin/process_pengembalian', compact('pinjaman'), ['id' => $id]);
    }

    public function process_edit (Request $request){
        $id = $request->query('id');
        $idp = $request->query('idp');

        $pinjaman = Detail_peminjaman_sewa::join("inventaris", "inventaris.id", "=", "detail_peminjaman_sewa.id_inventaris" )
                    ->where("id_detail", $id)
                    ->where('detail_peminjaman_sewa.id', $idp)
                    ->get(['detail_peminjaman_sewa.*', 'inventaris.nama']);
        // $pinjaman = DB::table('detail_peminjaman_sewa')
        //             -> where('id', $id)
        //             ->get();

        return view('admin/process_pengembalian_edit', compact('pinjaman'), ['id' => $id, 'idp' => $idp]);
    }

    public function update(Request $request){
        $id = $request->query('id');

        $validated = $request -> validate([
           'id_inventaris' => 'required',
        ]);
        $validated["id_detail"] = $id;
        $validated["denda"] = 0;
        $validated["keterangan"] = "";
        Detail_peminjaman_sewa::create($validated);
        return redirect()->route('/admin/pengembalian/list', ['id' => $id]);
     }


    public function update_detail (Request $request, Detail_peminjaman_sewa $detail_peminjaman_sewa){
        $id = $request->query('id');
        $idp = $request->query('idp');

        $validated = $request->validate([
            'keterangan'=> 'required',
        ]);
        $detail_peminjaman_sewa->update($validated);
        return redirect()->route('/admin/pengembalian', ['id' => $id]);
    }

    //staff

    public function index1 (Request $request){

        $listPinjaman = Peminjaman_sewa::join("anggota", "anggota.id", "=", "peminjaman_sewa.id_anggota" )
                        ->get(['peminjaman_sewa.*', 'anggota.nama']);

        return view('staff/index_pengembalian', compact('listPinjaman'));
    }

    public function process1 (Request $request){
        $id = $request->query('id');
        $pinjaman = Detail_peminjaman_sewa::join("inventaris", "inventaris.id", "=", "detail_peminjaman_sewa.id_inventaris" )
                    ->where("detail_peminjaman_sewa.id", $id)
                    ->get(['detail_peminjaman_sewa.*', 'inventaris.nama']);

                        return view('staff/process_pengembalian', compact('pinjaman'));
    }


}
