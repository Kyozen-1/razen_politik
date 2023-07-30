@extends('pengguna.layouts.app')
@section('title', 'Pengguna | Dashboard')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Pengguna | Dashboard</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ route('pengguna.dashboard.index') }}">Dashboard</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<section class="scroll-section">
    <div class="card w-100 sh-25 sh-sm-19">
        <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" />
        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
            <div class="row">
                <div class="col-8">
                    <div class="cta-3 text-black">Selamat Datang, {{ Auth::user()->name }}</div>
                    <div class="mb-3 cta-3 text-primary">Sekarang Kamu Masih Menggunakan Fitur Trial</div>
                    <div class="row gx-2">
                        <div class="col-12 col-sm-auto">
                            <a href="#" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                            <span>Upgrade Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="scroll-section mt-5">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card w-100 h-100">
                <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" />
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="row">
                        <div class="col-8">
                            <div class="cta-3 text-black mb-5">Tanggal Pemilihan</div>
                            <div class="cta-3 text-black mb-5">-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card mb-2">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Countdown Pemilihan</h5>
                    <h5 class="card-title text-danger text-uppercase mb-3">
                        00:00:00:00
                    </h5>
                    <h6 class="card-subtitle mb-3 text-alternate">Hari - Jam - Menit - Detik</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="scroll-section mt-5">
    <div class="row">
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="user" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah DPT</p>
                    <p class="heading mb-1">0</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="arrow-bottom" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah TPS</p>
                    <p class="heading mb-1">0</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="user" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah Relawan</p>
                    <p class="heading mb-1">0</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="user" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah Pendukung</p>
                    <p class="heading mb-1">0</p>
                </div>
            </div>
        </div>
    </div>
</section>

<h2 class="small-title mt-5">Pasangan Calon</h2>

<h2 class="small-title mt-5">Total Donasi</h2>

<section class="scroll-section">
    <div class="card w-100 sh-25 sh-sm-19">
        <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" />
        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
            <div class="row">
                <div class="col-8">
                    <div class="cta-3 text-primary">Total Donasi Masuk</div>
                    <div class="cta-3 text-primary mt-5">Rp 0</div>
                </div>
            </div>
        </div>
    </div>
</section>

<h2 class="small-title mt-5">Hasil Quick Count dan Real Count</h2>
<div class="row mt-3">
    <!-- Line Chart Start -->
    <div class="col-12 col-xl-6">
        <section class="scroll-section" id="lineChartTitle">
            <h2 class="small-title">Hasil Quick Count</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="sh-35">
                    <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Line Chart End -->

    <!-- Area Chart Start -->
    <div class="col-12 col-xl-6">
        <section class="scroll-section" id="areaChartTitle">
            <h2 class="small-title">Hasil Real Count</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="sh-35">
                    <canvas id="areaChart"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Area Chart End -->
</div>
<!-- Content End -->
@endsection

@section('js')

@endsection
