@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Harga | Razen Politik')

@section('content')
@php
        use App\Models\LandingPageHarga;

        $harga = LandingPageHarga::first();

        $section_1 = json_decode($harga->section_1, true);
        $section_2 = json_decode($harga->section_2, true);
    @endphp
    <!-- About Us section start here -->
    <div id="section_1" class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{ asset('images/razen-politik/harga/'.$section_1['gambar']) }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">{{$section_1['judul']}}</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Our Principle Section Start here -->
    <div id="section_2" class="our-principle-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_2['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$section_2['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($section_2['konten'] as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <i class="{{$item['kode_ikon']}}"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">{{$item['judul']}}</h4>
                                <p>{{$item['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Principle Section End here -->
    <!-- Event items Section Start Here -->
    <div class="issues-around-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-single-items">
                        <div class="content">
                            <div class="post-mate" style="width: fit-content; height: fit-content;">
                                <h2 class="post-date">Biasa</h2>
                            </div>
                            <div class="subtitle">
                                <div class="location">
                                    <h4 class="title">Rp. 49.000.000,00 / 6 Bulan</h4>
                                </div>
                            </div>
                            <h4>
                                <ul>
                                    <li>50.000 maksimum relawan</li>
                                    <li>Dasbor</li>
                                    <li>Master Data TPS dan DPT</li>
                                    <li>Pasangan Calon</li>
                                    <li>Manajemen Donasi</li>
                                    <li>Manajemen Koordinator</li>
                                    <li>Manajemen Relawan Terbatas</li>
                                </ul>
                            </h4>
                            <div class="btn-wrapper">
                                <a href="event-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Beli Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-single-items">
                        <div class="content">
                            <div class="post-mate" style="width: fit-content; height: fit-content;">
                                <h2 class="post-date">Pro</h2>
                            </div>
                            <div class="subtitle">
                                <div class="location">
                                    <h4 class="title">Rp. 69.000.000,00 / 6 Bulan</h4>
                                </div>
                            </div>
                            <h4>
                                <ul>
                                    <li>50.000 maksimum relawan</li>
                                    <li>Dasbor</li>
                                    <li>Master Data TPS dan DPT</li>
                                    <li>Pasangan Calon</li>
                                    <li>Manajemen Donasi</li>
                                    <li>Manajemen Koordinator</li>
                                    <li>Manajemen Partai</li>
                                    <li>Manajemen Relawan Terbatas</li>
                                </ul>
                            </h4>
                            <div class="btn-wrapper">
                                <a href="event-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Beli Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="blog-pagination style-01">
                        <div class="blog-pagination style-01 margin-top-30">
                            <ul>
                                <li><a class="page-numbers" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">DPR RI</a></li>
                                <li><a class="page-numbers current" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">DPRD</a></li>
                                <li><a class="page-numbers" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">DPD RI</a></li>
                                <li><a class="page-numbers" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">Bupati</a></li>
                                <li><a class="page-numbers" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">Walikota</a></li>
                                <li><a class="page-numbers" style="width: fit-content; padding-left: 10px; padding-right: 10px;" href="#">Gubernur</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Items Section Start Here -->
@endsection
