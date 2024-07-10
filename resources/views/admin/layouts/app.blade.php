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
                    <a href="#" class="flex items-center font-bold text-lg  dark:text-white">
                        <img src="assets/images/logo-sm.svg" alt="" class="ltr:mr-2 rtl:ml-2 inline-block mt-1 h-6" />
                        <span class="hidden xl:block align-middle">Minia</span>
                    </a>
                </div>
                <button type="button" class="text-gray-600 dark:text-white h-[70px] ltr:-ml-10 ltr:mr-6 rtl:-mr-10 rtl:ml-10 vertical-menu-btn" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <form class="app-search hidden xl:block px-5">
                    <div class="relative inline-block">
                        <input type="text" class="bg-gray-50/30 dark:bg-zinc-700/50 border-0 rounded focus:ring-0 placeholder:text-sm px-4 dark:placeholder:text-gray-200 dark:text-gray-100 dark:border-zinc-700 " placeholder="Search...">
                        <button class="py-1.5 px-2.5 text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex items-center">

                <div>
                    <div class="dropdown relative sm:hidden block">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="h-5 w-5"></i>
                        </button>

                        <div class="dropdown-menu absolute px-4 -left-36 top-0 mx-4 w-72 z-50 hidden list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="form-group m-0">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                        <button class="btn btn-primary border-l-0 rounded-l-none bg-violet-500 border-transparent text-white" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="dropdown relative language hidden sm:block">
                    <button class="btn border-0 py-0 dropdown-toggle px-4 h-[70px]" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                        <img src="assets/images/flags/us.jpg" alt="" class="h-4" id="header-lang-img">
                    </button>
                    <div class="dropdown-menu absolute -left-24 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="navNotifications">
                        <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1 inline-block h-3"> <span class="align-middle">English</span></a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1 inline-block h-3"> <span class="align-middle">Spanish</span></a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1 inline-block h-3"> <span class="align-middle">German</span></a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-zinc-600/50 dark:hover:text-white"><img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1 inline-block h-3"> <span class="align-middle">Italian</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <button type="button" class="light-dark-mode text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                        <i data-feather="moon" class="h-5 w-5 block dark:hidden"></i>
                        <i data-feather="sun" class="h-5 w-5 hidden dark:block"></i>
                </div>

                <div>
                    <div class="dropdown relative text-gray-600 hidden sm:block">
                        <button type="button" class="btn border-0 h-[70px] text-xl px-4 dropdown-toggle dark:text-gray-100" data-bs-toggle="dropdown" id="dropdownMenuButton1">
                            <i data-feather="grid" class="h-5 w-5"></i>
                        </button>
                        <div class="dropdown-menu absolute -left-40 z-50 hidden w-72 list-none border border-gray-50 rounded bg-white shadow dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" aria-labelledby="dropdownMenuButton1">
                            <div class="p-2">
                                <div class="grid grid-cols-3">
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/github.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/bitbucket.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Bitbucket</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/dribbble.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                                <div class="grid grid-cols-3">
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/dropbox.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Dropbox</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/mail_chimp.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Mail Chimp</span>
                                    </a>
                                    <a class="dropdown-item hover:bg-gray-50/50 py-4 text-center dark:hover:bg-zinc-700/50 dark:hover:text-gray-50" href="#">
                                        <img src="assets/images/brands/slack.png" class="mb-2 mx-auto h-6" alt="Github">
                                        <span>Slack</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="dropdown relative ">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-100" aria-expanded="false" data-dropdown-toggle="notification">
                                <i data-feather="bell" class="h-5 w-5"></i>
                            </button>
                            <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-2.5">5</span>
                        </div>
                        <div class="dropdown-menu absolute z-50 hidden w-80 list-none rounded bg-white shadow dark:bg-zinc-800 " id="notification">
                            <div class="border border-gray-50 dark:border-gray-700 rounded" aria-labelledby="notification">
                                <div class="grid grid-cols-12 p-4">
                                    <div class="col-span-6">
                                        <h6 class="m-0 text-gray-700 dark:text-gray-100"> Notifications </h6>
                                    </div>
                                    <div class="col-span-6 justify-self-end">
                                        <a href="#!" class="text-xs underline dark:text-gray-400"> Unread (3)</a>
                                    </div>
                                </div>
                                <div class="max-h-56" data-simplebar>
                                    <div>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">James Lemire</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">It will seem like simplified English.</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>1 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-violet-500 rounded-full text-center">
                                                        <i class="bx bx-cart text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your order is placed</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages coalesce the grammar</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>3 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 bg-green-500 rounded-full text-center">
                                                        <i class="bx bx-badge-check text-xl leading-relaxed text-white"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Your item is shipped</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">If several languages coalesce the grammar</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>3 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="text-reset notification-item">
                                            <div class="flex px-4 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="assets/images/users/avatar-6.jpg" class="rounded-full h-8 w-8" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-gray-700 dark:text-gray-100">Salena Layfield</h6>
                                                    <div class="text-13 text-gray-600">
                                                        <p class="mb-1 dark:text-gray-400">As a skeptical Cambridge friend of mine occidental.</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-400"></i> <span>1 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-1 border-t grid border-gray-50 dark:border-zinc-600 justify-items-center">
                                    <a class="btn border-0 text-violet-500" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="dropdown relative ltr:mr-4 rtl:ml-4">
                        <button type="button" class="flex items-center px-4 py-5 border-x border-gray-50 bg-gray-50/30 dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img class="h-8 w-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="fw-medium hidden xl:block">Shawn L.</span>
                            <i class="mdi mdi-chevron-down align-bottom hidden xl:block"></i>
                        </button>
                        <div class="dropdown-menu absolute top-0 ltr:-left-3 rtl:-right-3 z-50 hidden w-40 list-none rounded bg-white shadow dark:bg-zinc-800" id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="apps-contacts-profile.html">
                                        <i class="mdi mdi-face-man text-16 align-middle mr-1"></i> Profile
                                    </a>
                                </div>
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="px-3 py-2 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="lock-screen.html">
                                        <i class="mdi mdi-lock text-16 align-middle mr-1"></i> Lock Screen
                                    </a>
                                </div>
                                <hr class="border-gray-50 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="p-3 hover:bg-gray-50/50 block dark:hover:bg-zinc-700/50" href="logout.html">
                                        <i class="mdi mdi-logout text-16 align-middle mr-1"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hidden">
        <div class="fixed inset-0 bg-black/40 transition-opacity z-40"></div>
        <div class="h-screen z-50 bg-white fixed w-80 right-0" data-simplebar>
            <div class="flex items-center p-4 border-b border-gray-100">
                <h5 class="m-0 mr-2">Theme Customizer</h5>
                <a href="javascript:void(0);" class="h-6 w-6 text-center bg-gray-700 ml-auto rounded-full">
                    <i class="mdi mdi-close text-15 align-middle text-white leading-relaxed"></i>
                </a>
            </div>
            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout" id="layout-vertical" value="vertical">
                        <label class="align-middle" for="layout-vertical">Vertical</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                        <label class="align-middle" for="layout-horizontal">Horizontal</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-mode" id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>
                <div class="flex gap-4">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                <div class="space-y-1">
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" checked type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="focus:ring-0" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>
                <div class="space-y-1">
                    <div>
                        <input class="focus:ring-0" checked type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div>
                        <input class="focus:ring-0" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

        <div data-simplebar class="h-full">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">Menu</li>

                    <li>
                        <a href="index.html" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard"> Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="grid"></i>
                            <span data-key="t-apps"> Apps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="app-calendar.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Calendar</a>
                            </li>
                            <li>
                                <a href="app-chat.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chat</a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Email</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-email-inbox.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="apps-email-read.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Read Email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Invoices</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-invoices-list.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice List</a>
                                    </li>
                                    <li>
                                        <a href="apps-invoices-detail.html" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Invoice Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Contacts</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-contacts-grid.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-list.html" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">User List</a>
                                    </li>
                                    <li>
                                        <a href="apps-contacts-profile.html" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false" class="flex items-center justify-between pl-14 pr-4 py-2  text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                    <span data-key="t-apps">Blog</span>
                                    <span class="badge px-2 py-0.5 bg-red-100 text-xs rounded-full font-medium text-red-400 text-end">New</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="apps-blog-grid.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-list.html" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog List</a>
                                    </li>
                                    <li>
                                        <a href="apps-blog-detail.html" class="pl-14 pr-4  py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="users"></i>
                            <span data-key="t-auth">Authentication</span>
                        </a>
                        <ul>
                            <li>
                                <a href="login.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                            </li>
                            <li>
                                <a href="register.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                            </li>
                            <li>
                                <a href="recoverpw.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Recover Password</a>
                            </li>
                            <li>
                                <a href="lock-screen.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lock Screen</a>
                            </li>
                            <li>
                                <a href="logout.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log Out</a>
                            </li>
                            <li>
                                <a href="confirm-mail.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Email Verification</a>
                            </li>
                            <li>
                                <a href="two-step-verification.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Two Step Verification</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i><span data-key="t-pages">Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a href="starter.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter Page</a>
                            </li>
                            <li>
                                <a href="maintenance.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Maintenance</a>
                            </li>
                            <li>
                                <a href="coming-soon.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Coming Soon</a>
                            </li>
                            <li>
                                <a href="timeline.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Timeline</a>
                            </li>
                            <li>
                                <a href="faqs.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">FAQs</a>
                            </li>
                            <li>
                                <a href="pricing.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Pricing</a>
                            </li>
                            <li>
                                <a href="404.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 404</a>
                            </li>
                            <li>
                                <a href="500.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Error 500</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-heading px-4 py-3 text-xs font-medium text-gray-500 cursor-default" data-key="t-elements">Elements</li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="briefcase"></i>
                            <span data-key="t-compo">Components</span>
                        </a>
                        <ul>
                            <li>
                                <a href="alerts.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Alerts</a>
                            </li>
                            <li>
                                <a href="buttons.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Buttons</a>
                            </li>
                            <li>
                                <a href="cards.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Cards</a>
                            </li>
                            <li>
                                <a href="dropdown.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dropdown</a>
                            </li>
                            <li>
                                <a href="flexbox&grid.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Flexbox & Grid</a>
                            </li>
                            <li>
                                <a href="sizing.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sizing</a>
                            </li>
                            <li>
                                <a href="avatars.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Avatar</a>
                            </li>
                            <li>
                                <a href="modals.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Modals</a>
                            </li>
                            <li>
                                <a href="progress.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Progress</a>
                            </li>
                            <li>
                                <a href="tabs&accordions.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="typography.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Typography</a>
                            </li>
                            <li>
                                <a href="toasts.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Toasts</a>
                            </li>
                            <li>
                                <a href="general.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">General</a>
                            </li>
                            <li>
                                <a href="colors.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Colors</a>
                            </li>
                            <li>
                                <a href="utilities.html" class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Utilities</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="gift"></i>
                            <span data-key="t-extend">Extended</span>
                        </a>
                        <ul>
                            <li>
                                <a href="extended-lightbox.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Lightbox</a>
                            </li>
                            <li>
                                <a href="extended-rangeslider.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="extended-sweet-alert.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                            </li>
                            <li>
                                <a href="extended-rating.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rating</a>
                            </li>
                            <li>
                                <a href="extended-notifications.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Notifications</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <span class="badge bg-red-50 text-danger ltr:float-right rtl:float-left z-50 px-1.5 rounded-full text-11 text-red-500" data-toggle="collapse">7</span>
                            <i data-feather="box"></i>
                            <span data-key="t-forms">Forms</span>
                        </a>
                        <ul>
                            <li>
                                <a href="form-elements.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                            </li>
                            <li>
                                <a href="form-validation.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Rangeslider</a>
                            </li>
                            <li>
                                <a href="form-advanced.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">SweetAlert 2</a>
                            </li>
                            <li>
                                <a href="form-editors.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editors</a>
                            </li>
                            <li>
                                <a href="file-uploads.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">File Upload</a>
                            </li>
                            <li>
                                <a href="form-wizard.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Wizard</a>
                            </li>
                            <li>
                                <a href="form-mask.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Mask</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="sliders"></i>
                            <span data-key="t-charts">Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a href="tables-basic.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic Elements</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                            </li>
                            <li>
                                <a href="tables-responsive.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Responsive</a>
                            </li>
                            <li>
                                <a href="tables-editable.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Editable </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="pie-chart"></i>
                            <span data-key="t-charts">Charts</span>
                        </a>
                        <ul>
                            <li>
                                <a href="charts-apex.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                            </li>
                            <li>
                                <a href="charts-echart.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Echarts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Chartjs</a>
                            </li>
                            <li>
                                <a href="charts-knob.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Jquery Knob</a>
                            </li>
                            <li>
                                <a href="charts-sparkline.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Sparkline Chart</a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="cpu"></i>
                            <span data-key="t-icons">Icons</span>
                        </a>
                        <ul>
                            <li>
                                <a href="icons-boxicons.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Boxicons</a>
                            </li>
                            <li>
                                <a href="icons-materialdesign.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Material Design</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Dripicons</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="map"></i>
                            <span data-key="t-maps"> Maps</span>
                        </a>
                        <ul>
                            <li>
                                <a href="maps-google.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Google</a>
                            </li>
                            <li>
                                <a href="maps-vector.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Vector</a>
                            </li>
                            <li>
                                <a href="maps-leaflet.html" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Leaflet</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__item w-full ">
                        <a href="javascript: void(0);" aria-expanded="false" class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                            <i data-feather="share-2"></i>
                            <span data-key="t-level">Multi Level</span>
                        </a>
                        <div>
                            <ul>
                                <li>
                                    <a href="index.html" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 1.1</a>
                                </li>
                                <li>
                                    <a href="#!" data-toggle="collapse" data-target=".Level1.2-menu" class="nav-menu pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                        <span data-key="t-level">Level 1.2</span>
                                    </a>
                                    <ul class="collapse Level1.2-menu">
                                        <li>
                                            <a href="#" class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Level 2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </li>

                </ul>

                <div class="sidebar-alert text-center mx-5 my-12">
                    <div class="card-body bg-primary rounded bg-violet-50/50 dark:bg-zinc-700/60">
                        <img src="assets/images/giftbox.png" alt="" class="block mx-auto">
                        <div class="mt-4">
                            <h5 class="text-violet-500 mb-3 font-medium">Unlimited Access</h5>
                            <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                            <a href="#!" class="btn bg-violet-500 text-white border-transparent mt-6">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <div class="main-content">
        <div class="page-content dark:bg-zinc-700 min-h-screen">

            <div class="container-fluid px-[0.625rem]">

                <div class="grid grid-cols-1 mb-5">
                    <div class="flex items-center justify-between">
                        <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Starter Page</h4>
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                                        Components
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-500 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Starter Page</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- Footer Start -->
                <footer class="footer absolute bottom-0 right-0 left-0 border-t border-gray-50 py-5 px-5 bg-white dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());

                            </script> Minia
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href="" class="text-violet-500 underline">Themesbrand</a></div>

                    </div>
                </footer>
                <!-- end Footer -->
            </div>
        </div>
    </div>



    <div class="fixed ltr:right-5 rtl:left-5 bottom-10 flex flex-col gap-3 z-40 animate-bounce">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl" class="px-3.5 py-4 z-40 text-14 transition-all duration-300 ease-linear text-white bg-violet-500 hover:bg-violet-600 rounded-full font-medium" onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>
    </div>

    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>
