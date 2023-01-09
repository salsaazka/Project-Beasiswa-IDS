@extends('layouts.base-home')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
@endsection

@section('content')

     {{-- Navbar --}}

     <nav class="navbar navbar-expand-md navbar-light fixed-top bg-primary">
        <div class="container">
            <a class="navbar-brand" id="#">
                <img src="" alt="" class="logoFan">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-1 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" >Program Beasiswa</a>
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

    <div class="d-flex flex-row pt-5 mt-5">
        <div class="col-6 pt-2 mt-5 px-5">
            <div class="container m-5">
                <h1 class="banner-title text-primary">Program Beasiswa</h1>
                <h1 class="banner-title">SMK Wikrama Bogor</h1>
                <p class="card-text">
                    Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah
                </p>

            </div>
        </div>
        <div class="col-6 pt-5 ">
            <img src="{{ asset('assets/img/animasi.png') }}" class="banner-img" alt="" />
          </div>
    </div>
   
    
@endsection

@section('js')
@endsection