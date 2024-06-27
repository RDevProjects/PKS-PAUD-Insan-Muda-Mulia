<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('dashboard.kegiatan.index');
    }

    public function getKegiatan(Request $request){
         if ($request->ajax()) {
            $data = Kegiatan::latest()->select(['id', 'nama_kegiatan', 'deskripsi_kegiatan', 'tanggal_kegiatan', 'kelas']);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editUrl = route('editKegiatan', $row->id);
                    $deleteUrl = route('deleteKegiatan', $row->id);
                    return '<a href="'.$editUrl.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Edit</a>
                            <a href="'.$deleteUrl.'" data-id="'.$row->id.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Delete</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
         }
    }

    public function create()
    {
        return view('dashboard.kegiatan.addKegiatan');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'kelas' => 'required',
        ]);

        Kegiatan::create($request->all());

        return redirect()->route('addKegiatan')->with('success', 'Data kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('dashboard.kegiatan.editKegiatan', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'kelas' => 'required',
        ]);

        Kegiatan::find($id)->update($request->all());

        return redirect()->route('kegiatan')->with('success', 'Data kegiatan berhasil diubah');
    }

    public function destroy($id)
    {
        Kegiatan::find($id)->delete();
        return redirect()->route('kegiatan')->with('success', 'Data kegiatan berhasil dihapus');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('dashboard.kegiatan.showKegiatan', compact('kegiatan'));
    }
}
