<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function search(Request $request)
    {
        $nisn = $request->input('nisn');
        $siswa = Siswa::where('nisn', $nisn)->first();

        if ($siswa) {
            $pengumuman = Pengumuman::latest()->where('kelas', $siswa->kelas)->get();
            $kegiatan = Kegiatan::latest()->where('kelas', $siswa->kelas)->get();

            return view('user.index', compact('siswa', 'pengumuman', 'kegiatan'));
        } else {
            return view('user.index')->with('message', 'Siswa tidak ditemukan');
        }
    }
}
