<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/input_produk', [InputProdukController::class, 'input_produk'])->name('input_produk');
Route::post('/simpan_input_produk', [InputProdukController::class, 'simpan_input_produk'])->name('simpan_input_produk');

Route::get('/report_produk', [InputProdukController::class, 'report_produk'])->name('report_produk');

Route::get('/edit_produk/{id}', [InputProdukController::class, 'edit_produk'])->name('edit_produk');

Route::post('/simpan_edit_produk/{id}', [InputProdukController::class, 'simpan_edit_produk'])->name('simpan_edit_produk');

Route::get('/hapus_produk/{id}', [InputProdukController::class, 'hapus_produk'])->name('hapus_produk');