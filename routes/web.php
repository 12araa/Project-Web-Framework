<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', function(){
    return redirect()->route('barang_index');
});

Route::get('/barang', [BarangController::class, 'index'])->name('barang_index');

Route::get('/barang/create', [BarangController::class, 'create'])->name('barang_create');

Route::post('/barang/store', [BarangController::class, 'store'])->name('barang_store');

Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang_edit');

Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang_update');

Route::get('/barang/show/{id}', [BarangController::class, 'show'])->name('barang_show');

Route::delete('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('barang_destroy');

