            <!-- start navbar -->
            <nav class="navbar-vertical navbar">
                <div id="myScrollableElement" class="h-screen" data-simplebar>
                    <!-- brand logo -->
                    <a class="navbar-brand ml-0" href="{{ route('dashboard') }}">
                        {{-- <img src="./assets/images/brand/logo/logo.svg" alt="" /> --}}
                        <span class="text-base font-semibold text-white">Pemantauan Kegiatan Siswa</span><br>
                        <span>PAUD INSAN MUDA MULIA</span>
                    </a>

                    <!-- navbar nav -->
                    <ul class="navbar-nav flex-col" id="sideNavbar">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('dashboard') }}">
                                <i data-feather="home" class="w-4 h-4 mr-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Menu</div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('siswa') }}">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i>
                                Data Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('kegiatan') }}">
                                <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                                Kegiatan Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./docs.html">
                                <i data-feather="bell" class="w-4 h-4 mr-2"></i>
                                Pengumuman
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                                <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                                Data Siswa
                            </a>
                            <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./profile.html">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./settings.html">Settings</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./billing.html">Billing</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./pricing.html">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./404-error.html">404 Error</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
            <!--end of navbar-->
