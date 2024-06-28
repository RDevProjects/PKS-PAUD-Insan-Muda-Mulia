<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahPengumuman = Pengumuman::count();
        $jumlahKegiatan = Kegiatan::count();
        $jumlahSiswa = Siswa::count();

        return view('dashboard.home', compact('jumlahPengumuman', 'jumlahKegiatan', 'jumlahSiswa'));
    }
}
