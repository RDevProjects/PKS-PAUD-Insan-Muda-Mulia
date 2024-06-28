<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('dashboard.pengumuman.index');
    }

    public function getPengumuman(Request $request){
        if ($request->ajax()) {
            $data = Pengumuman::latest()->select(['id', 'tanggal_pengumuman', 'judul_pengumuman', 'isi_pengumuman', 'kelas']);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $editUrl = route('editPengumuman', $row->id);
                    $deleteUrl = route('deletePengumuman', $row->id);
                    return '<a href="'.$editUrl.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Edit</a>
                            <a href="'.$deleteUrl.'" data-id="'.$row->id.'" class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">Delete</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('dashboard.pengumuman.addPengumuman');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tanggal_pengumuman' => 'required',
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
            'kelas' => 'required',
        ]);

        Pengumuman::create($request->all());

        return redirect()->route('addPengumuman')->with('success', 'Data pengumuman berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('dashboard.pengumuman.editPengumuman', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_pengumuman' => 'required',
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
            'kelas' => 'required',
        ]);

        Pengumuman::find($id)->update($request->all());

        return redirect()->route('editPengumuman', $id)->with('success', 'Data pengumuman berhasil diupdate');
    }

    public function destroy($id)
    {
        Pengumuman::find($id)->delete();
        return response()->json(['success' => 'Data pengumuman berhasil dihapus']);
    }
}
