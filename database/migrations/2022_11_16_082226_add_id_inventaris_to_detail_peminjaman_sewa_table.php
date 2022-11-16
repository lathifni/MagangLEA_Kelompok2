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
        Schema::table('detail_peminjaman_sewa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_inventaris')->required()->after('id');
            $table->foreign('id_inventaris')->references('id')->on('inventaris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_peminjaman_sewa', function (Blueprint $table) {
            $table->dropColumn('id_inventaris');
        });
    }
};
