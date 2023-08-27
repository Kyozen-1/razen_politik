@extends('pengguna.layouts.app')
@section('title', 'Riwayat Kunjungan Relawan | Relawan | Pengguna')

@section('css')
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/fullcalendar.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <div class="table-responsive">
                        <table id="data_tps_table" class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Wilayah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>26 Juli 2023</td>
                                    <td>Kebonsari</td>
                                </tr>
                                <tr>
                                    <td>27 Juli 2023</td>
                                    <td>Geger</td>
                                </tr>
                                <tr>
                                    <td>28 Juli 2023</td>
                                    <td>Dolopo</td>
                                </tr>
                                <tr>
                                    <td>29 Juli 2023</td>
                                    <td>Dagangan</td>
                                </tr>
                                <tr>
                                    <td>30 Juli 2023</td>
                                    <td>Wungu</td>
                                </tr>
                                <tr>
                                    <td>31 Juli 2023</td>
                                    <td>Kare</td>
                                </tr>
                                <tr>
                                    <td>1 Agustus 2023</td>
                                    <td>Gemarang</td>
                                </tr>
                            </tbody>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
