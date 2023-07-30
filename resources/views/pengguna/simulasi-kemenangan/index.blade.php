@extends('pengguna.layouts.app')
@section('title', 'Simulasi Target Suara Kemenangan | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Simulasi Target Suara Kemenangan</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Simulasi Target Suara Kemenangan</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<div class="row mb-3">
    <div class="col-md-6 col-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3>Parameter Simulasi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group position-relative mb-3">
                            <label for="estimasi_partisipasi_pemilih" class="form-label">Estimasi Partisipasi Pemilih (%)</label>
                            <input type="text" class="form-control" id="estimasi_partisipasi_pemilih">
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label for="target_menang" class="form-label">Target Menang (%)</label>
                            <input type="text" class="form-control" id="target_menang">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card mb-3">
            <div class="card-header">
                <h3>Data Simulasi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <h5>Jumlah DPT</h5>
                                <span></span>
                            </div>
                            <div class="col-6">
                                <h5>Jumlah Paslon</h5>
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-6">
                                <h5>Estimasi Partisipasi Pemilih (%)</h5>
                                <span>0</span>
                            </div>
                            <div class="col-6">
                                <h5>Target Suara (%)</h5>
                                <span>0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h4>Target Kemenangan</h4>
                                <mark>0%</mark>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="data_tps_table" class="data-table w-100">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Jumlah DPT</th>
                    <th>Estimasi Pemilih (100%)</th>
                    <th>Target Suara</th>
                    <th>Jumlah Pendukung</th>
                    <th>Presentase</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
@endsection

@section('js')

@endsection
