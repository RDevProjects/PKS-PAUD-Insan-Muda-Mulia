<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.siswa.index');
    }

    public function getSiswa(Request $request){
        if ($request->ajax()) {
            $data = Siswa::latest()->select(['id', 'nisn', 'nama', 'kelas', 'jenis_kelamin', 'nama_orangtua', 'no_telepon_orangtua']);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $waMessage = 'https://wa.me/'.$row->no_telepon_orangtua.'?text=Halo,%20'.$row->nama.'%20kami%20dari%20PAUD%20Insan%20Muda%20Mulia';
                    $editUrl = route('editSiswa', $row->id);
                    $deleteUrl = route('deleteSiswa', $row->id);
                    return '<a href="'.$waMessage.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Kirim Pesan</a>
                            <a href="'.$editUrl.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Edit</a>
                            <a href="'.$deleteUrl.'" data-id="'.$row->id.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Delete</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('dashboard.siswa.addSiswa');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required',
            'no_telepon_orangtua' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('addSiswa')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('dashboard.siswa.editSiswa', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'nama_orangtua' => 'required',
            'no_telepon_orangtua' => 'required',
        ]);

        Siswa::find($id)->update($request->all());

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil diubah');
    }

    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect()->route('siswa')->with('success', 'Data siswa berhasil dihapus');
    }
}
