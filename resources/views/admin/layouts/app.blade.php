<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Parkir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
</head>

<body data-mode="light" data-sidebar-size="lg">


    <!-- leftbar-tab-menu -->
    <nav class="border-b border-slate-100 dark:bg-zinc-800 print:hidden flex items-center fixed top-0 right-0 left-0 bg-white z-10 dark:border-zinc-700">

        <div class="flex items-center justify-between w-full">
            <div class="topbar-brand flex items-center">
                <div class="navbar-brand flex items-center justify-between shrink px-5 h-[70px] border-r bg-slate-50 border-r-gray-50 dark:border-zinc-700 dark:bg-zinc-800">
                    <a href="#" class="flex items-center font-bold text-lg dark:text-white">
                        <span class="hidden xl:block align-middle">Parkiran</span>
                    </a>
                </div>
                <button type="button" class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
            <div class="flex items-center">
                <div>
                    <button type="button" class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                        <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                        <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
                </div>

                <div>
                    <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                        <button type="button" class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="fw-medium hidden xl:block">{{ auth()->user()->name }}</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>
                        <div class="dropdown-menu absolute top-0 ltr:-left-3 rtl:-right-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                <hr class="border-gray-50 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <form id="logout" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                    <button type="submit" form="logout" class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="logout.html">
                                        <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.users.index') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="user"></i>
                            <span data-key="t-dashboard"> Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.transactions.index') }}" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="file"></i>
                            <span data-key="t-dashboard"> Transactions</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">

            <div class="container-fluid px-[0.625rem]">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
