<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parkir Kampus - Sistem Manajemen Parkir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.links')

</head>

<body>

    @include('layouts.navbar')

    <div class="hero-wrap ftco-degree-bg"
        style="background-image: url('{{ asset('assets/landing-page/images/gedung-a.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Sistem Manajemen Parkir Kampus yang Cepat &amp; Mudah</h1>
                        <p style="font-size: 18px;">Temukan lokasi parkir terbaik di kampus kami dengan layanan yang
                            efisien dan mudah digunakan. Daftarkan kendaraan Anda sekarang dan nikmati kemudahan parkir
                            di kampus.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="#" class="request-form ftco-animate bg-primary">
                                <h2>Parkir Kendaraan Anda</h2>
                                <div class="form-group">
                                    <label for="" class="label">Lokasi Parkir</label>
                                    <input type="text" class="form-control" placeholder="Nama Kampus atau Gedung">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Tanggal Parkir</label>
                                    <input type="text" class="form-control" id="park_date" placeholder="Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Waktu Parkir</label>
                                    <input type="text" class="form-control" id="park_time" placeholder="Waktu">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Pesan Tempat Parkir"
                                        class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Cara Mudah untuk Mengelola Parkir Kendaraan Anda</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Lokasi Parkir</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Dapatkan Penawaran Terbaik</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reservasi Tempat Parkir</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Reservasi Tempat Parkir Anda</a>
                                </p>
                            </div>
                        </div>
                    </div>
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


    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="10">0</strong>
                            <span>Lokasi <br>Kampus</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="9">0</strong>
                            <span>Total <br>Area Parkir</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="123">0</strong>
                            <span>Pengguna <br>Terdaftar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="8">0</strong>
                            <span>Layanan <br>Parkir</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate my-5">
                    <span class="subheading">Apa yang Kami Tawarkan</span>
                    <h2 class="mb-2">Lokasi Area Parkir</h2>
                </div>
            </div>
            <h3 class="mb-3 text-center ftco-animate">Area Parkir A</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/a2.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/a4.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/a5.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/a6.jpg') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="my-3 text-center ftco-animate">Area Parkir B1</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b1-1.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b1-2.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b1-3.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b1-5.jpg') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="my-3 text-center ftco-animate">Area Parkir B2</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b2-2.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b2-1.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b2-depan1.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b2-depan3.jpg') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="my-3 text-center ftco-animate">Area Parkir B3</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b3-1.jpg') }});">
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b3-3.jpg') }});">
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b3-2.jpg') }});">
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url({{ asset('assets/landing-page/images/b3-4.jpg') }});">
                                </div>
                                <!-- <div class="text">
                                    <h2 class="mb-0"><a href="#">Parkir Gedung B2</a></h2>
                                </div> -->
                            </div>
                        </div>
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



    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-3">Pengguna Kami yang Puas</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/landing-page/images/person_1.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Sistem parkir kampus ini sangat membantu saya menemukan tempat
                                        parkir dengan mudah dan cepat.</p>
                                    <p class="name">Budi Santoso</p>
                                    <span class="position">Mahasiswa</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/landing-page/images/person_2.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Parkir di kampus menjadi lebih teratur dan aman berkat layanan
                                        ini. Sangat direkomendasikan!</p>
                                    <p class="name">Arif Rahman</p>
                                    <span class="position">Dosen</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/landing-page/images/person_3.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Layanan parkir kampus yang sangat efisien, membantu menghemat
                                        waktu saya setiap hari.</p>
                                    <p class="name">Heru Budiaman</p>
                                    <span class="position">Staf</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/landing-page/images/person_4.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Saya merasa lebih aman memarkir kendaraan di kampus berkat sistem
                                        parkir yang baik ini.</p>
                                    <p class="name">Ahmad Fauzi</p>
                                    <span class="position">Mahasiswa</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2"
                                    style="background-image: url({{ asset('assets/landing-page/images/person_3.jpg') }})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Aplikasi parkir kampus ini sangat membantu mengelola area parkir
                                        dengan lebih baik.</p>
                                    <p class="name">Asep Kurnia</p>
                                    <span class="position">Mahasiswa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts/footer');

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
