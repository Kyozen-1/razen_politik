@extends('relawan.layouts.app')
@section('title', 'Profil | Relawan')

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
            line-height: 40px !important;
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
            <h1 class="mb-0 pb-0 display-4" id="title"> Profil</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('relawan.profil.index') }}">Profil</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ route('relawan.profil.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Atur Profil</label>
                    </div>
                    <div class="col-6" style="text-align: right">
                        <button class="btn btn-outline-primary waves-effect waves-light">Simpan Perubahan</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="form-group position-relative mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$relawan->nama}}" required>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$relawan->no_hp}}" required>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="L" @if($relawan->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
                                <option value="P" @if($relawan->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group position-relative mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="dropify" name="foto" id="foto" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/pengguna/relawan/'.$relawan->foto) }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-3 position-relative form-group">
                                    <label for="provinsi_id" class="form-label">Provinsi</label>
                                    <select name="provinsi_id" id="provinsi_id" class="form-control" required>
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
                                    <select name="kabupaten_kota_id" id="kabupaten_kota_id" class="form-control" disabled required>
                                        <option value="">--- Pilih Kabupaten Kota ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-3 position-relative form-group">
                                    <label for="kecamatan_id" class="form-label">Kecamatan</label>
                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" disabled required>
                                        <option value="">--- Pilih Kecamatan ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-3 position-relative form-group">
                                    <label for="kelurahan_id" class="form-label">Kelurahan</label>
                                    <select name="kelurahan_id" id="kelurahan_id" class="form-control" disabled required>
                                        <option value="">--- Pilih Kelurahan ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3 position-relative form-group">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="5" class="form-control" required>{{$relawan->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 position-relative form-group">
                                    <label for="rt" class="form-label">RT</label>
                                    <input type="text" class="form-control" id="rt" name="rt" placeholder="ex: 001" value="{{$relawan->rt}}" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 position-relative form-group">
                                    <label for="rw" class="form-label">RW</label>
                                    <input type="text" class="form-control" id="rw" name="rw" placeholder="ex: 001" value="{{$relawan->rt}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('relawan.profil.ganti-password') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group position-relative mb-3 row {{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label for="current-password" class="col-sm-3 col-form-label">Password Terkini</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password Terkini" required>
                        <i class="far fa-eye field-icon toggle-current-password" toggle="#password-field" style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;margin-right:5px;"></i>
                        @if ($errors->has('current-password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('current-password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group position-relative mb-3 row {{ $errors->has('new-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="col-sm-3 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Password Baru" required>
                        <i class="far fa-eye field-icon toggle-new-password" toggle="#password-field" style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;margin-right:5px;"></i>
                        <span id="max_new_password" class="text-danger">*password minimal 8 karakter</span>
                        @if ($errors->has('new-password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new-password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group position-relative mb-3 row">
                    <label for="new-password-confirm" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="new-password-confirm" name="new-password-confirm" placeholder="Konfirmasi Password Baru" required>
                    </div>
                </div>
                <div class="form-group position-relative mb-0 justify-content-end row">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light" id="btn_submit" disabled>Ganti Password</button>
                    </div>
                </div>
            </form>
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
        var state_kabupaten_kota_id = "{{$relawan->kabupaten_kota_id}}";
        var state_kecamatan_id = "{{$relawan->kecamatan_id}}";
        var state_kelurahan_id = "{{$relawan->kelurahan_id}}";

        $(document).ready(function(){
            $('.dropify').dropify();

            $('#provinsi_id').select2();

            $('#kabupaten_kota_id').select2();

            $('#kecamatan_id').select2();

            $('#kelurahan_id').select2();

            $("[name='provinsi_id']").val("{{$relawan->provinsi_id}}").trigger('change');
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
            } else {
                $('#kelurahan_id').empty();
                $('#kelurahan_id').prop('disabled', true);
                $('#kelurahan_id').append('<option value="">--- Pilih Kelurahan ---</option>');
            }
        });

        $(document).on('click', '.toggle-current-password', function(){
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $('#current-password');
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $(document).on('click', '.toggle-new-password', function(){
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $('#new-password');
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $('#new-password').on('keyup', function(){
            if($(this).val().length < 8)
            {
                $('#btn_submit').prop('disabled', true);
                $('#max_new_password').show();
            } else {
                $('#btn_submit').prop('disabled', false);
                $('#max_new_password').hide();
            }
        });
    </script>
@endsection
