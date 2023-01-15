@extends('layouts.base-home')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
@endsection

@section('content')
    {{-- Navbar --}}

    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" id="#">
                <img src="{{ asset('assets/img/logo-wk.png') }}" alt="LogoWk" class="logoFan">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-1 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Program Beasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prosedur<a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex flex-column-reverse flex-md-row align-items-center w-100">
            <div class="w-100 w-md-50 mt-3 mt-md-0 text-center text-md-start">
                <h1 class="text-primary">Program Beasiswa</h1>
                <h1>SMK Wikrama Bogor</h1>
                <p class="card-text pe-0 pe-md-5 text-muted">
                    Beasiswa adalah bantuan biaya khususnya dalam bidang pendidikan sehingga seorang pelajar bisa mengikuti kegiatan belajar dengan biaya yang lebih ringan. Karena bersifat bantuan, besaran beasiswa yang diberikan ke penerima berbeda-beda, dapat berupa beasiswa penuh (full scholarship), beasiswa sebagian (partial scholarship) atau bantuan fasilitas tertentu saja yang menunjang pembelajaran.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start mt-4">
                    <button class="btn btn-donasi btn-primary me-1">
                        <a href="/form/donor" class="text-white text-decoration-none">Donasi</a>
                    </button>
                    <button class="btn btn-donasi-outline btn-outline-primary">
                        <a href="/form/submission" class="text-decoration-none">Ajukan Beasiswa</a>
                    </button>
                </div>
            </div>
            <div class="w-100 w-md-50">
                <img src="{{ asset('assets/img/animasi.png') }}" class="w-100" alt="" />
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 5rem">
        <div class="d-flex flex-column-reverse flex-md-row align-items-center w-100">
            <div class="w-100 w-md-50">
                <img src="{{ asset('assets/img/animasi.png') }}" class="w-100" alt="" />
            </div>
            <div class="w-100 w-md-50 mt-3 mt-md-0 text-center text-md-start">
                <h2 class="text-primary ms-3">Daftar Program Beasiswa</h2>
                <ol>
                    <li>Beasiswa Penghargaan Non-Akademik</li>
                    <li>Beasiswa Penghargaan Akademis</li>
                    <li>Beasiswa Program Bantuan</li>
                    <li>Beasiswa kedinasan</li>
                    <li>Beasiswa dari donor interasional</li>
                    <li>......</li>
                </ol>
                <div class="d-flex justify-content-center justify-content-md-start mt-4 ms-3">
                    <button class="btn btn-donasi-outline btn-outline-primary">
                        <a href="/form/submission" class="text-decoration-none">Lihat Lebih</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Countries Available-->
    <div class="container">
        <div class="wrapperCountryAvaialble">
            <div class="content">
                <div class="text">
                    <h1>You can send your plants to these countries.</h1>
                </div>

                <div class="wrapperImagesCountry">
                    <div class="lineCountry lineCountry1">
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                    </div>

                    <div class="lineCountry lineCountry2">
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                        <div class="country">
                            <img src="{{ asset('assets/img/animasi.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Countries Available-->
@endsection

@section('js')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script>
    $('.lineCountry1').slick({
        infinite:false,
        slidesToShow: 2.5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.lineCountry2').slick({
        slidesToShow: 2.5,
        infinite:false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>
@endsection
