@extends('razen-politik.layouts.app')
@section('title', 'Atur Paket | Admin | Razen Politik')

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
    @php
        use App\Models\MasterPaket;
        use App\Models\PivotPaket;
        use App\Models\PivotPaketFitur;
        use App\Models\MasterFitur;
        use App\Models\MasterRole;
        use App\Models\MasterJabatanPilihan;
    @endphp
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Atur Paket</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-politik.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-politik.admin.paket.index') }}">Paket</a></li>
                    <li class="breadcrumb-item"><a href="#">Atur Fitur</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <div class="row mb-3">
        <div class="col-6" style="justify-content: center; align-self: center; text-align: left;">
            <h2 class="small-title">Data Paket</h2>
        </div>
        <div class="col-6" style="justify-content: center; align-self: center; text-align: right;">
            <a href="{{ route('razen-politik.admin.paket.index') }}" class="btn btn-danger waves-effect waves-light">Kembali <i class="fas fa-right-long"></i></a>
        </div>
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Paket</label>
                        <input type="text" class="form-control" value="{{$data->paket->nama}}" readonly>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Jabatan Pilihan</label>
                        <input type="text" class="form-control" value="{{$data->jabatan_pilihan->nama}}" readonly>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control" value="Rp. {{number_format($data->harga, 2, ',', '.')}}" readonly>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Tipe Waktu</label>
                        <input type="text" class="form-control" value="{{$data->tipe_waktu}}" readonly>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Lama Waktu</label>
                        <input type="text" class="form-control" value="{{$data->lama_waktu}}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="mb-0 pb-0 display-4 mb-5" id="title">Atur Fitur</h2>
    <form action="{{ route('razen-politik.admin.paket.atur-fitur.store', ['id'=>$data->encrypt_id]) }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($roles as $role)
            <h2 class="small-title">{{$role->nama}}</h2>
            <div class="card mb-5">
                <div class="card-body">
                    @foreach ($role->fitur as $fitur)
                        <div class="form-check form-check-inline">
                            @php
                                $cek_pivot_paket_fitur = PivotPaketFitur::where('pivot_paket_id', $data->id)->where('fitur_id', $fitur->id)->first();
                            @endphp
                            <input class="form-check-input" type="checkbox" id="fitur{{$fitur->id}}" name="fitur[]" value="{{$fitur->id}}" @if($cek_pivot_paket_fitur) checked @endif />
                            <label class="form-check-label" for="fitur{{$fitur->id}}">{{$fitur->nama}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-grid gap-2" style="text-align: right">
                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
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

    </script>
@endsection
