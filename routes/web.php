<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/sekolahs', function () {
    return view('sekolahs.index');
});

Route::get('/sekolahs', [SekolahController::class, 'index'])->name('sekolahs.index');
Route::get('/sekolahs/tambah',[SekolahController::class, 'tambah'])->name('sekolahs.tambah');
Route::post('/sekolahs',[SekolahController::class, 'store'])->name('sekolahs.store');
Route::get('/sekolahs/{id}/edit',[SekolahController::class, 'edit'])->name('sekolahs.edit');
Route::put('/sekolahs{id}',[SekolahController::class, 'update'])->name('sekolahs.update');
Route::delete('/siswa/{id}', [SekolahController::class, 'destroy'])->name('sekolahs.destroy');

