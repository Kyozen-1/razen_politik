@extends('pengguna.layouts.app')
@section('title', 'Data Pemilih | Pengguna')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

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
    <div class="table-responsive">
        <table id="data_tps_table" class="table table-striped table-bordered text-center">
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
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234567890123451</td>
                    <td>Linda</td>
                    <td>Kebonsari</td>
                    <td>123456789012</td>
                    <td>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
