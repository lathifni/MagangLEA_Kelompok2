<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Peminjaman_sewaController;
use App\Http\Controllers\Detail_peminjaman_sewaController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/inventaris/login', [AuthController::class, 'authenticate']);
// Route::logout('/logout', [AuthController::class], 'logout');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/inventaris/register', [AuthController::class, 'create']);

Route::middleware('auth')->group(function () {
    
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

    Route::get('/peminjaman_sewa', [Peminjaman_sewaController::class, 'inisiate']);
    Route::get('/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'create'])->name('peminjaman_sewa/create_g');
    Route::post('/peminjaman_sewa/create', [Peminjaman_sewaController::class, 'storeCreate'])->name('peminjaman_sewa/create_p');
    Route::get('/index/peminjaman_sewa', [Peminjaman_sewaController::class, 'index'])->name('index/peminjaman_sewa');

    route::get('/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create'])->name('detail_peminjaman_sewa/create_g');
    route::post('/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store'])->name('detail_peminjaman_sewa/create_p');

    route::get('/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'create'])->name('detail_peminjaman_sewa/create_g');
    route::post('/detail_peminjaman_sewa/create', [Detail_peminjaman_sewaController::class, 'store'])->name('detail_peminjaman_sewa/create_p');
});
