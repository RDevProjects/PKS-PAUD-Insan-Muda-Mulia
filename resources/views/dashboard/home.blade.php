@extends('dashboard.layout.default')
@section('content')
    <div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center mb-3">
        <!-- title -->
        <h1 class="text-xl text-white">{{ env('APP_NAME') }}</h1>
        {{-- <a href="#"
            class="btn bg-white text-gray-800 border-gray-600 hover:bg-gray-100 hover:text-gray-800 hover:border-gray-200 active:bg-gray-100 active:text-gray-800 active:border-gray-200 focus:outline-none focus:ring-4 focus:ring-indigo-300">
            Create New Project
        </a> --}}
    </div>
    <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 xl:grid-cols-3">
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
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
                    <h2 class="text-xl font-bold">18</h2>
                </div>
            </div>
        </div>
        <!-- card -->
        <div class="card shadow">
            <!-- card boduy -->
            <div class="card-body">
                <!-- content -->
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
                    <h2 class="text-xl font-bold">18</h2>
                </div>
            </div>
        </div>
        <!-- card -->
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
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
                    <h2 class="text-xl font-bold">18</h2>
                </div>
            </div>
        </div>
        <!-- card -->
        {{-- <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <!-- content -->
                <div class="flex justify-between items-center">
                    <h4>Productivity</h4>
                    <div
                        class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                        <i data-feather="target"></i>
                    </div>
                </div>
                <div class="mt-4 flex flex-col gap-0 text-base">
                    <h2 class="text-xl font-bold">76%</h2>
                    <div>
                        <span class="text-green-600">5%</span>
                        <span class="text-gray-500">Completed</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="mx-6 my-6 grid grid-cols-1 lg:grid-cols-3 grid-rows-1 grid-flow-row-dense gap-6">
        <div class="lg:col-span-2">
            <div class="card h-full shadow">
                <div class="border-b border-gray-300 px-5 py-4 flex items-center w-full justify-between">
                    <!-- title -->
                    <div>
                        <h4>My Task</h4>
                    </div>
                    <div>
                        <!-- button -->
                        <div class="dropdown leading-4">
                            <button
                                class="btn btn-sm gap-x-2 bg-white text-gray-800 border-gray-300 border disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-700 hover:border-gray-700 active:bg-gray-700 active:border-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-300"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Add Task
                            </button>
                            <!-- list -->
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-x-auto">
                    <!-- table -->
                    <table class="text-left w-full whitespace-nowrap">
                        <thead class="text-gray-700">
                            <tr>
                                <th scope="col" class="border-b bg-gray-100 px-6 py-3">Name</th>
                                <th scope="col" class="border-b bg-gray-100 px-6 py-3">Deadline</th>
                                <th scope="col" class="border-b bg-gray-100 px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxOne" />
                                        <label for="checkboxOne" class="text-base ml-2 text-slate-600">Design a FreshCart
                                            Home
                                            page</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Today
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-green-100 px-2 py-1 text-green-700 text-sm font-medium rounded-md">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxTwo" />
                                        <label for="checkboxTwo" class="text-base ml-2 text-slate-600">Dash UI Dark
                                            Version
                                            Design</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    Yesterday</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-red-100 px-2 py-1 text-red-700 text-sm font-medium rounded-md">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxThree" />
                                        <label for="checkboxThree" class="text-base ml-2 text-slate-600">Dash UI landing
                                            page
                                            design</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">16
                                    Sept, 2023</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span class="bg-yellow-100 px-2 py-1 text-yellow-700 text-sm font-medium rounded-md">In
                                        Progress</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded-md focus:ring-indigo-400 focus:outline-none focus:ring-3 focus:outline-indigo-600"
                                            type="checkbox" id="checkboxFour" />
                                        <label for="checkboxFour" class="text-base ml-2 text-slate-600">Next.js Dash UI
                                            version</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">23
                                    Sept, 2023</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-green-100 px-2 py-1 text-green-700 text-sm font-medium rounded-md">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxFive" />
                                        <label for="checkboxFive" class="text-base ml-2 text-slate-600">Develop a Dash UI
                                            Laravel</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">20
                                    Sept, 2023</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-red-100 px-2 py-1 text-red-700 text-sm font-medium rounded-md">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxSix" />
                                        <label for="checkboxSix" class="text-base ml-2 text-slate-600">Coach home page
                                            design</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">12
                                    Sept, 2023</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-green-100 px-2 py-1 text-green-700 text-sm font-medium rounded-md">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <input
                                            class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                            type="checkbox" id="checkboxSeven" />
                                        <label for="checkboxSeven" class="text-base ml-2 text-slate-600">Develop a Dash UI
                                            Laravel</label>
                                    </div>
                                </td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">11
                                    Sept, 2023</td>
                                <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                    <span
                                        class="bg-red-100 px-2 py-1 text-red-700 text-sm font-medium rounded-md">Pending</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- card -->
        <div class="card h-full shadow">
            <div class="border-b border-gray-300 px-5 py-4">
                <h4>Teams</h4>
            </div>
            <div class="relative overflow-x-auto" data-simplebar="" style="max-height: 380px">
                <!-- table -->
                <table class="text-left w-full whitespace-nowrap">
                    <thead class="text-gray-700">
                        <tr>
                            <th scope="col" class="border-b bg-gray-100 px-6 py-3">Name</th>
                            <th scope="col" class="border-b bg-gray-100 px-6 py-3">Role</th>
                            <th scope="col" class="border-b bg-gray-100 px-6 py-3">Last Activity</th>
                            <th scope="col" class="border-b bg-gray-100 px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-2.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Anita Parmar</a></h5>
                                        <p class="mb-0 text-gray-500">anita@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Front End
                                Developer</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">3 May,
                                2023</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block">
                                            <img src="assets/images/avatar/avatar-3.jpg" alt="Image"
                                                class="rounded-full" />
                                        </a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Jitu Chauhan</a></h5>
                                        <p class="mb-0 text-gray-500">jituchauhan@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Project
                                Director</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Today</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-2.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Sandeep Chauhan</a></h5>
                                        <p class="mb-0 text-gray-500">sandeepchauhan@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Full-
                                Stack Developer</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Yesterday
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-5.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Amanda Darnell</a></h5>
                                        <p class="mb-0 text-gray-500">amandadarnell@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Digital
                                Marketer</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">3 May,
                                2023</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-6.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Patricia Murrill</a></h5>
                                        <p class="mb-0 text-gray-500">patriciamurrill@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Account
                                Manager</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">3 May,
                                2023</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-7.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Darshini Nair</a></h5>
                                        <p class="mb-0 text-gray-500">darshininair@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Front End
                                Developer</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">3 May,
                                2023</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div>
                                        <a href="#!" class="h-10 w-10 inline-block"><img
                                                src="assets/images/avatar/avatar-8.jpg" alt="Image"
                                                class="rounded-full" /></a>
                                    </div>
                                    <div class="ml-3 leading-4">
                                        <h5 class="mb-1"><a href="#!">Patricia Murrill</a></h5>
                                        <p class="mb-0 text-gray-500">patriciamurrill@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">Account
                                Manager</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">3 May,
                                2023</td>
                            <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                                <div class="dropdown leading-4">
                                    <button class="text-gray-600 p-2 hover:bg-gray-300 rounded-full transition-all"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-4 h-4"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
