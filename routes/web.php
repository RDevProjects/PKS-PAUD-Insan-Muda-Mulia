<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengumumanController;

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

    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::get('/kegiatan/data', [KegiatanController::class, 'getKegiatan'])->name('kegiatan.data');
    Route::get('/kegiatan/add', [KegiatanController::class, 'create'])->name('addKegiatan');
    Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('storeKegiatan');
    Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->name('editKegiatan');
    Route::put('/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('updateKegiatan');
    Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'destroy'])->name('deleteKegiatan');

    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('/pengumuman/data', [PengumumanController::class, 'getPengumuman'])->name('pengumuman.data');
    Route::get('/pengumuman/add', [PengumumanController::class, 'create'])->name('addPengumuman');
    Route::post('/pengumuman/store', [PengumumanController::class, 'store'])->name('storePengumuman');
    Route::get('/pengumuman/edit/{id}', [PengumumanController::class, 'edit'])->name('editPengumuman');
    Route::put('/pengumuman/update/{id}', [PengumumanController::class, 'update'])->name('updatePengumuman');
    Route::get('/pengumuman/delete/{id}', [PengumumanController::class, 'destroy'])->name('deletePengumuman');
});
