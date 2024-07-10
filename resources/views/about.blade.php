<!DOCTYPE html>
<html lang="en">

<head>
    <title>About - Sistem Manajemen Parkir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.links')

</head>

<body>

    @include('layouts.navbar')


    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url({{ asset('assets/landing-page/images/gedung-a.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('assets/landing-page/images/about.webp') }});">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Selamat Datang di Sistem Parkir Kampus</h2>

                        <p>Sistem Parkir Kampus menyediakan solusi parkir yang aman dan nyaman untuk semua mahasiswa dan
                            staf. Kami berkomitmen untuk menyediakan layanan parkir yang efisien dengan berbagai
                            fasilitas yang mendukung kebutuhan parkir di lingkungan kampus.</p>
                        <p>Dengan lokasi parkir yang strategis dekat dengan setiap fakultas, kami memastikan Anda dapat
                            memarkir kendaraan dengan mudah dan cepat. Sistem kami memungkinkan Anda untuk melakukan
                            reservasi tempat parkir terlebih dahulu, sehingga Anda tidak perlu khawatir kehabisan tempat
                            parkir saat tiba di kampus.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Cari Lokasi Parkir</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Layanan Kami</span>
                    <h2 class="mb-3">Layanan Terbaru Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Parkir Harian</h3>
                            <p>Kami menyediakan layanan parkir harian dengan tarif terjangkau dan lokasi yang strategis
                                di seluruh area kampus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Reservasi Tempat Parkir</h3>
                            <p>Anda dapat melakukan reservasi tempat parkir secara online untuk memastikan ketersediaan
                                tempat saat Anda tiba.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Keamanan 24/7</h3>
                            <p>Keamanan area parkir dijamin dengan sistem pengawasan 24/7 untuk memastikan kendaraan
                                Anda aman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Layanan Bantuan</h3>
                            <p>Kami menyediakan layanan bantuan dan dukungan pelanggan yang siap membantu Anda kapan
                                saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-intro"
        style="background-image: url({{ asset('assets/landing-page/images/gedung-a1.png') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Apakah Anda Ingin Memiliki Tempat Parkir yang Terjamin? Jangan Lewatkan
                        Kesempatan Ini.</h2>
                    <a href="#" class="btn btn-primary btn-lg">Daftarkan Kendaraan Anda</a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('layouts.scripts')


</body>

</html>
