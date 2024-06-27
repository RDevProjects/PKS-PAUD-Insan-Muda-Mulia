<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard.home');
// })->name('home')->middleware('auth');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('dashboard');
    // Route::get('/siswa', function () {
    //     return view('dashboard.siswa.index');
    // })->name('siswa');
    // Route::get('/TambahSiswa', function () {
    //     return view('dashboard.siswa.addSiswa');
    // })->name('addSiswa');
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/data', [SiswaController::class, 'getSiswa'])->name('siswa.data');
    Route::get('/siswa/add', [SiswaController::class, 'create'])->name('addSiswa');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('storeSiswa');
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('editSiswa');
    Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('updateSiswa');
    Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('deleteSiswa');
});
