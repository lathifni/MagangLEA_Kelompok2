<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Peminjaman_sewaController;
use App\Http\Controllers\Detail_peminjaman_sewaController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/inventaris/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class], 'logout');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/inventaris/register', [AuthController::class, 'create']);

Route::middleware("auth")->group(function () {


    Route::get('/inventaris/create', [InventarisController::class, 'create']);
    Route::post('/inventaris', [InventarisController::class, 'store']);
    Route::get('/inventaris/list', [InventarisController::class, 'index']);
    Route::get('/inventaris/data', [InventarisController::class, 'index2']);
    Route::get('inventaris/{inventaris}/delete', [InventarisController::class, 'destroy']);
    Route::put('/inventaris/{inventaris}', [InventarisController::class, 'update']);
    Route::get('/inventaris/{inventaris}/edit', [InventarisController::class, 'edit']);

    Route::get('/admin/anggota/create', [AnggotaController::class, 'create']);
    Route::post('/admin/anggota', [AnggotaController::class, 'member']);
    Route::get('/admin/anggota/list', [AnggotaController::class, 'index']);
    Route::get('/admin/anggota/{anggota}/delete', [AnggotaController::class, 'destroy']);
    Route::put('/admin/anggota/{anggota}', [AnggotaController::class, 'update']);
    Route::get('/admin/anggota/{anggota}/edit', [AnggotaController::class, 'edit']);

    Route::get('/staff/anggota/create', [AnggotaController::class, 'create1']);
    Route::post('/staff/anggota', [AnggotaController::class, 'member1']);
    Route::get('/staff/anggota/list', [AnggotaController::class, 'index1']);
    Route::get('/staff/anggota/{anggota}/delete', [AnggotaController::class, 'destroy1']);
    Route::put('/staff/anggota/{anggota}', [AnggotaController::class, 'update1']);
    Route::get('/staff/anggota/{anggota}/edit', [AnggotaController::class, 'edit1']);

    Route::get('/admin/admin', [AdminController::class, 'create']);
    Route::get('/staff/staff', [StaffController::class, 'create']);


    //Route staff peminjaman sewa
    Route::get('/staff/peminjaman_sewa', [Peminjaman_sewaController::class, 'inisiate1']);
    Route::get('/staff/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'create1'])->name('/staff/peminjaman_sewa/create_g');
    Route::post('/staff/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'storeCreate1'])->name('/staff/peminjaman_sewa/create_p');
    Route::get('/staff/index/peminjaman_sewa', [Peminjaman_sewaController::class, 'index1'])->name('/staff/index/peminjaman_sewa');

    route::get('/staff/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create1'])->name('/staff/detail_peminjaman_sewa/create_g');
    route::post('/staff/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store1'])->name('/staff/detail_peminjaman_sewa/create_p');

    route::get('/staff/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create1'])->name('/staff/detail_peminjaman_sewa/create_g');
    route::post('/staff/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store1'])->name('/staff/detail_peminjaman_sewa/create_p');


    //pengembalian bag admin
    Route::get('/admin/pengembalian/list', [PengembalianController::class, 'index']);
    Route::get('/admin/pengembalian', [PengembalianController::class, 'process'])->name('/admin/pengembalian');
    Route::get('/admin/pengembalian/edit', [PengembalianController::class, 'process_edit']);
    Route::post('/admin/pengembalian/edit_status', [PengembalianController::class, 'update_detail']);
    Route::post('/admin/pengembalian/list', [PengembalianController::class, 'update']);


    //pengembalian bag staff
    Route::get('/staff/pengembalian/list', [PengembalianController::class, 'index1']);
    Route::get('/staff/pengembalian', [PengembalianController::class, 'process1'])->name('/staff/pengembalian');
    Route::get('/staff/pengembalian/edit', [PengembalianController::class, 'process_edit1']);
    Route::post('/staff/pengembalian/edit_status', [PengembalianController::class, 'update_detail1']);
    Route::post('/staff/pengembalian/list', [PengembalianController::class, 'update1']);


    //user
    Route::get('/user/list', [AuthController::class,  'store']);
    Route::get('/user/{user}/delete', [AuthController::class, 'destroy']);
    Route::put('/user/{user}', [AuthController::class, 'update']);
    Route::get('/user/{user}/edit', [AuthController::class, 'edit']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::put('/profile/{user}',[AuthController::class,'data']);
    Route::get('/tambah', [AuthController::class, 'daftar']);
    Route::post('/user/tambah', [AuthController::class, 'tambah']);

});
 //admin pinjamsewa
    Route::get('/admin/peminjaman_sewa', [Peminjaman_sewaController::class, 'inisiate']);
    Route::get('/admin/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'create'])->name('/admin/peminjaman_sewa/create_g');
    Route::post('/admin/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'storeCreate'])->name('/admin/peminjaman_sewa/create_p');
    Route::get('/admin/index/peminjaman_sewa', [Peminjaman_sewaController::class, 'index'])->name('/admin/index/peminjaman_sewa');

    route::get('/admin/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create'])->name('/admin/detail_peminjaman_sewa/create_g');
    route::post('/admin/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store'])->name('/admin/detail_peminjaman_sewa/create_p');

    route::get('/admin/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create'])->name('/admin/detail_peminjaman_sewa/create_g');
    route::post('/admin/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store'])->name('/admin/detail_peminjaman_sewa/create_p');
