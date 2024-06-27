<?php

use App\Http\Controllers\AuthController;
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
    Route::get('/siswa', function () {
        return view('dashboard.siswa.index');
    })->name('siswa');
    Route::get('/TambahSiswa', function () {
        return view('dashboard.siswa.addSiswa');
    })->name('addSiswa');
});
