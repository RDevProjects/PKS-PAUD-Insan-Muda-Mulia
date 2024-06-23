<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="./assets/libs/simplebar/dist/simplebar.min.css" />

    <!-- Theme CSS -->
    @vite(['resources/css/app.css', 'resources/css/theme.css'])

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Sign In" />
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <!-- start signin page -->
    <div class="flex flex-col items-center justify-center g-0 h-screen px-4">
        <!-- card -->
        <div class="justify-center items-center w-full bg-white rounded-md shadow lg:flex md:mt-0 max-w-md xl:p-0">
            <!-- card body -->
            <div class="p-6 w-full sm:p-8 lg:p-8">
                <div class="mb-4">
                    <a href="{{ route('home') }}" class="flex flex-col text-center mb-4">
                        <span class="text-xl font-semibold">Pemantauan Kegiatan
                            Siswa</span>
                        <span>PAUD INSAN MUDA MULIA</span>
                    </a>
                    <p class="mb-4">Silakan masukkan informasi pengguna.</p>
                </div>
                <!-- form -->
                <form>
                    <!-- username -->
                    <div class="mb-3">
                        <label for="email" class="inline-block mb-2">Nama pengguna atau email</label>
                        <input type="email" id="email"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            name="email" placeholder="Email address here" required="" />
                    </div>
                    <!-- password -->
                    <div class="mb-5">
                        <label for="password" class="inline-block mb-2">Kata sandi</label>
                        <input type="password" id="password"
                            class="border border-gray-300 text-gray-900 rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2 px-3 disabled:opacity-50 disabled:pointer-events-none"
                            name="password" placeholder="**************" required="" />
                    </div>
                    <!-- checkbox -->
                    <div class="lg:flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <input type="checkbox"
                                class="w-4 h-4 text-indigo-600 bg-white border-gray-300 rounded focus:ring-indigo-600 focus:outline-none focus:ring-2"
                                id="rememberme" />
                            <label class="inline-block ms-2" for="rememberme">Ingatlah aku.</label>
                        </div>
                    </div>
                    <div>
                        <!-- button -->
                        <div class="grid">
                            <button type="submit"
                                class="btn bg-indigo-600 text-white border-indigo-600 hover:bg-indigo-800 hover:border-indigo-800 active:bg-indigo-800 active:border-indigo-800 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Masuk
                            </button>
                        </div>

                        {{-- <div class="flex justify-between mt-4">
                            <div class="mb-2">
                                <a href="sign-up.html" class="text-indigo-600 hover:text-indigo-600">Create An
                                    Account</a>
                            </div>
                            <div>
                                <a href="forget-password.html" class="text-indigo-600 hover:text-indigo-600">Forgot your
                                    password?</a>
                            </div>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of signin page -->

    <!-- Libs JS -->
    <script src="{{ asset('dashboard/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('dashboard/js/theme.min.js') }}"></script>

</body>

</html>
