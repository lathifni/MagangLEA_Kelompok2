<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
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
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout', [AuthController::class], 'logout');

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