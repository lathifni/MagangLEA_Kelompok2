<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman_sewa extends Model
{
    use HasFactory;
    protected $table = 'Peminjaman_sewa';
    protected $guard = ['id'];
    protected $hidden = [];
    protected $fillable = ['tanggal_transaksi', 'tanggal_transaksi_pengembalian', 'tanggal_dikembalikan', 'id_anggota', 'status_pinjam'];

    public function detail_peminjaman_sewa(){
        return $this -> hasMany(Detail_peminjaman_sewa::class);
    }

    public function anggota(){
        return $this -> belongsTo(Anggota::class);
    }
}