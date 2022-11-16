<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjaman_sewa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_anggota')->required();
            $table->foreign('id_anggota')->references('id')->on('anggota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman_sewa', function (Blueprint $table) {
            $table->dropColumn('id_anggota');
        });
    }
};
