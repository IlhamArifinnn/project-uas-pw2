<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parkir Locations - Sistem Manajemen Parkir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts/links')

</head>

<body>

    @include('layouts/navbar')


    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url({{ asset('assets/landing-page/images/gedung-a.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Parkir Locations <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Choose Your Parkir</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/a2.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/a4.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/a5.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b1-1.jpg') }});">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b1-2.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b1-3.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b2-2.jpg') }});">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b2-3.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b2-depan1.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b2-depan3.jpg') }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b3-2.jpg') }});">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url({{ asset('assets/landing-page/images/b3-3.jpg') }});">
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts/footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('layouts/scripts')

</body>

</html>
