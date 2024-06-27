@extends('dashboard.layout.default')
@section('content')
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">{{ env('APP_NAME') }}</h1>
    </div>
    <div class="mx-6 my-6 grid grid-cols-1 lg:grid-cols-3 grid-rows-1 grid-flow-row-dense gap-6 py-3">
        <div class="lg:col-span-2">
            <div class="card h-full shadow">
                <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
                    <!-- title -->
                    <div>
                        <h4>Edit Data Siswa</h4>
                    </div>
                    <div>
                        <!-- button -->
                        <div class="leading-4">
                            <a href="{{ route('siswa') }}"
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                type="button">
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <!-- Form Input  -->
                    <div class="card-body">
                        <form action="{{ route('updateSiswa', $siswa->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                                    <input type="text" name="nisn" id="nisn" autocomplete="off"
                                        value="{{ $siswa->nisn }}"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                    @error('nisn')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                                    <input type="text" name="nama" id="nama" autocomplete="off"
                                        value="{{ $siswa->nama }}"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                    @error('nama')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                                    <select name="kelas" id="kelas"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                        <option value="" @if ($siswa->kelas == '') selected @endif>Pilih Kelas
                                        </option>
                                        <option value="A" @if ($siswa->kelas == 'A') selected @endif>Kelas A
                                        </option>
                                        <option value="B" @if ($siswa->kelas == 'B') selected @endif>Kelas B
                                        </option>
                                        <option value="C" @if ($siswa->kelas == 'C') selected @endif>Kelas C
                                        </option>
                                        <option value="D" @if ($siswa->kelas == 'D') selected @endif>Kelas D
                                        </option>
                                    </select>
                                    @error('kelas')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis
                                        Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                        <option value="" @if ($siswa->jenis_kelamin == '') selected @endif>Pilih Jenis
                                            Kelamin</option>
                                        <option value="Laki-Laki" @if ($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan" @if ($siswa->jenis_kelamin == 'Perempuan') selected @endif>
                                            Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama_orangtua" class="block text-sm font-medium text-gray-700">Nama Orang
                                        Tua</label>
                                    <input type="text" name="nama_orangtua" id="nama_orangtua" autocomplete="off"
                                        value="{{ $siswa->nama_orangtua }}"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                    @error('nama_orangtua')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="no_telepon_orangtua" class="block text-sm font-medium text-gray-700">No.
                                        Telp</label>
                                    <input type="text" name="no_telepon_orangtua" id="no_telepon_orangtua"
                                        autocomplete="off" value="{{ $siswa->no_telepon_orangtua }}"
                                        class="py-1 px-3 block w-full text-sm border-gray-300 rounded focus:border-indigo-600 focus:ring-indigo-600 disabled:opacity-50 disabled:pointer-events-none">
                                    @error('no_telepon_orangtua')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="w-full btn bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-300">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- card -->
        <div class="lg:col-span-1">
            <div class="card h-full shadow">
                <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
                    <!-- title -->
                    <div>
                        <h4>Informasi</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session()->get('success') }}</span>
                        </div>
                    @endif
                    <p class="text-sm text-gray-600">Halaman ini adalah halaman Edit Data Siswa dari PAUD Insan Muda
                        Mulia.<br><br> Pada halaman ini, Anda dapat mengubah informasi siswa seperti NISN, Nama Siswa, Jenis
                        Kelamin, Kelas, Nama Orang Tua, dan Nomor Telepon. <br><br>Silakan ubah informasi yang diperlukan
                        dan
                        tekan tombol 'Submit' untuk menyimpan perubahan data siswa ke dalam sistem. <br><br>Halaman ini
                        dirancang
                        untuk
                        memudahkan administrator sekolah dalam mengelola data siswa secara efisien dan terstruktur.
                    </p>
                </div>
            </div>
        </div>
    @endsection
