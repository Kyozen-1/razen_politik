@extends('pengguna.layouts.app')
@section('title', 'Data Laporan Isu | Pengguna')

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
            <h1 class="mb-0 pb-0 display-4" id="title">Data Laporan Isu</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="#">Data Laporan Isu</a></li>
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
                        <select id="provinsi_id" class="form-control">
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
                        <select id="kabupaten_kota_id" class="form-control" disabled>
                            <option value="">--- Kota / Kabupaten ---</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group position-relative">
                        <label for="kecamatan_id" class="form-label">Kecamatan</label>
                        <select id="kecamatan_id" class="form-control" disabled>
                            <option value="">--- Kecamatan ---</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group position-relative">
                        <label for="kelurahan_id" class="form-label">Kelurahan</label>
                        <select id="kelurahan_id" class="form-control" disabled>
                            <option value="">--- Kelurahan ---</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12" style="text-align:right">
            <button class="btn btn-outline-primary waves-effect waves-light mr-2 item_create" type="button" data-bs-toggle="modal" data-bs-target="#addEditModal" title="Tambah Data" id="create"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <div class="data-table-rows slim">
        <!-- Table Start -->
        <div class="data-table-responsive-wrapper">
            <table id="monitoring_isu_table" class="data-table w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Isu</th>
                        <th>Judul Isu</th>
                        <th>Dampak</th>
                        <th>Tanggal</th>
                        <th>Pelapor</th>
                        <th>Ditanggapi Pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- Table End -->
    </div>
    <!-- Content End -->

    <div id="addEditModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addEditModalLabel">Tambah Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <form class="form-horizontal" id="monitoring_isu_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="jenis_isu_id" class="form-label">Jenis Isu</label>
                                            <select name="jenis_isu_id" id="jenis_isu_id" class="form-control" required>
                                                <option value="">--- Pilih ---</option>
                                                @foreach ($jenis_isu as $id => $nama)
                                                    <option value="{{$id}}">{{$nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="pelapor" class="form-label">Nama Pelapor</label>
                                            <input type="text" class="form-control" id="pelapor" name="pelapor" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="judul_isu" class="form-label">Judul Isu</label>
                                            <input type="text" class="form-control" id="judul_isu" name="judul_isu" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="dampak" class="form-label">Dampak</label>
                                            <textarea name="dampak" id="dampak" rows="5" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="tgl" class="form-label">Tanggal</label>
                                            <input type="date" name="tgl" id="tgl" class="form-control" required>
                                        </div>
                                    </div>
                                    <hr>
                                        <h2 class="small-title">Status Isu</h2>
                                    <hr>
                                    <div class="col-12" id="form_status_isu">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="status_isu" class="form-label">Status Isu</label>
                                            <select name="status_isu" id="status_isu" class="form-control" required>
                                                <option value="">--- Pilih ---</option>
                                                <option value="1">Sudah Ditanggapi</option>
                                                <option value="0">Belum Ditanggapi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="provinsi_id" class="form-label">Provinsi</label>
                                            <select name="provinsi_id" id="modal_provinsi_id" class="form-control" required>
                                                <option value="">--- Pilih ---</option>
                                                @foreach ($provinsi as $id => $nama)
                                                    <option value="{{$id}}">{{$nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="kabupaten_kota_id" class="form-label">Kabupaten Kota</label>
                                            <select name="kabupaten_kota_id" id="modal_kabupaten_kota_id" class="form-control" disabled required>
                                                <option value="">--- Pilih Kabupaten Kota ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="kecamatan_id" class="form-label">Kecamatan</label>
                                            <select name="kecamatan_id" id="modal_kecamatan_id" class="form-control" disabled required>
                                                <option value="">--- Pilih Kecamatan ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="kelurahan_id" class="form-label">Kelurahan</label>
                                            <select name="kelurahan_id" id="modal_kelurahan_id" class="form-control" disabled required>
                                                <option value="">--- Pilih Kelurahan ---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" rows="5" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="rt" class="form-label">RT</label>
                                            <input type="text" class="form-control" id="rt" name="rt" placeholder="ex: 001" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 position-relative form-group">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="text" class="form-control" id="rw" name="rw" placeholder="ex: 001" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect width-md waves-light" data-bs-dismiss="modal">Close</button>
                    <input type="hidden" name="aksi" id="aksi" value="Save">
                    <input type="hidden" name="hidden_id" id="hidden_id">
                    <button type="submit" name="aksi_button" id="aksi_button" class="btn btn-primary waves-effect width-md waves-light">Save</button>
                </div>
            </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div id="detail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="detail-title">Detail Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_jenis_isu" class="form-label">Jenis Isu</label>
                                        <input type="text" class="form-control" id="detail_jenis_isu" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_pelapor" class="form-label">Pelapor</label>
                                        <input type="text" class="form-control" id="detail_pelapor" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_judul_isu" class="form-label">Judul Isu</label>
                                        <input type="text" class="form-control" id="detail_judul_isu" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_dampak" class="form-label">Dampak</label>
                                        <p id="detail_dampak"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_tgl" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" id="detail_tgl" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_status_isu" class="form-label">Status Isu</label>
                                        <input type="text" class="form-control" id="detail_status_isu" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_tgl_ditanggapi" class="form-label">Tanggal Ditanggapi</label>
                                        <input type="text" class="form-control" id="detail_tgl_ditanggapi" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" id="detail_provinsi" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_kabupaten_kota" class="form-label">Kabupaten / Kota</label>
                                        <input type="text" class="form-control" id="detail_kabupaten_kota" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_kecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" id="detail_kecamatan" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_kelurahan" class="form-label">Kelurahan</label>
                                        <input type="text" class="form-control" id="detail_kelurahan" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_alamat" class="form-label">Alamat</label>
                                        <textarea name="detail_alamat" id="detail_alamat" rows="5" class="form-control" disabled></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_rt" class="form-label">RT</label>
                                        <input type="text" class="form-control" id="detail_rt" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group position-relative mb-3">
                                        <label for="detail_rw" class="form-label">RW</label>
                                        <input type="text" class="form-control" id="detail_rw" disabled>
                                    </div>
                                </div>
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
        var state_kabupaten_kota_id = '';
        var state_kecamatan_id = '';
        var state_kelurahan_id = '';
        $(document).ready(function(){
            $('.dropify').dropify();

            monitoring_isu_datatable();
            function monitoring_isu_datatable(provinsi_id = '', kabupaten_kota_id = '', kecamatan_id = '', kelurahan_id = '')
            {
                var dataTables = $('#monitoring_isu_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('pengguna.monitoring-isu.index') }}",
                        data: {
                            provinsi_id : provinsi_id,
                            kabupaten_kota_id : kabupaten_kota_id,
                            kecamatan_id : kecamatan_id,
                            kelurahan_id : kelurahan_id
                        }
                    },
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            searchable: false,
                            orderable: false
                        },
                        {
                            data: 'jenis_isu_id',
                            name: 'jenis_isu_id'
                        },
                        {
                            data: 'judul_isu',
                            name: 'judul_isu'
                        },
                        {
                            data: 'dampak',
                            name: 'dampak'
                        },
                        {
                            data: 'tgl',
                            name: 'tgl'
                        },
                        {
                            data: 'pelapor',
                            name: 'pelapor'
                        },
                        {
                            data: 'tgl_ditanggapi',
                            name: 'tgl_ditanggapi'
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

            $('#modal_provinsi_id').select2({
                dropdownParent: $("#addEditModal")
            });

            $('#modal_kabupaten_kota_id').select2({
                dropdownParent: $("#addEditModal")
            });

            $('#modal_kecamatan_id').select2({
                dropdownParent: $("#addEditModal")
            });

            $('#modal_kelurahan_id').select2({
                dropdownParent: $("#addEditModal")
            });

            $('#jenis_isu_id').select2({
                dropdownParent: $("#addEditModal")
            });

            $('#provinsi_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#monitoring_isu_table').DataTable().destroy();
                monitoring_isu_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kabupaten_kota_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#monitoring_isu_table').DataTable().destroy();
                monitoring_isu_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kecamatan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#monitoring_isu_table').DataTable().destroy();
                monitoring_isu_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });

            $('#kelurahan_id').change(function(){
                var provinsi_id = $('#provinsi_id').val();
                var kabupaten_kota_id = $('#kabupaten_kota_id').val();
                var kecamatan_id = $('#kecamatan_id').val();
                var kelurahan_id = $('#kelurahan_id').val();

                $('#monitoring_isu_table').DataTable().destroy();
                monitoring_isu_datatable(provinsi_id, kabupaten_kota_id, kecamatan_id, kelurahan_id);
            });
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
                        if(state_kabupaten_kota_id != '')
                        {
                            $('[name="kabupaten_kota_id"]').val(state_kabupaten_kota_id).trigger('change');
                        }
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
                        if(state_kecamatan_id != '')
                        {
                            $('[name="kecamatan_id"]').val(state_kecamatan_id).trigger('change');
                        }
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
                        if(state_kelurahan_id != '')
                        {
                            $('[name="kelurahan_id"]').val(state_kelurahan_id).trigger('change');
                        }
                    }
                });
            } else {
                $('#kelurahan_id').empty();
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#modal_provinsi_id').on('change', function(){
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
                        $('#modal_kabupaten_kota_id').empty();
                        $('#modal_kecamatan_id').empty();
                        $('#modal_kelurahan_id').empty();
                        $('#modal_kabupaten_kota_id').prop('disabled', false);
                        $('#modal_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                        $('#modal_kecamatan_id').prop('disabled', true);
                        $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $('#modal_kelurahan_id').prop('disabled', true);
                        $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#modal_kabupaten_kota_id').append(new Option(nama, id));
                        });
                        if(state_kabupaten_kota_id != '')
                        {
                            $('[name="kabupaten_kota_id"]').val(state_kabupaten_kota_id).trigger('change');
                        }
                    }
                });
            } else {
                $('#modal_kabupaten_kota_id').empty();
                $('#modal_kecamatan_id').empty();
                $('#modal_kelurahan_id').empty();
                $('#modal_kabupaten_kota_id').prop('disabled', true);
                $('#modal_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                $('#modal_kecamatan_id').prop('disabled', true);
                $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                $('#modal_kelurahan_id').prop('disabled', true);
                $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#modal_kabupaten_kota_id').on('change', function(){
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
                        $('#modal_kecamatan_id').empty();
                        $('#modal_kelurahan_id').empty();
                        $('#modal_kecamatan_id').prop('disabled', false);
                        $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                        $('#modal_kelurahan_id').prop('disabled', true);
                        $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#modal_kecamatan_id').append(new Option(nama, id));
                        });
                        if(state_kecamatan_id != '')
                        {
                            $('[name="kecamatan_id"]').val(state_kecamatan_id).trigger('change');
                        }
                    }
                });
            } else {
                $('#modal_kecamatan_id').empty();
                $('#modal_kelurahan_id').empty();
                $('#modal_kecamatan_id').prop('disabled', true);
                $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                $('#modal_kelurahan_id').prop('disabled', true);
                $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#modal_kecamatan_id').on('change', function(){

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
                        $('#modal_kelurahan_id').empty();
                        $('#modal_kelurahan_id').prop('disabled', false);
                        $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                        $.each(response, function(id, nama){
                            $('#modal_kelurahan_id').append(new Option(nama, id));
                        });
                        if(state_kelurahan_id != '')
                        {
                            $('[name="kelurahan_id"]').val(state_kelurahan_id).trigger('change');
                        }
                    }
                });
            } else {
                $('#modal_kelurahan_id').empty();
                $('#modal_kelurahan_id').prop('disabled', true);
                $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $('#status_isu').change(function(){
            var value = $(this).val();
            if(value == 1)
            {
                $('#form_tgl_ditanggapi').remove();

                var tgl_ditanggapi = $(`<div class="col-12" id="form_tgl_ditanggapi">
                                            <div class="mb-3 position-relative form-group">
                                                <label for="tgl_ditanggapi" class="form-label">Tanggal Ditanggapi</label>
                                                <input type="datetime-local" class="form-control" name="tgl_ditanggapi" id="tgl_ditanggapi" required>
                                            </div>
                                        </div>`);
                $('#form_status_isu').after(tgl_ditanggapi);
            } else {
                $('#form_tgl_ditanggapi').remove();
            }
        })

        $('#create').click(function(){
            state_kabupaten_kota_id = 0;
            state_kecamatan_id = 0;
            state_kelurahan_id = 0;
            $('#monitoring_isu_form')[0].reset();
            $("[name='jenis_isu_id']").val('').trigger('change');
            $("[name='provinsi_id']").val('').trigger('change');
            $('#modal_kabupaten_kota_id').empty();
            $('#modal_kecamatan_id').empty();
            $('#modal_kelurahan_id').empty();
            $('#modal_kabupaten_kota_id').prop('disabled', true);
            $('#modal_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
            $('#modal_kecamatan_id').prop('disabled', true);
            $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
            $('#modal_kelurahan_id').prop('disabled', true);
            $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            $('.dropify-clear').click();
            $('#aksi_button').text('Save');
            $('#aksi_button').prop('disabled', false);
            $('.modal-title').text('Add Data');
            $('#aksi_button').val('Save');
            $('#aksi').val('Save');
            $('#form_result').html('');
            $('#form_tgl_ditanggapi').remove();
        });

        $('#monitoring_isu_form').on('submit', function(e){
            e.preventDefault();
            if($('#aksi').val() == 'Save')
            {
                $.ajax({
                    url: "{{ route('pengguna.monitoring-isu.store') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function()
                    {
                        return new swal({
                            title: "Checking...",
                            text: "Harap Menunggu",
                            imageUrl: "{{ asset('/images/preloader.gif') }}",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            swal.close()
                            html = '<div class="alert alert-danger">'+data.errors+'</div>';
                            $('.dropify-clear').click();
                            $('#aksi_button').prop('disabled', false);
                            $('#aksi_button').text('Save');
                        }
                        if(data.success)
                        {
                            swal.close()
                            html = '<div class="alert alert-success">'+data.success+'</div>';
                            $('.dropify-clear').click();
                            $('#aksi_button').prop('disabled', false);
                            $("[name='provinsi_id']").val('').trigger('change');
                            $('#modal_kabupaten_kota_id').empty();
                            $('#modal_kecamatan_id').empty();
                            $('#modal_kelurahan_id').empty();
                            $('#modal_kabupaten_kota_id').prop('disabled', true);
                            $('#modal_kabupaten_kota_id').append('<option value="">--- Pilih Kabupaten / Kota ---</option>');
                            $('#modal_kecamatan_id').prop('disabled', true);
                            $('#modal_kecamatan_id').append('<option value="">--- Pilih Kecamatan ---</option>');
                            $('#modal_kelurahan_id').prop('disabled', true);
                            $('#modal_kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
                            $('#monitoring_isu_form')[0].reset();
                            $('#aksi_button').text('Save');
                            $('#monitoring_isu_table').DataTable().ajax.reload();
                        }

                        $('#form_result').html(html);
                    }
                });
            }
            if($('#aksi').val() == 'Edit')
            {
                $.ajax({
                    url: "{{ route('pengguna.monitoring-isu.update') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function()
                    {
                        return new swal({
                            title: "Checking...",
                            text: "Harap Menunggu",
                            imageUrl: "{{ asset('/images/preloader.gif') }}",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">'+data.errors+'</div>';
                            $('#aksi_button').text('Save');
                        }
                        if(data.success)
                        {
                            $('#monitoring_isu_form')[0].reset();
                            $('#aksi_button').prop('disabled', false);
                            $('#aksi_button').text('Save');
                            $('#monitoring_isu_table').DataTable().ajax.reload();
                            $('#addEditModal').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil di ubah',
                                showConfirmButton: true
                            });
                        }

                        $('#form_result').html(html);
                    }
                });
            }
        });

        $(document.body).on('click', '.detail', function(){
            var id = $(this).attr('id');
            var url = "{{ route('pengguna.monitoring-isu.show', ['id' => ":id"]) }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    $('#detail-title').text('Detail Data');
                    $('#detail_jenis_isu').val(data.result.nama_jenis_isu);
                    $('#detail_pelapor').val(data.result.pelapor);
                    $('#detail_judul_isu').val(data.result.judul_isu);
                    $('#detail_dampak').text(data.result.dampak);
                    $('#detail_tgl').val(data.result.tgl);
                    $('#detail_provinsi').val(data.result.nama_provinsi);
                    $('#detail_kabupaten_kota').val(data.result.nama_kabupaten_kota);
                    $('#detail_kecamatan').val(data.result.nama_kecamatan);
                    $('#detail_kelurahan').val(data.result.nama_kelurahan);
                    $('#detail_alamat').val(data.result.alamat);
                    $('#detail_rt').val(data.result.rt);
                    $('#detail_rw').val(data.result.rw);
                    $('#detail_status_isu').val(data.result.status_isu);
                    $('#detail_tgl_ditanggapi').val(data.result.tgl_ditanggapi);
                    $('#detail').modal('show');
                }
            });
        });

        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            var url = "{{ route('pengguna.monitoring-isu.edit', ['id' => ":id"]) }}";
            url = url.replace(':id', id);
            $('#form_email').hide();
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    $('#pelapor').val(data.result.pelapor);
                    $('#judul_isu').val(data.result.judul_isu);
                    $('#dampak').val(data.result.dampak);
                    $('#tgl').val(data.result.tgl);
                    $("[name='jenis_isu_id']").val(data.result.jenis_isu_id).trigger('change');
                    $("[name='status_isu']").val(data.result.status_isu).trigger('change');
                    if(data.result.status_isu == 1)
                    {
                        $('#form_tgl_ditanggapi').remove();
                        var tgl_ditanggapi = $(`<div class="col-12" id="form_tgl_ditanggapi">
                                            <div class="mb-3 position-relative form-group">
                                                <label for="tgl_ditanggapi" class="form-label">Tanggal Ditanggapi</label>
                                                <input type="datetime-local" class="form-control" name="tgl_ditanggapi" id="tgl_ditanggapi" required>
                                            </div>
                                        </div>`);
                        $('#form_status_isu').after(tgl_ditanggapi);
                        $('#tgl_ditanggapi').val(data.result.tgl_ditanggapi);
                    }
                    $('#alamat').val(data.result.alamat);
                    $('#rt').val(data.result.rt);
                    $('#rw').val(data.result.rw);
                    $("[name='provinsi_id']").val(data.result.provinsi_id).trigger('change');
                    state_kabupaten_kota_id = data.result.kabupaten_kota_id;
                    state_kecamatan_id = data.result.kecamatan_id;
                    state_kelurahan_id = data.result.kelurahan_id;

                    $('#hidden_id').val(id);
                    $('.modal-title').text('Edit Data');
                    $('#aksi_button').text('Edit');
                    $('#aksi_button').prop('disabled', false);
                    $('#aksi_button').val('Edit');
                    $('#aksi').val('Edit');
                    $('#addEditModal').modal('show');
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
            var url = "{{ route('pengguna.monitoring-isu.destroy', ['id' => ":user_id"]) }}";
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
                    $('#monitoring_isu_table').DataTable().ajax.reload();
                }
            });
        });
    </script>
@endsection
