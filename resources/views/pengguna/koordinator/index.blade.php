@extends('pengguna.layouts.app')
@section('title', 'Koordinator | Pengguna')

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
        <h1 class="mb-0 pb-0 display-4" id="title">Koordinator</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Koordinator</a></li>
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
    <div class="table-responsive">
        <table id="koordinator_table" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Wilayah</th>
                    <th>Anggota</th>
                    <th>Terakhir Login</th>
                    <th>Status Undangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Budi Budiman</td>
                    <td>Madiun</td>
                    <th>100</th>
                    <th>2 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fredi Aswatu</td>
                    <td>Madiun</td>
                    <th>135</th>
                    <th>1 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Aswandi Susanto</td>
                    <td>Madiun</td>
                    <th>560</th>
                    <th>3 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Gilang ramadhan</td>
                    <td>Madiun</td>
                    <th>300</th>
                    <th>5 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Haji Udin</td>
                    <td>Madiun</td>
                    <th>100</th>
                    <th>10 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Krisdayanti</td>
                    <td>Madiun</td>
                    <th>310</th>
                    <th>1 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Budi Budiman</td>
                    <td>Madiun</td>
                    <th>100</th>
                    <th>2 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Budi Budiman</td>
                    <td>Madiun</td>
                    <th>100</th>
                    <th>3 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Lisa Mandalina</td>
                    <td>Madiun</td>
                    <th>50</th>
                    <th>1 hari yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Sholahudin</td>
                    <td>Madiun</td>
                    <th>300</th>
                    <th>5 jam yang lalu</th>
                    <th>Iya</th>
                    <th>
                        <button class="btn btn-info btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-warning btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-detail waves-effect waves-light btn-icon mr-1" type="button"><i class="fas fa-trash"></i></button>
                    </th>
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
