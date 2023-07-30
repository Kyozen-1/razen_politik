@extends('pengguna.layouts.app')
@section('title', 'Data Pemilih | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Data Pemilih / Dukungan Terkumpul</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Data Pemilih</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->

<!-- Content Start -->
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group position-relative">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-control">
                        <option value="">--- Pilih Provinsi ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kota_kabupaten" class="form-label">Kota / Kabupaten</label>
                    <select name="kota_kabupaten" id="kota_kabupaten" class="form-control">
                        <option value="">--- Kota / Kabupaten ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-control">
                        <option value="">--- Kecamatan ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <select name="kelurahan" id="kelurahan" class="form-control">
                        <option value="">--- Kelurahan ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="dapil" class="form-label">Dapil</label>
                    <select name="dapil" id="dapil" class="form-control">
                        <option value="">--- Dapil ---</option>
                    </select>
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
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Wilayah</th>
                    <th>No HP</th>
                    <th>Aksi</th>
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
