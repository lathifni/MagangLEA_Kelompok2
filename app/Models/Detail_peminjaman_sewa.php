<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_peminjaman_sewa extends Model
{
    use HasFactory;
    protected $table = 'Detail_peminjaman_sewa';
    protected $guard = ['id'];
    protected $hidden = [];
    protected $fillable = ['id_inventaris ', 'denda', 'keterangan'];

    public function peminjaman_sewa(){
        return $this -> belongsTo(Peminjaman_sewa::class);
    }
}