@extends('layouts.app')

@section('title', '')

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

                        <p class="mb-4 pr-5">Berbagai Informasi Tentang Postingan, Artikel, Saran, & Tempat Vaksinasi Terkait Permasalahan Pandemi Covid-19 Dapat Dilihat Semua Pada WeSurviveCovid!</p>
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
                            <p class="mb-4">Dapatkan bantuan dari banyak dokter bersertifikat kami.</p>
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
                            <p>Dapatkan berbagai macam informasi bermanfaat untuk mempermudah kehidupan di masa pandemi.</p>
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
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Artikel</h2>
                        <p class="mt-4 mb-5">Kami menyediakan fitur dimana anda dapat melihat artikel mengenai saran dan bantuan serta fakta-fakta menarik tentang Covid-19 yang disajikan oleh admin serta dokter-dokter yang terpercaya dan bersertifikat.</p>

                        <a href="{{ route('article.index') }}" class="btn btn-main-2 btn-round-full btn-icon">Artikel<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <div class="d-flex" style="flex-direction: column; justify-content: end; align-items: end">
                            <h2 class="title-color mr-0 ml-auto">Postingan</h2>
                            <p class="mt-4 mb-5" style="text-align: end">Postingan adalah wadah dimana kami dapat menyediakan pengalaman dari orang yang pernah terjangkit Covid-19 ataupun orang yang serdang terjangkit.</p>

                            <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Postingan<i class="icofont-simple-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Tempat <br>Vaksinasi</h2>
                        <p class="mt-4 mb-5">Temukan tempat vaksinasi di sekitar tempat anda berada dengan mudah dengan fitur pencarian lokasi vaksinasi kami.</p>

                        <a href="{{ route('vaccine.index') }}" class="btn btn-main-2 btn-round-full btn-icon">Cari Tempat<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="about-img mt-4 mt-lg-0">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <div class="d-flex" style="flex-direction: column; justify-content: end; align-items: end">
                            <h2 class="title-color mr-0 ml-auto">Saran</h2>
                            <p class="mt-4 mb-5" style="text-align: end">Wadah dimana anda dapat melihat berbagai macam saran yang tentunya akan membantu anda dalam menjalani pandemi Covid-19.</p>

                            <a href="{{ route('suggestion.index') }}" class="btn btn-main-2 btn-round-full btn-icon">Saran<i class="icofont-simple-right ml-3"></i></a>
                        </div>
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
                        <img src="{{ asset('images/about/6.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer Start -->


@endsection
