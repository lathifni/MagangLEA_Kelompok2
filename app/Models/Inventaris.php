<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = 'Inventaris';
    protected $guard = ['id'];
    protected $hidden = [];
    protected $fillable = ['nama', 'harga', 'kategori', 'status', 'tersedia'];
}
