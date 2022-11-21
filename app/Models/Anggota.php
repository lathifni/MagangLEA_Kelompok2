<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'Anggota';
    protected $guard = ['id'];
    protected $hidden = [];
    protected $fillable = ['nama', 'no_hp', 'email', 'jenis_kelamin', 'alamat'];
}
