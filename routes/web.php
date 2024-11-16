<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return redirect()->route('barang_index');
// });

Route::get('/barang', [BarangController::class, 'index'])->name('barang_index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang_create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang_store');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang_edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang_update');
Route::get('/barang/show/{id}', [BarangController::class, 'show'])->name('barang_show');
Route::delete('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('barang_destroy');


Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan_index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan_create');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan_store');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan_edit');
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan_update');
Route::get('/pelanggan/show{id}', [PelangganController::class, 'show'])->name('pelanggan_show');
Route::delete('/pelanggan/destroy{id}', [PelangganController::class, 'destroy'])->name('pelanggan_destroy');
