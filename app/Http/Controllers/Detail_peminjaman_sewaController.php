<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Detail_peminjaman_sewa;
use App\Models\Inventaris;

class Detail_peminjaman_sewaController extends Controller
{
   public function create(Request $request){
      $inventaris = Inventaris::all();
      $id = $request->query('id');

      return view('admin/choose_inventaris', ['inventaris' => $inventaris, 'id' => $id]);
   }

   public function store(Request $request){
      $id = $request->query('id');

      $validated = $request -> validate([
         'id_inventaris' => 'required',
      ]);
      $validated["id_detail"] = $id;
      $validated["denda"] = 0;
      $validated["keterangan"] = "NULL";
      Detail_peminjaman_sewa::create($validated);
      return redirect()->route('/admin/index/peminjaman_sewa', ['id' => $id]);
   }


   //Untuk Staff

   public function create1(Request $request){
    $inventaris = Inventaris::all();
    $id = $request->query('id');

    return view('/staff/choose_inventaris', ['inventaris' => $inventaris, 'id' => $id]);
 }

 public function store1(Request $request){
    $id = $request->query('id');

    $validated = $request -> validate([
       'id_inventaris' => 'required',
    ]);
    $validated["id_detail"] = $id;
    $validated["denda"] = 0;
    $validated["keterangan"] = "NULL";
    Detail_peminjaman_sewa::create($validated);
    return redirect()->route('/staff/index/peminjaman_sewa', ['id' => $id]);
 }
}
