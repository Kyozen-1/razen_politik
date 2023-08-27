@extends('pengguna.layouts.app')
@section('title', 'Data TPS | Master Data | Pengguna')

@section('content')
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Data TPS | Master Data</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                <li class="breadcrumb-item"><a href="#">Data TPS</a></li>
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
        <table id="data_tps_table" class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Provinsi</th>
                    <th>Jumlah TPS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Aceh </td>
                    <td>16.046 lokasi</td>
                </tr>
                <tr>
                    <td>2 </td>
                    <td>Sumatera Utara </td>
                    <td>45.875 lokasi</td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>Sumatera Barat </td>
                    <td>17.569 lokasi</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td> Riau </td>
                    <td>19.366 lokasi</td>
                </tr>
                <tr>
                    <td>5 </td>
                    <td>Jambi</td>
                    <td>11.160 lokasi</td>
                </tr>
                <tr>
                    <td>6 </td>
                    <td>Sumatera Selatan </td>
                    <td>25.985 lokasi</td>
                </tr>
                <tr>
                    <td>7 </td>
                    <td>Bengkulu </td>
                    <td>6.210 lokasi</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td> Lampung </td>
                    <td>25.825 lokasi</td>
                </tr>
                <tr>
                    <td>9 </td>
                    <td>Kep. Bangka Belitung </td>
                    <td>4.116 lokasi</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td> Kep. Riau </td>
                    <td>5.914 lokasi</td>
                </tr>
                <tr>
                    <td>11 </td>
                    <td>DKI Jakarta </td>
                    <td>30.766 lokasi</td>
                </tr>
                <tr>
                    <td>12 </td>
                    <td>Jawa Barat </td>
                    <td>140.457 lokasi</td>
                </tr>
                <tr>
                    <td>13 </td>
                    <td>Jawa Tengah </td>
                    <td>117.299 lokasi</td>
                </tr>
                <tr>
                    <td>14 </td>
                    <td>DI Yogyakarta </td>
                    <td>11.932 lokasi</td>
                </tr>
                <tr>
                    <td>15 </td>
                    <td>Jawa Timur </td>
                    <td>120.666 lokasi</td>
                </tr>
                <tr>
                    <td>16 </td>
                    <td>Banten </td>
                    <td>33.324 lokasi</td>
                </tr>
                <tr>
                    <td>17 </td>
                    <td>Bali </td>
                    <td>12.809 lokasi</td>
                </tr>
                <tr>
                    <td>18 </td>
                    <td>Nusa Tenggara Barat </td>
                    <td>16.243 lokasi</td>
                </tr>
                <tr>
                    <td>19 </td>
                    <td>Nusa Tenggara Timur </td>
                    <td>16.746 lokasi</td>
                </tr>
                <tr>
                    <td>20 </td>
                    <td>Kalimantan Barat </td>
                    <td>17.626 lokasi</td>
                </tr>
                <tr>
                    <td>21 </td>
                    <td>Kalimantan Tengah</td>
                    <td>7.830 lokasi</td>
                </tr>
                <tr>
                    <td>22 </td>
                    <td>Kalimantan Selatan </td>
                    <td>13.584 lokasi</td>
                </tr>
                <tr>
                    <td>23 </td>
                    <td>Kalimantan Timur </td>
                    <td>11.441 lokasi</td>
                </tr>
                <tr>
                    <td>24 </td>
                    <td>Kalimantan Utara </td>
                    <td>2.295 lokasi</td>
                </tr>
                <tr>
                    <td>25 </td>
                    <td>Sulawesi Utara</td>
                    <td> 8.240 lokasi</td>
                </tr>
                <tr>
                    <td>26 </td>
                    <td>Sulawesi Tengah </td>
                    <td>9.462 lokasi</td>
                </tr>
                <tr>
                    <td>27 </td>
                    <td>Sulawesi Selatan </td>
                    <td>26.357 lokasi</td>
                </tr>
                <tr>
                    <td>28 </td>
                    <td>Sulawesi Tenggara </td>
                    <td>8.154 lokasi</td>
                </tr>
                <tr>
                    <td>29 </td>
                    <td>Gorontalo </td>
                    <td>3.539 lokasi</td>
                </tr>
                <tr>
                    <td>30 </td>
                    <td>Sulawesi Barat </td>
                    <td>4.219 lokasi</td>
                </tr>
                <tr>
                    <td>31 </td>
                    <td>Maluku </td>
                    <td>5.622 lokasi</td>
                </tr>
                <tr>
                    <td>32 </td>
                    <td>Maluku Utara </td>
                    <td>4.192 lokasi</td>
                </tr>
                <tr>
                    <td>33 </td>
                    <td>Papua </td>
                    <td>3.109 lokasi</td>
                </tr>
                <tr>
                    <td>34 </td>
                    <td>Papua Barat </td>
                    <td>1.923 lokasi</td>
                </tr>
                <tr>
                    <td>35 </td>
                    <td>Papua Selatan </td>
                    <td>1.770 lokasi</td>
                </tr>
                <tr>
                    <td>36 </td>
                    <td>Papua Tengah </td>
                    <td>4.484 lokasi</td>
                </tr>
                <tr>
                    <td>37 </td>
                    <td>Papua Pegunungan </td>
                    <td>5.850 lokasi</td>
                </tr>
                <tr>
                    <td>38 </td>
                    <td>Papua Barat Daya </td>
                    <td>2.156 lokasi</td>
                </tr>
                <tr>
                    <td>39 </td>
                    <td>Luar Negeri </td>
                    <td>3.059 lokasi</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Table End -->
</div>
<!-- Content End -->
@endsection

@section('js')

@endsection
