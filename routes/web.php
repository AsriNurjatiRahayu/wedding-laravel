<?php

use App\Http\Controllers\WoOnlyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//Woonly
Route::get('/woonly',[WoOnlyController::class,'woonly'])->name('woonly');
Route::get('/tambahwo',[WoOnlyController::class,'tambahwo'])->name('tambahwo');
Route::post('/aksi_tambah',[WoOnlyController::class,'aksi_tambah'])->name('aksi_tambah');
Route::get('/editwo/{id}', [WoOnlyController::class, 'editwo'])->name('editwo');
Route::put('/aksi_edit/{id}', [WoOnlyController::class, 'aksi_edit'])->name('aksi_edit');
Route::get('/hapuswo/{id}', [WoOnlyController::class, 'hapuswo'])->name('hapuswo');




Route::get('/kategori', function () {
    return view('klien.kategori');
});

// Route::get('/woonly', function () {
//     return view('klien.woonly');
// });

Route::get('/allin', function () {
    return view('klien.allin');
});

Route::get('/home', function () {
    return view('klien.home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/wo', function () {
    return view('admin.woonly');
});

Route::get('/registrasi', function () {
    return view('klien.registrasi');
});
