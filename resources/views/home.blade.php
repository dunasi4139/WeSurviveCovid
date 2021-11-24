@extends('layouts.app')

@section('content')
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">WeSurviveCovid</span>
                        <h1 class="mb-3 mt-3">Solusi Anda Di Masa Pandemi Ini</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Jam Siap Melayani</span>
                            <h4 class="mb-3">Bantuan Covid Dari Dokter</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
                            <a href="appoinment.html" class="btn btn-main btn-round-full">Segera Lihat Tips anda Tricks</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Jadwal Vaksinasi</span>
                            <h4 class="mb-3">Jam Rata Rata Vaksinasi</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-user"></i>
                            </div>
                            <span>Sharing Sesama</span>
                            <h4 class="mb-3">Postingan Pengalaman Covid</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('images/about/img-3.jpg') }} " alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Artikel</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Postingan</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('images/about/img-3.jpg') }} " alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ asset('images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Tempat <br>Vaksinasi</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Penghargaan Kami</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clients-logo">
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/1.png') }} " alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/5.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/6.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/3.png') }} alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/5.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="client-thumb">
                        <img src="{{ asset('images/about/6.png') }} alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Start -->


@endsection
