@extends('pengguna.layouts.app')
@section('title', 'Riwayat Kunjungan Relawan | Relawan | Pengguna')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}">
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select2-selection__rendered {
            line-height: 35px !important;
        }
        .select2-container .select2-selection--single {
            height: 41px !important;
        }
        .select2-selection__arrow {
            height: 36px !important;
        }
        .modal-dialog{
            pointer-events: all !important;
        }
    </style>
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
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="form-group position-relative">
                    <label for="provinsi_id" class="form-label">Provinsi</label>
                    <select name="provinsi_id" id="provinsi_id" class="form-control">
                        <option value="">--- Pilih Provinsi ---</option>
                        @foreach ($provinsi as $id => $nama)
                            <option value="{{$id}}">{{$nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group position-relative">
                    <label for="kabupaten_kota_id" class="form-label">Kabupaten / Kota</label>
                    <select name="kabupaten_kota_id" id="kabupaten_kota_id" class="form-control" disabled>
                        <option value="">--- Kabupaten / Kota ---</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group position-relative">
                    <label for="kecamatan_id" class="form-label">Kecamatan</label>
                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" disabled>
                        <option value="">--- Kecamatan ---</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group position-relative">
                    <label for="kelurahan_id" class="form-label">Kelurahan</label>
                    <select name="kelurahan_id" id="kelurahan_id" class="form-control" disabled>
                        <option value="">--- Kelurahan ---</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="riwayat_kunjungan_table" class="data-table w-100">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Nama Responden</th>
                    <th>Wilayah</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
@endsection

@section('js')
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/scrollspy.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/select2.full.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/tagify.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/dropzone.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/singleimageupload.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

            riwayat_kunjungan_datatable();
            function riwayat_kunjungan_datatable(provinsi_id='', kabupaten_kota_id='', kecamatan_id='', kelurahan_id='')
            {
                var dataTables = $('#riwayat_kunjungan_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('pengguna.relawan.riwayat-kunjungan.index') }}",
                        data: {
                            provinsi_id:provinsi_id,
                            kabupaten_kota_id:kabupaten_kota_id,
                            kecamatan_id:kecamatan_id,
                            kelurahan_id:kelurahan_id
                        }
                    },
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            searchable: false,
                            orderable: false
                        },
                        {
                            data: 'tgl_kunjungan',
                            name: 'tgl_kunjungan'
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'wilayah',
                            name: 'wilayah'
                        }
                    ]
                });
            }

            $('#provinsi_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#riwayat_kunjungan_table').DataTable().destroy();
                riwayat_kunjungan_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kabupaten_kota_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#riwayat_kunjungan_table').DataTable().destroy();
                riwayat_kunjungan_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kecamatan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#riwayat_kunjungan_table').DataTable().destroy();
                riwayat_kunjungan_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kelurahan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#riwayat_kunjungan_table').DataTable().destroy();
                riwayat_kunjungan_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#provinsi_id').select2();
            $('#kabupaten_kota_id').select2();
            $('#kecamatan_id').select2();
            $('#kelurahan_id').select2();
        });

        $('#provinsi_id').on('change', function(){
            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('pengguna.get-data.kabupaten') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:$(this).val()
                    },
                    success: function(response){
                        $('#kabupaten_kota_id').empty();
                        $('#kecamatan_id').empty();
                        $('#kelurahan_id').empty();
                        $('#kabupaten_kota_id').prop('disabled', false);
                        $('#kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                        $('#kecamatan_id').prop('disabled', true);
                        $('#kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $('#kelurahan_id').prop('disabled', true);
                        $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#kabupaten_kota_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#kabupaten_kota_id').empty();
                $('#kecamatan_id').empty();
                $('#kelurahan_id').empty();
                $('#kabupaten_kota_id').prop('disabled', true);
                $('#kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                $('#kecamatan_id').prop('disabled', true);
                $('#kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#kabupaten_kota_id').on('change', function(){
            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('pengguna.get-data.kecamatan') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:$(this).val()
                    },
                    success: function(response){
                        $('#kecamatan_id').empty();
                        $('#kelurahan_id').empty();
                        $('#kecamatan_id').prop('disabled', false);
                        $('#kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $('#kelurahan_id').prop('disabled', true);
                        $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#kecamatan_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#kecamatan_id').empty();
                $('#kelurahan_id').empty();
                $('#kecamatan_id').prop('disabled', true);
                $('#kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#kecamatan_id').on('change', function(){

            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('pengguna.get-data.kelurahan') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:$(this).val()
                    },
                    success: function(response){
                        $('#kelurahan_id').empty();
                        $('#kelurahan_id').prop('disabled', false);
                        $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#kelurahan_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#kelurahan_id').empty();
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });
    </script>
@endsection
