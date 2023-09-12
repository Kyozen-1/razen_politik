@extends('pengguna.layouts.app')
@section('title', 'Pemesanan Barang | Logistik | Pengguna')

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
            <h1 class="mb-0 pb-0 display-4" id="title">Pemesanan Barang</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="#">Logistik</a></li>
                    <li class="breadcrumb-item"><a href="#">Pemesanan Barang</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->

    <div class="row mb-3">
        <div class="col-12" style="text-align:right">
            <button class="btn btn-outline-primary waves-effect waves-light mr-2 item_create" type="button" data-bs-toggle="modal" data-bs-target="#addEditModal" title="Tambah Data" id="create"><i class="fas fa-plus"></i></button>
        </div>
    </div>

    <div class="data-table-rows slim">
        <!-- Table Start -->
        <div class="data-table-responsive-wrapper">
            <table id="logistik_pemesanan_table" class="data-table w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Tgl Dibuat</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah Pesanan</th>
                        <th>Sudah</th>
                        <th>Tgl Terima</th>
                        <th>Keterangan</th>
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
                    <form class="form-horizontal" id="logistik_pemesanan_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group position-relative mb-3" id="form_select_logistik">
                                    <label for="select_logistik" class="form-label">Pilih Logistik</label>
                                    <select name="select_logistik" id="select_logistik" class="form-control" required>
                                        <option value="">--- Pilih Logistik ---</option>
                                        <option value="tambah">Tambah Logistik</option>
                                        @foreach ($logistik as $id => $nama)
                                            <option value="{{$id}}">{{$nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group position-relative mb-3">
                                    <label for="kode" class="form-label">Kode</label>
                                    <input type="text" class="form-control" id="kode" name="kode" required>
                                </div>
                                <div class="form-group position-relative mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                                </div>
                                <div class="form-group position-relative mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group position-relative mb-3">
                                    <label for="status_pemesanan" class="form-label">Status Pemesanan</label>
                                    <select name="status_pemesanan" id="status_pemesanan" class="form-control" required>
                                        <option value="">--- Pilih Status ---</option>
                                        <option value="belum_diterima">Belum Diterima</option>
                                        <option value="sudah_diterima">Sudah Diterima</option>
                                    </select>
                                </div>
                                <div class="form-group position-relative mb-3" id="form_tgl_pemesanan">
                                    <label for="tgl_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                    <input type="datetime-local" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan" required>
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
                        <div class="col-md-6 col-12">
                            <div class="form-group position-relative mb-3">
                                <label for="detail_nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="detail_nama" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_satuan" class="form-label">Satuan</label>
                                <input type="text" class="form-control" id="detail_satuan" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="detail_harga" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_foto" class="form-label">Foto</label>
                                <br>
                                <img src="" class="img-responsive" id="detail_foto">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group position-relative mb-3">
                                <label for="detail_kode" class="form-label">Kode</label>
                                <input type="text" class="form-control" id="detail_kode" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_jumlah" class="form-label">Jumlah</label>
                                <input type="text" class="form-control" id="detail_jumlah" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_keterangan" class="form-label">Keterangan</label>
                                <p id="detail_keterangan"></p>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="detail_status" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_tgl_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                <input type="text" class="form-control" id="detail_tgl_pemesanan" disabled>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="detail_tgl_terima" class="form-label">Tanggal Diterima</label>
                                <input type="text" class="form-control" id="detail_tgl_terima" disabled>
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

            var dataTables = $('#logistik_pemesanan_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('pengguna.logistik.pemesanan.index') }}"
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'kode',
                        name: 'kode'
                    },
                    {
                        data: 'tgl_pemesanan',
                        name: 'tgl_pemesanan'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'satuan',
                        name: 'satuan'
                    },
                    {
                        data: 'harga',
                        name: 'harga'
                    },
                    {
                        data: 'jumlah',
                        name: 'jumlah'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'tgl_terima',
                        name: 'tgl_terima'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        orderable: false
                    },
                ]
            });

            $('#select_logistik').select2({
                dropdownParent: $("#addEditModal")
            });
        });

        $('#select_logistik').change(function(){
            var value = $(this).val();
            if(value != '' && value == 'tambah')
            {
                $('#form_nama_logistik').remove();
                $('#form_satuan').remove();
                $('#form_harga').remove();
                $('#form_foto').remove();

                var form = $(`<div class="form-group position-relative mb-3" id="form_nama_logistik">
                                    <label for="nama_logistik" class="form-label">Nama Logistik</label>
                                    <input type="text" class="form-control" id="nama_logistik" name="nama_logistik" required>
                                </div>
                                <div class="form-group position-relative mb-3" id="form_satuan">
                                    <label for="satuan" class="form-label">Satuan</label>
                                    <input type="text" class="form-control" id="satuan" name="satuan" required>
                                </div>
                                <div class="form-group position-relative mb-3" id="form_harga">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="mb-3 position-relative form-group" id="form_foto">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" class="dropify" name="foto" id="foto" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true">
                                </div>`);
                $('#form_select_logistik').after(form);
                $('.dropify').dropify();
            }

            if(value == '')
            {
                $('#form_nama_logistik').remove();
                $('#form_satuan').remove();
                $('#form_harga').remove();
                $('#form_foto').remove();
            }

            if(value != '' && value != 'tambah')
            {
                $('#form_nama_logistik').remove();
                $('#form_satuan').remove();
                $('#form_harga').remove();
                $('#form_foto').remove();
            }
        });

        $('#status_pemesanan').change(function(){
            var value = $(this).val();
            if(value == 'sudah_diterima')
            {
                $('#form_tgl_terima').remove();
                var form_tgl_terima = $(`<div class="form-group position-relative mb-3" id="form_tgl_terima">
                                    <label for="tgl_terima" class="form-label">Tanggal Terima</label>
                                    <input type="datetime-local" name="tgl_terima" id="tgl_terima" class="form-control" required>
                                </div>`);
                $('#form_tgl_pemesanan').after(form_tgl_terima);
            } else {
                $('#form_tgl_terima').remove();
            }
        });

        $('#create').click(function(){
            $("[name='select_logistik']").val('').trigger('change');
            $('#form_select_logistik').show();
            $("#select_logistik").attr('required');
            $('#form_nama_logistik').remove();
            $('#form_satuan').remove();
            $('#form_harga').remove();
            $('#form_foto').remove();
            $('#form_tgl_terima').remove();
            $('#logistik_pemesanan_form')[0].reset();
            $('.dropify-clear').click();
            $('#aksi_button').text('Save');
            $('#aksi_button').prop('disabled', false);
            $('.modal-title').text('Add Data');
            $('#aksi_button').val('Save');
            $('#aksi').val('Save');
            $('#form_result').html('');
        });

        $('#logistik_pemesanan_form').on('submit', function(e){
            e.preventDefault();
            if($('#aksi').val() == 'Save')
            {
                $.ajax({
                    url: "{{ route('pengguna.logistik.pemesanan.store') }}",
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
                            $('#logistik_pemesanan_form')[0].reset();
                            $('#aksi_button').text('Save');
                            $("[name='select_logistik']").val('').trigger('change');
                            $('#logistik_pemesanan_table').DataTable().ajax.reload();
                        }

                        $('#form_result').html(html);
                    }
                });
            }
            if($('#aksi').val() == 'Edit')
            {
                $.ajax({
                    url: "{{ route('pengguna.logistik.pemesanan.update') }}",
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
                            $('#logistik_pemesanan_form')[0].reset();
                            $('#aksi_button').prop('disabled', false);
                            $('#aksi_button').text('Save');
                            $('#logistik_pemesanan_table').DataTable().ajax.reload();
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
            var url = "{{ route('pengguna.logistik.pemesanan.show', ['id' => ":id"]) }}";
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    $('#detail-title').text('Detail Data');
                    $('#detail_nama').val(data.result.nama);
                    $('#detail_satuan').val(data.result.satuan);
                    $('#detail_harga').val(data.result.harga);
                    $('#detail_foto').attr('src', "{{asset('images/logistik')}}" + '/' + data.result.foto);
                    $('#detail_kode').val(data.result.kode);
                    $('#detail_jumlah').val(data.result.jumlah);
                    $('#detail_keterangan').text(data.result.keterangan);
                    $('#detail_status').val(data.result.status);
                    $('#detail_tgl_pemesanan').val(data.result.tgl_pemesanan);
                    $('#detail_tgl_terima').val(data.result.tgl_terima);
                    $('#detail').modal('show');
                }
            });
        });

        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            var url = "{{ route('pengguna.logistik.pemesanan.edit', ['id' => ":id"]) }}";
            url = url.replace(':id', id);
            $('#form_email').hide();
            $.ajax({
                url: url,
                dataType: "json",
                success: function(data)
                {
                    $('#form_select_logistik').hide();
                    $("#select_logistik").removeAttr('required');
                    $('#kode').val(data.result.kode);
                    $('#jumlah').val(data.result.jumlah);
                    $('#keterangan').val(data.result.keterangan);
                    $('#tgl_pemesanan').val(data.result.tgl_pemesanan);
                    $("[name='status_pemesanan']").val(data.result.status).trigger('change');
                    if(data.result.status == 'sudah_diterima')
                    {
                        $('#form_tgl_terima').remove();
                        var form_tgl_terima = $(`<div class="form-group position-relative mb-3" id="form_tgl_terima">
                                            <label for="tgl_terima" class="form-label">Tanggal Terima</label>
                                            <input type="datetime-local" name="tgl_terima" id="tgl_terima" class="form-control" required>
                                        </div>`);
                        $('#form_tgl_pemesanan').after(form_tgl_terima);
                        $('#tgl_terima').val(data.result.tgl_terima);
                    }
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
            var url = "{{ route('pengguna.logistik.pemesanan.destroy', ['id' => ":user_id"]) }}";
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
                    $('#logistik_pemesanan_table').DataTable().ajax.reload();
                }
            });
        });
    </script>
@endsection
