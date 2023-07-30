@extends('pengguna.layouts.app')
@section('title', 'Riwayat Kunjungan Relawan | Relawan | Pengguna')

@section('css')
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/fullcalendar.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
@endsection

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Riwayat Kunjungan Relawan | Relawan</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Relawan</a></li>
                <li class="breadcrumb-item"><a href="#">Riwayat Kunjungan Relawan</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<div>
    <ul class="nav nav-tabs nav-tabs-line card-header-tabs responsive-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#first" role="tab" type="button" aria-selected="true">
                Jadwal Rute
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#second" role="tab" type="button" aria-selected="false">
                Riwayat Rute
            </button>
        </li>
    </ul>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="first" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div id="calendar"></div>
                                </div>
                            </div> <!-- end col -->
                        </div>  <!-- end row -->
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="second" role="tabpanel">
                <div class="data-table-rows slim">
                    <!-- Table Start -->
                    <div class="data-table-responsive-wrapper">
                        <table id="data_tps_table" class="data-table w-100">
                            <thead>
                                <tr>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Wilayah</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- Table End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection

@section('js')
<script src="{{ asset('js/fullcalendar.min.css') }}"></script>
<script src="{{ asset('js/jquery-ui.min.css') }}"></script>
<script src="{{ asset('js/moment.min.css') }}"></script>
@endsection
