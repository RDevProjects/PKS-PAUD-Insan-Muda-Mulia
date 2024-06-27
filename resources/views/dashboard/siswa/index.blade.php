@extends('dashboard.layout.default')
@section('content')
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <i data-feather="users" class="w-10 h-10 mr-2 mb-2 text-white"></i>
        <h1 class="text-xl text-white">Data Siswa - PAUD Insan Muda
            Mulia
        </h1>
        {{-- <a href="#"
            class="btn bg-white text-gray-800 border-gray-600 hover:bg-gray-100 hover:text-gray-800 hover:border-gray-200 active:bg-gray-100 active:text-gray-800 active:border-gray-200 focus:outline-none focus:ring-4 focus:ring-indigo-300">
            Create New Project
        </a> --}}
    </div>
    <div class="mx-6 my-6 gap-6">
        <div class="lg:col-span-2">
            <div class="card h-full shadow">
                <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
                    <!-- title -->
                    <div>
                        <h4>Daftar Siswa</h4>
                    </div>
                    <div>
                        <!-- button -->
                        <div class="leading-4">
                            <a href="{{ route('addSiswa') }}"
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                type="button">
                                Tambah Data Siswa
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <!-- table -->
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-300">No</th>
                                <th class="px-6 py-3 border-b border-gray-300">NIS</th>
                                <th class="px-6 py-3 border-b border-gray-300">Nama</th>
                                <th class="px-6 py-3 border-b border-gray-300">Kelas</th>
                                <th class="px-6 py-3 border-b border-gray-300">Jurusan</th>
                                <th class="px-6 py-3 border-b border-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($siswa as $item) --}}
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">{{-- {{ $loop->iteration }} --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">{{-- {{ $item->nis }} --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">{{-- {{ $item->nama }} --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">{{-- {{ $item->kelas }} --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">{{-- {{ $item->jurusan }}  --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                                    <a href="{{-- {{ route('siswa', $item->id) }} --}}"
                                        class="btn btn-sm bg-white text-gray-800 border-gray-300 hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                        Edit
                                    </a>
                                    <form action="{{-- {{ route('siswa', $item->id) }} --}}" method="post" class="inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn btn-sm bg-white text-gray-800 border-gray-300 hover:text-white hover:bg-red-700 hover:border-red-700 active:bg-red-
                                                700 active:border-red-700 focus:outline-none focus:ring-4 focus:ring-red-300">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- card -->
    </div>
    <footer>
        <div class="px-6 border-t border-gray-300 py-3 flex justify-between items-center">
            <p class="m-0 leading-6">
                Made by
                <a href="https://codescandy.com/" target="_blank" class="text-indigo-600">Codescandy</a>
            </p>
            <a href="https://github.com/codescandy/dashui-tailwindcss" target="_blank">
                <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-gray-800">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z">
                    </path>
                </svg>
            </a>
        </div>
    </footer>
@endsection
