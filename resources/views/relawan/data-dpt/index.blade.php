@extends('relawan.layouts.app')
@section('title', 'Data DPT | Relawan')

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
        <h1 class="mb-0 pb-0 display-4" id="title">Data DPT</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Data DPT</a></li>
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
                    <label for="provinsi_id" class="form-label">Provinsi</label>
                    <select name="provinsi_id" id="provinsi_id" class="form-control">
                        <option value="">--- Provinsi ---</option>
                        @foreach ($provinsi as $id => $nama)
                            <option value="{{$id}}">{{$nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kabupaten_kota_id" class="form-label">Kota / Kabupaten</label>
                    <select name="kabupaten_kota_id" id="kabupaten_kota_id" class="form-control" disabled>
                        <option value="">--- Kota / Kabupaten ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kecamatan_id" class="form-label">Kecamatan</label>
                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" disabled>
                        <option value="">--- Kecamatan ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="kelurahan_id" class="form-label">Kelurahan</label>
                    <select name="kelurahan_id" id="kelurahan_id" class="form-control" disabled>
                        <option value="">--- Kelurahan ---</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group position-relative">
                    <label for="dapil_id" class="form-label">Dapil</label>
                    <select name="dapil_id" id="dapil_id" class="form-control" disabled>
                        <option value="">--- Dapil ---</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12" style="text-align:right">
        <a href="{{ asset('template/template_impor_dpt_manual.xlsx') }}" class="btn btn-outline-secondary waves-effect waves-light" title="File Template"><i class="fas fa-file-excel"></i></a>
        <button class="btn btn-outline-success waves-effect waves-light" type="button" data-bs-toggle="modal" data-bs-target="#imporModal" title="Impor Data"><i class="fas fa-file excel"></i></button>
    </div>
</div>

<div class="data-table-rows slim">
    <!-- Table Start -->
    <div class="data-table-responsive-wrapper">
        <table id="dpt_table" class="data-table w-100">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>RT / RW</th>
                    <th widht="20%">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
<div id="imporModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addEditModalLabel">Impor Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form class="form-horizontal" action="{{ route('relawan.data-dpt.impor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="impor_provinsi_id" class="form-label">Provinsi</label>
                                <select id="impor_provinsi_id" class="form-control">
                                    <option value="">--- Pilih Provinsi ---</option>
                                    @foreach ($provinsi as $id => $nama)
                                        <option value="{{$id}}">{{$nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="impor_kabupaten_kota_id" class="form-label">Kabupaten Kota</label>
                                <select id="impor_kabupaten_kota_id" class="form-control" disabled>
                                    <option value="">--- Pilih Kabupaten Kota ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="impor_kecamatan_id" class="form-label">Kecamatan</label>
                                <select id="impor_kecamatan_id" class="form-control" disabled>
                                    <option value="">--- Pilih Kecamatan ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="impor_dapil_id" class="form-label">Dapil</label>
                                <select name="impor_dapil_id" id="impor_dapil_id" class="form-control" disabled required>
                                    <option value="">--- Pilih Dapil ---</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="kode" class="form-label">File Excel</label>
                        <input type="file" class="dropify" name="file_excel" id="file_excel" data-height="150" data-allowed-file-extensions="xlsx" data-show-errors="true">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect width-md waves-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect width-md waves-light">Save</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="detail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="detail-title">Detail Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="form-label">Data</label>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_dapil" class="form-label">Dapil</label>
                            <input type="text" id="detail_dapil" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_nama" class="form-label">Nama</label>
                            <input type="text" id="detail_nama" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_email" class="form-label">Email</label>
                            <input type="text" id="detail_email" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_no_hp" class="form-label">No Hp</label>
                            <input type="text" id="detail_no_hp" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <input type="text" id="detail_jenis_kelamin" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_nik" class="form-label">NIK</label>
                            <input type="text" id="detail_nik" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_status_pemilih" class="form-label">Status Pemilih</label>
                            <input type="text" id="detail_status_pemilih" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                <label class="form-label">Alamat</label>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_provinsi" class="form-label">Provinsi</label>
                            <input type="text" id="detail_provinsi" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_kabupaten_kota" class="form-label">Kabupaten / Kota</label>
                            <input type="text" id="detail_kabupaten_kota" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" id="detail_kecamatan" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_kelurahan" class="form-label">Kelurahan</label>
                            <input type="text" id="detail_kelurahan" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_rt_rw" class="form-label">RT / RW</label>
                            <input type="text" id="detail_rt_rw" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-3 position-relative">
                            <label for="detail_alamat" class="form-label">Alamat</label>
                            <textarea id="detail_alamat" rows="5" class="form-control" disabled></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirm">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center" style="margin: 0;">Apakah anda yakin menghapus?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger waves-effect width-md waves-light">Ok</button>
                <button class="btn btn-primary waves-effect width-md waves-light" type="button" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
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
        $(document).ready(function(){
            $('.dropify').dropify();

            dpt_datatable();
            function dpt_datatable(provinsi_id = '', kabupaten_kota_id = '', kecamatan_id = '', kelurahan_id = '', dapil_id = '')
            {
                var dataTables = $('#dpt_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('relawan.data-dpt.index') }}",
                        data: {
                            provinsi_id : provinsi_id,
                            kabupaten_kota_id : kabupaten_kota_id,
                            kecamatan_id : kecamatan_id,
                            kelurahan_id :kelurahan_id,
                            dapil_id : dapil_id
                        }
                    },
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            searchable: false,
                            orderable: false
                        },
                        {
                            data: 'nik',
                            name: 'nik'
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'jenis_kelamin',
                            name: 'jenis_kelamin'
                        },
                        {
                            data: 'alamat',
                            name: 'alamat'
                        },
                        {
                            data: 'rt_rw',
                            name: 'rt_rw'
                        },
                        {
                            data: 'aksi',
                            name: 'aksi',
                            orderable: false
                        },
                    ]
                });
            }

            $('#provinsi_id').select2();

            $('#kabupaten_kota_id').select2();

            $('#kecamatan_id').select2();

            $('#kelurahan_id').select2();

            $('#dapil_id').select2();

            $('#impor_provinsi_id').select2({
                dropdownParent: $("#imporModal")
            });

            $('#impor_kabupaten_kota_id').select2({
                dropdownParent: $("#imporModal")
            });

            $('#impor_kecamatan_id').select2({
                dropdownParent: $("#imporModal")
            });

            $('#impor_dapil_id').select2({
                dropdownParent: $("#imporModal")
            });

            $('#provinsi_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();
                var dapil_id = $('#dapil_id').val();

                $('#dpt_table').DataTable().destroy();
                dpt_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id, dapil_id);
            });

            $('#kabupaten_kota_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();
                var dapil_id = $('#dapil_id').val();

                $('#dpt_table').DataTable().destroy();
                dpt_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id, dapil_id);
            });

            $('#kecamatan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();
                var dapil_id = $('#dapil_id').val();

                $('#dpt_table').DataTable().destroy();
                dpt_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id, dapil_id);
            });

            $('#kelurahan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();
                var dapil_id = $('#dapil_id').val();

                $('#dpt_table').DataTable().destroy();
                dpt_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id, dapil_id);
            });

            $('#dapil_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();
                var dapil_id = $('#dapil_id').val();

                $('#dpt_table').DataTable().destroy();
                dpt_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id, dapil_id);
            });
        });

        $('#provinsi_id').on('change', function(){
            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('relawan.get-data.kabupaten') }}",
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
                    url: "{{ route('relawan.get-data.kecamatan') }}",
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
                var dapil_provinsi_id = $('#provinsi_id').val();
                var dapil_kabupaten_kota_id = $('#kabupaten_kota_id').val();

                $.ajax({
                    url: "{{ route('relawan.get-data.kelurahan') }}",
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
                        if(state_kelurahan_id != '')
                        {
                            $('[name="kelurahan_id"]').val(state_kelurahan_id).trigger('change');
                        }
                    }
                });

                $.ajax({
                    url: "{{ route('relawan.data-dpt.get-data-dapil') }}",
                    method: 'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        provinsi_id : dapil_provinsi_id,
                        kabupaten_kota_id : dapil_kabupaten_kota_id,
                        kecamatan_id : $(this).val(),
                    },
                    success: function(response){
                        $('#dapil_id').empty();
                        $('#dapil_id').prop('disabled', false);
                        $('#dapil_id').append('<option value="">--- Dapil ---</option>');
                        $.each(response, function(id, nama){
                            $('#dapil_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#kelurahan_id').empty();
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                $('#dapil_id').empty();
                $('#dapil_id').prop('disabled', true);
                $('#dapil_id').append('<option value="">--- Dapil ---</option>');
            }
        });

        $('#impor_provinsi_id').on('change', function(){
            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('relawan.get-data.kabupaten') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:$(this).val()
                    },
                    success: function(response){
                        $('#impor_kabupaten_kota_id').empty();
                        $('#impor_kecamatan_id').empty();
                        $('#impor_kabupaten_kota_id').prop('disabled', false);
                        $('#impor_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                        $('#impor_kecamatan_id').prop('disabled', true);
                        $('#impor_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $.each(response, function(id, nama){
                            $('#impor_kabupaten_kota_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#impor_kabupaten_kota_id').empty();
                $('#impor_kecamatan_id').empty();
                $('#impor_kelurahan_id').empty();
                $('#impor_kabupaten_kota_id').prop('disabled', true);
                $('#impor_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                $('#impor_kecamatan_id').prop('disabled', true);
                $('#impor_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
            }
        });

        $('#impor_kabupaten_kota_id').on('change', function(){
            if($(this).val() != '')
            {
                $.ajax({
                    url: "{{ route('relawan.get-data.kecamatan') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:$(this).val()
                    },
                    success: function(response){
                        $('#impor_kecamatan_id').empty();
                        $('#impor_kecamatan_id').prop('disabled', false);
                        $('#impor_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $.each(response, function(id, nama){
                            $('#impor_kecamatan_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#impor_kecamatan_id').empty();
                $('#impor_kecamatan_id').prop('disabled', true);
                $('#impor_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
            }
        });

        $('#impor_kecamatan_id').on('change', function(){
            if($(this).val() != '')
            {
                var dapil_provinsi_id = $('#impor_provinsi_id').val();
                var dapil_kabupaten_kota_id = $('#impor_kabupaten_kota_id').val();

                $.ajax({
                    url: "{{ route('relawan.data-dpt.get-data-dapil') }}",
                    method: 'POST',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        provinsi_id : dapil_provinsi_id,
                        kabupaten_kota_id : dapil_kabupaten_kota_id,
                        kecamatan_id : $(this).val(),
                    },
                    success: function(response){
                        $('#impor_dapil_id').empty();
                        $('#impor_dapil_id').prop('disabled', false);
                        $('#impor_dapil_id').append('<option value="">--- Dapil ---</option>');
                        $.each(response, function(id, nama){
                            $('#impor_dapil_id').append(new Option(nama, id));
                        });
                    }
                });
            } else {
                $('#impor_dapil_id').empty();
                $('#impor_dapil_id').prop('disabled', true);
                $('#impor_dapil_id').append('<option value="">--- Dapil ---</option>');
            }
        });

        $(document.body).on('click', '.detail', function(){
            var id = $(this).attr('id');
            var url = "{{ route('relawan.data-dpt.show', ['id' => ":id"]) }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    $('#detail-title').text('Detail Data');
                    $('#detail_dapil').val(data.result.nama_dapil);
                    $('#detail_email').val(data.result.email);
                    $('#detail_no_hp').val(data.result.no_hp);
                    $('#detail_jenis_kelamin').val(data.result.jenis_kelamin);
                    $('#detail_nik').val(data.result.nik);
                    $('#detail_status_pemilih').val(data.result.status_pemilih);
                    $('#detail_alamat').val(data.result.alamat);
                    $('#detail_rt_rw').val(data.result.rt_rw);
                    $('#detail_provinsi').val(data.result.nama_provinsi);
                    $('#detail_kabupaten_kota').val(data.result.nama_kabupaten_kota);
                    $('#detail_kecamatan').val(data.result.nama_kecamatan);
                    $('#detail_kelurahan').val(data.result.nama_kelurahan);
                    $('#detail_nama').val(data.result.nama);
                    $('#detail').modal('show');
                }
            });
        });

        var user_id;
        $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('.modal-title').text('Konfirmasi');
            $('#ok_button').prop('disabled', false);
            $('#confirmModal').modal('show');
            $('#ok_button').text('Ok');
        });

        $('#ok_button').click(function(){
            var url = "{{ route('relawan.data-dpt.destroy', ['id' => ":user_id"]) }}";
            url = url.replace(":user_id", user_id);
            $.ajax({
                url: url,
                beforeSend: function(){
                    $('#ok_button').text('Deleting....');
                    $('#ok_button').prop('disabled', true);
                },
                success: function(data)
                {
                    $('#ok_button').prop('disabled', false);
                    $('#confirmModal').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil di hapus',
                        showConfirmButton: true
                    });
                    $('#master_kelurahan_table').DataTable().ajax.reload();
                }
            });
        });
    </script>
@endsection
