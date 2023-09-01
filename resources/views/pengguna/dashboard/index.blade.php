@extends('pengguna.layouts.app')
@section('title', 'Pengguna | Dashboard')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="{{ asset('leaflet/js/leaflet.textpath.js') }}"></script>

    <style>
        #map { height: 35rem; }
    </style>
@endsection

@section('content')

@php
    use Carbon\Carbon;
@endphp
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
        {{-- <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" /> --}}
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
                {{-- <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" /> --}}
                <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                    <div class="row">
                        <div class="col-8">
                            <div class="cta-3 mb-5">Tanggal Pemilihan</div>
                            <div class="cta-3 mb-5">{{ Carbon::parse($pemilu->tgl_pemilihan)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card mb-2">
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Countdown Pemilihan</h5>
                    {{-- @php
                        $targetDate = strtotime($pemilu->tgl_pemilihan);
                        // dd($targetDate);
                        $timeLeft = $targetDate - time();

                        $days = floor($timeLeft / (60 * 60 * 24));
                        $timeLeft %= (60 * 60 * 24);

                        $hours = floor($timeLeft / (60 * 60));
                        $timeLeft %= (60 * 60);

                        $mins = floor($timeLeft / (60 * 60));
                        $timeLeft %= (60);

                    @endphp --}}
                    <h5 class="card-title text-danger text-uppercase mb-3">
                        {{-- {{$days}}:{{$hours}}:{{$mins}}:{{$timeLeft}} --}}
                        <p id="countdown"></p>
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
                    <p class="heading mb-1">3789</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="arrow-bottom" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah TPS</p>
                    <p class="heading mb-1">2455</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="user" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah Relawan</p>
                    <p class="heading mb-1">1000</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-3">
            <div class="card sh-19">
                <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                    <i data-acorn-icon="user" class="text-primary mb-3"></i>
                    <p class="heading mb-1">Jumlah Pendukung</p>
                    <p class="heading mb-1">903</p>
                </div>
            </div>
        </div>
    </div>
</section>

<h2 class="small-title mt-5">Pasangan Calon</h2>

<h2 class="small-title mt-5">Total Donasi</h2>

<section class="scroll-section">
    <div class="card w-100 sh-25 sh-sm-19">
        {{-- <img src="{{ asset('acorn/acorn-elearning-portal/img/banner/cta-wide-2.webp') }}" class="card-img h-100" alt="card image" /> --}}
        <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
            <div class="row">
                <div class="col-8">
                    <div class="cta-3 text-primary">Total Donasi Masuk</div>
                    <div class="cta-3 text-primary mt-5">Rp. 139.000.000, 00</div>
                </div>
            </div>
        </div>
    </div>
</section>

<h2 class="small-title mt-5">Hasil Quick Count dan Real Count</h2>
<div class="row mt-3 mb-3">
    <!-- Line Chart Start -->
    <div class="col-12 col-xl-6">
        <section class="scroll-section" id="lineChartTitle">
            <h2 class="small-title">Hasil Quick Count</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="sh-35" id="grafik_quick_count">
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
                    <div class="sh-35" id="grafik_real_count">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Area Chart End -->
</div>

<div id="map"></div>
<!-- Content End -->
@endsection

@section('js')
<script src="{{ asset('js/apexcharts.js') }}"></script>
<script>
    var countDownDate = "{{strtotime($pemilu->tgl_pemilihan)}}" + "000";
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countdown").innerHTML = days + " : " + hours + " : "
        + minutes + " : " + seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
        clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);

    const map = L.map('map').setView([-7.6565089,111.5463433], 15);
    var popup = L.popup();
            googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            }).addTo(map);
    var marker;
    var konten_html;

    $(document).ready(function(){
        var grafik_quick_count = {
            series: [100, 700, 555],
            chart: {
                type: 'donut',
            },
            labels: ['PDIP', 'GOLKAR', 'NASDEM'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart_grafik_quick_count = new ApexCharts(document.querySelector("#grafik_quick_count"), grafik_quick_count);
        chart_grafik_quick_count.render();

        var grafik_real_count = {
            series: [100, 700, 555],
            chart: {
                type: 'donut',
            },
            labels: ['PDIP', 'GOLKAR', 'NASDEM'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart_grafik_real_count = new ApexCharts(document.querySelector("#grafik_real_count"), grafik_real_count);
        chart_grafik_real_count.render();

        marker = L.marker([-7.6565089, 111.5463433], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.655488, 111.537739], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.650214, 111.546279], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.647875, 111.539370], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.647875, 111.539370], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.663995, 111.561728], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.647364, 111.558124], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.643545, 111.531203], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.637100, 111.543928], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.663935, 111.521281], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.613493, 111.554129], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.606371, 111.522032], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.626937, 111.524651], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });

        marker = L.marker([-7.626204, 111.528344], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });
        marker = L.marker([-7.643109, 111.519481], {icon:L.icon({
            iconUrl: "{{asset('images/logo-partai/636ce094d18e6-221110.png')}}",
            iconSize:     [30, 35], // size of the icon
            shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        })}).addTo(map).on('click', function(e){
            konten_html = '<div>';
                konten_html += '<p>PDIP</p>';
                konten_html += '<p>Kelurahan/Desa: Munggut</p>';
                konten_html += '<p>Laki - Laki: 1000</p>';
                konten_html += '<p>Laki - Laki: 1100</p>';
            konten_html += '</div>';
            popup
                .setLatLng(e.latlng)
                .setContent(konten_html)
                .openOn(map);
        });
    });
</script>
@endsection
