@extends('pengguna.layouts.app')
@section('title', 'Hasil | Quick Count | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Hasil | Quick Count</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Quick Count</a></li>
                <li class="breadcrumb-item"><a href="#">Hasil</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="data_tps_table" class="data-table w-100">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Total</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Table End -->
</div>

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
</div>
<!-- Content End -->
@endsection

@section('js')

@endsection
