<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/login', [AuthController::class, 'login']);
// Route::post('/login',[AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class], 'logout');

Route::get('/login', function(){
    return view('auth.login');
});
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');

Route::middleware("auth")->group(function(){

Route::get('/', function () {
    return view('welcome');
});


});

Route::get('/inventaris/create', [InventarisController::class, 'create']);
Route::post('/inventaris', [InventarisController::class, 'store']);
Route::get('/inventaris/list', [InventarisController::class,'index']);
Route::get('inventaris/{inventaris}/delete', [InventarisController::class, 'destroy']);
Route::put('/inventaris/{inventaris}', [InventarisController::class, 'update']);
Route::get('/inventaris/{inventaris}/edit', [InventarisController::class, 'edit']);

Route::get('/anggota/create', [AnggotaController::class, 'create']);
Route::post('/anggota', [AnggotaController::class, 'member']);
Route::get('/anggota/list', [AnggotaController::class,'index']);
Route::get('/anggota/{anggota}/delete', [AnggotaController::class, 'destroy']);
Route::put('/anggota/{anggota}', [AnggotaController::class, 'update']);
Route::get('/anggota/{anggota}/edit', [AnggotaController::class, 'edit']);

Route::get('/admin/admin', [AdminController::class, 'create']);
