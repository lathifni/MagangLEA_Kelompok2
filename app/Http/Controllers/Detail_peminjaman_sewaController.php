<?php
 
namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Detail_eminjaman_sewa;
use Illuminate\Http\Request;
use App\Models\Detail_peminjaman_sewa;

 
class Peminjaman_sewaController extends Controller
{
   public function create(){
      return view('detail_peminjaman_sewa/create_detail_peminjaman_sewa');
   } 
}