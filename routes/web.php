<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;


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

Route::get('/databarang', [DataBarangController::class, 'index'])->name('dataBarang');

// method method

Route::get('/tambahdata', [DataBarangController::class, 'tambahdata'])->name('tambahdata');

// push ke database
Route::post('/insertdata', [DataBarangController::class, 'insertdata'])->name('insertdata');

// tampil via ID
Route::get('/tampilkandata/{id}', [DataBarangController::class, 'tampilkandata'])->name('tampilkandata');

// update data via ID, merubah sesuatu ganti (post)

Route::post('/updatedata/{id}', [DataBarangController::class, 'updatedata'])->name('updatedata');

// delete data via id
Route::get('/deletedata/{id}', [DataBarangController::class, 'deletedata'])->name('deletedata');
