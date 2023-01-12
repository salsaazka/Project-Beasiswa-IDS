@extends('layouts.base-home')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
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
                        <a class="nav-link" href="/form/submission">Form Pengajuan<a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/form/donor">Form Donatur<a>
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
                        <a href="/form/submission" class="text-white text-decoration-none">Donasi</a>
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
@endsection

@section('js')
@endsection
