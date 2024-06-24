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
                            <a class="nav-link  active " href="{{ route('dashboard') }}">
                                <i data-feather="home" class="w-4 h-4 mr-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Layouts & Pages</div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                                <i data-feather="layers" class="w-4 h-4 mr-2"></i>
                                Pages
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
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navAuthentication" aria-expanded="false"
                                aria-controls="navAuthentication">
                                <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                                Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./sign-in.html">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./sign-up.html">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./forget-password.html">Forget Password</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="./layout.html">
                                <i data-feather="sidebar" class="w-4 h-4 mr-2"></i>
                                Layouts
                            </a>
                        </li>
                        <!-- nav heading -->
                        <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                                <i data-feather="package" class="w-4 h-4 mr-2"></i>
                                Components
                            </a>
                            <div id="navComponents" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/accordions.html">Accordions</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/alerts.html">Alerts</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/avatar.html">Avatar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/badge.html">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/buttons.html">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/button-group.html">Button Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/blockquote.html">Blockquote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/breadcrumb.html">Breadcrumb</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/card.html">Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/collapse.html">Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/dropdown.html">Dropdown</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/forms.html">Forms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/offcanvas.html">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/lists.html">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/navbar.html">Navbar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/navs-tabs.html">Nav & Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/pagination.html">Pagination</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/progress.html">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/spinners.html">Spinners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/tables.html">Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/toast.html">Toast</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./components/tooltips.html">Tooltips</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i data-feather="corner-left-down" class="w-4 h-4 mr-2"></i>
                                Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse" data-bs-parent="#sideNavbar">
                                <ul class="nav flex-col">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                            aria-controls="navMenuLevelSecond">Two Level</a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-col">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!">NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!">NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                            aria-controls="navMenuLevelThree">Three Level</a>
                                        <div id="navMenuLevelThree" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-col">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#!"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                                        aria-controls="navMenuLevelThreeOne">
                                                        NavItem 1
                                                    </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse"
                                                        data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-col">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#!">NavChild Item 1</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!">Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>

                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="./docs.html">
                                <i data-feather="clipboard" class="w-4 h-4 mr-2"></i>
                                Docs
                            </a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="./changelog.html">
                                <i data-feather="git-pull-request" class="w-4 h-4 mr-2"></i>
                                Changelog
                            </a>
                        </li>
                        <!-- nav heading -->
                        <li class="nav-item">
                            <a class="nav-link" href="https://dashui.codescandy.com/" target="_blank">
                                <i data-feather="download" class="w-4 h-4 mr-2"></i>
                                Download
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--end of navbar-->