@extends('dashboard.layout.default')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endpush
@section('content')
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <i data-feather="activity" class="w-10 h-10 mr-2 mb-2 text-white"></i>
        <h1 class="text-xl text-white">Data Kegiatan - PAUD Insan Muda Mulia</h1>
    </div>
    <div class="mx-6 my-6 gap-6">
        <div class="lg:col-span-2">
            <div class="card h-full shadow">
                <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
                    <!-- title -->
                    <div>
                        <h4>Data Kegiatan</h4>
                    </div>
                    {{-- @if (session()->has('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-3 py-2 mb-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session()->get('success') }}</span>
                        </div>
                    @endif --}}
                    <div>
                        <!-- button -->
                        <div class="leading-4">
                            <a href="{{ route('addKegiatan') }}"
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                type="button">
                                Tambah Data Kegiatan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-x-auto" data-simplebar="">
                    <!-- table -->
                    <table class="text-left w-full whitespace-nowrap" id="kegiatan-table">
                        <thead class="text-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-left">No</th>
                                <th class="px-4 py-2 text-left">Nama Kegiatan</th>
                                <th class="px-4 py-2 text-left">Deskripsi Kegiatan</th>
                                <th class="px-4 py-2 text-left">Tanggal Kegiatan</th>
                                <th class="px-4 py-2 text-left">Kelas</th>
                                <th class="px-4 py-2 text-left">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- card -->
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kegiatan-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('kegiatan.data') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama_kegiatan',
                        name: 'nama_kegiatan'
                    },
                    {
                        data: 'deskripsi_kegiatan',
                        name: 'deskripsi_kegiatan',
                        render: function(data) {
                            if (data.length > 50) {
                                return data.substr(0, 50) + '...';
                            } else {
                                return data;
                            }
                        }
                    },
                    {
                        data: 'tanggal_kegiatan',
                        name: 'tanggal_kegiatan'
                    },
                    {
                        data: 'kelas',
                        name: 'kelas'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
        });
    </script>
@endpush
