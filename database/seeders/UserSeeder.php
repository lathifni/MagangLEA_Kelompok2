<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            "name" => "gilang",
            "email" => "gilang@gmail.com",
            "password" => Hash::make("rahasia"),
            "role" => "admin",
            "alamat" => "labuang",
            "no_hp" => "0852074953262",
            "jenis_kelamin" => "laki-laki"

        ]);
    }
}
