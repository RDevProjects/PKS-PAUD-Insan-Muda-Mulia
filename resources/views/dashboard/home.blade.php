@extends('dashboard.layout.default')
@section('content')
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">{{ env('APP_NAME') }}</h1>
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 xl:grid-cols-3">
        <!-- card for Siswa -->
        <div class="card shadow">
            <div class="card-body">
                <div class="flex justify-between items-center">
                    <h4>Siswa</h4>
                    <div
                        class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                        <i data-feather="users"></i>
                    </div>
                </div>
                <div class="mt-2 flex flex-col gap-0 text-base">
                    <div>
                        <span class="text-gray-500">Jumlah</span>
                    </div>
                    <h2 class="text-xl font-bold">{{ $jumlahSiswa }}</h2>
                </div>
            </div>
        </div>
        <!-- card for Kegiatan -->
        <div class="card shadow">
            <div class="card-body">
                <div class="flex justify-between items-center">
                    <h4>Kegiatan</h4>
                    <div
                        class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                        <i data-feather="activity"></i>
                    </div>
                </div>
                <div class="mt-2 flex flex-col gap-0 text-base">
                    <div>
                        <span class="text-gray-500">Jumlah</span>
                    </div>
                    <h2 class="text-xl font-bold">{{ $jumlahKegiatan }}</h2>
                </div>
            </div>
        </div>
        <!-- card for Pengumuman -->
        <div class="card shadow">
            <div class="card-body">
                <div class="flex justify-between items-center">
                    <h4>Pengumuman</h4>
                    <div
                        class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                        <i data-feather="users"></i>
                    </div>
                </div>
                <div class="mt-2 flex flex-col gap-0 text-base">
                    <div>
                        <span class="text-gray-500">Jumlah</span>
                    </div>
                    <h2 class="text-xl font-bold">{{ $jumlahPengumuman }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
