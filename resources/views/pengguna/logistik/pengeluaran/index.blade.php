@extends('pengguna.layouts.app')
@section('title', 'Pengeluaran Barang | Logistik | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Pengeluaran Barang</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Logistik</a></li>
                <li class="breadcrumb-item"><a href="#">Pengeluaran Barang</a></li>
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
                    <th>Tanggal Dibuat</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Keluar</th>
                    <th>Keterangan</th>
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
