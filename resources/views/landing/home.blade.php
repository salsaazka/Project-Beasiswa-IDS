@extends('layouts.base-home')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="{{ url('assets/css/carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/carousel/owl.theme.default.min.css') }}">
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
                        <a class="nav-link" href="#program">Program Beasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#dokumentasi">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prosedur">Prosedur<a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <!-- Cookie -->
                    <div class="fixed-bottom d-flex justify-content-end" style="bottom: 15px; right: 15px;">
                         <a href="https://wa.me/+6281909242411" class="btn-wa"><b>Chat Us</b> Now! <img src="../public/assets/image/whatsapp-logo-png-2260 1.png" alt=""></a>
                     </div>
                    <!-- End Cookie -->
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

    <div class="container" id="program" style="margin-top: 5rem">
        <div class="d-flex flex-column-reverse flex-md-row align-items-center w-100">
            <div class="w-65 w-md-20">
                <img src="{{ asset('assets/img/beasiswa.jpg') }}" class="w-75 " alt="" style="border-radius: 10px" />
            </div>
            <div class="w-35 w-md-50 mt-3 mt-md-0 ">
                <h2 class="text-primary ms-3">Daftar Program Beasiswa</h2>
                <ol>
                    <li>Beasiswa Penghargaan Non-Akademik</li>
                    <li>Beasiswa Penghargaan Akademis</li>
                    <li>Beasiswa Program Bantuan</li>
                    <li>Beasiswa Kedinasan</li>
                    <li>Beasiswa dari Donatur Interasional</li>
                    <li>......</li>
                </ol>
                <div class="d-flex justify-content-center justify-content-md-start mt-4 ms-3">
                    <button class="btn btn-donasi-outline btn-outline-primary">
                        <a href="/form/submission" class="text-decoration-none">Ajukan Disini!</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5" id="dokumentasi">
        <h2 class="text-center text-primary">Dokumentasi</h2>
        <div class="row mt-4">
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/img/foto5.JPG') }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- End Main Content --}}

    </div>
    <div class="mt-5 pb-2" id="prosedur">
        <h2 class="text-center text-primary">Prosedur</h2>
        <div class="row mt-4 px-3">
            <div class="card col-3 m-5 ">
                <img src="{{ asset('assets/img/p-kelTangguh.jpeg') }}" alt="">
            </div>
            <div class="card col-3 m-5">
                <img src="{{ asset('assets/img/p-talenta.jpeg') }}" alt="">
            </div>
            <div class="card col-3 m-5 ">
                <img src="{{ asset('assets/img/p-yatim & dhuafa.jpg') }}" alt="">
            </div>
        </div>
    </div>
    
@endsection

@section('js')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="{{ url('assets/js/owl.carousel.js') }}"></script>
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
            });
        </script>
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
