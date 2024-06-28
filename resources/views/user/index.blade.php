<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="h-screen lg:h-full bg-center bg-no-repeat bg-cover bg-gray-700 bg-blend-multiply"
        style="background-image: url('{{ asset('wallpaper.jpg') }}');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-40 lg:py-56 ">
            <h1 class="mb-3 text-2xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-2xl">
                {{ env('APP_NAME') }}</h1>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Selamat Datang Wali Murid</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Cek Kegiatan Dan Pengumuman
                Siswa Disini.
            </p>

            <!-- Search Form -->
            <form action="{{ route('search') }}" method="GET" class="max-w-md mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" name="nisn" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan NISN..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            @if (isset($siswa))
                <!-- Data Siswa -->
                <div class="mt-6 text-white">
                    <h2 class="text-2xl font-bold">Data Siswa</h2>
                    <table class="min-w-full bg-gray-800 text-white">
                        <tr>
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4">Kelas</th>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">{{ $siswa->nama }}</td>
                            <td class="py-2 px-4">{{ $siswa->kelas }}</td>
                        </tr>
                    </table>
                </div>

                <!-- Pengumuman -->
                <div class="mt-6 text-white">
                    <h2 class="text-2xl font-bold bg-gray-500 py-2">Pengumuman</h2>
                    @if ($pengumuman->isEmpty())
                        <p>Tidak ada pengumuman untuk kelas ini.</p>
                    @else
                        <table class="min-w-full border-collapse border border-slate-500 bg-gray-800 text-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Tanggal Pengumuman</th>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Judul Pengumuman</th>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Isi Pengumuman</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengumuman as $p)
                                    <tr>
                                        <td class="py-2 px-4 border border-slate-600">{{ $p->tanggal_pengumuman }}</td>
                                        <td class="py-2 px-4 border border-slate-600">{{ $p->judul_pengumuman }}</td>
                                        <td class="py-2 px-4 border border-slate-600">{{ $p->isi_pengumuman }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <!-- Kegiatan -->
                <div class="mt-6 text-white">
                    <h2 class="text-2xl font-bold bg-gray-500 py-2">Kegiatan</h2>
                    @if ($kegiatan->isEmpty())
                        <p>Tidak ada kegiatan untuk kelas ini.</p>
                    @else
                        <table class="min-w-full border-collapse border border-slate-500 bg-gray-800 text-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Tanggal Kegiatan</th>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Nama Kegiatan</th>
                                    <th class="py-2 px-4 border border-slate-600 bg-gray-700">Deskripsi Kegiatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kegiatan as $k)
                                    <tr>
                                        <td class="py-2 px-4 border border-slate-600">{{ $k->tanggal_kegiatan }}</td>
                                        <td class="py-2 px-4 border border-slate-600">{{ $k->nama_kegiatan }}</td>
                                        <td class="py-2 px-4 border border-slate-600">{{ $k->deskripsi_kegiatan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            @elseif(isset($message))
                <p class="mt-6 text-white">{{ $message }}</p>
            @endif

        </div>
    </section>

</body>

</html>
