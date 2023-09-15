@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Harga | Razen Politik')

@section('content')
@php
        use App\Models\LandingPageHarga;
        use App\Models\LandingPageProdukLain;
        use App\Models\Profil;

        $harga = LandingPageHarga::first();

        $section_1 = json_decode($harga->section_1, true);
        $section_2 = json_decode($harga->section_2, true);

        $produk_lain = LandingPageProdukLain::first();

        $produk_lain = json_decode($produk_lain->produk_lain, true);

        $profil = Profil::first();
    @endphp
    <!-- About Us section start here -->
    <div id="section_1" class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{ asset('images/razen-politik/harga/'.$section_1['gambar']) }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">{{$section_1['judul']}}</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Our Principle Section Start here -->
    <div id="section_2" class="our-principle-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_2['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$section_2['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($section_2['konten'] as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <i class="{{$item['kode_ikon']}}"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">{{$item['judul']}}</h4>
                                <p>{{$item['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Principle Section End here -->

    <!-- Event items Section Start Here -->
    <div class="issues-around-us-section">
        <div class="container">
            <div class="row" id="row_pivot_paket_fitur">
                {!! $html !!}
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="blog-pagination style-01">
                        <div class="blog-pagination style-01 margin-top-30">
                            <ul>
                                @foreach ($jabatan_pilihan as $id => $nama)
                                    <li><a class="page-numbers @if($loop->first) current @endif btn-jabatan-pilihan" style="width: fit-content; padding-left: 10px; padding-right: 10px;" id="btn_jabatan_pilihan_{{$id}}" data-id="{{$id}}">{{$nama}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Items Section Start Here -->

    <!-- Volunteer Section Start -->
    <div class="volunteer-section-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title">
                        <div class="subtitle wow animate__ animate__fadeInUp">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>{{$produk_lain['sub_judul']}}</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$produk_lain['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$produk_lain['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="testimonial-carousel-two">
                    @foreach ($produkLains as $produkLain)
                        <div class="volunteer-single-items">
                            <div class="thum">
                            <img src="{{ asset('images/produk-lain/'.$produkLain->foto) }}" alt="" />
                            </div>
                            <div class="content">
                                <div class="author-meta">
                                    <span class="author-name">{{$produkLain->nama}}</span>
                                    <p class="designation">{{$produkLain->deskripsi}}</p>
                                </div>
                                @php
                                    $text_produk_lain = urlencode('Halo...
                                            Saya ingin menggunakan berlangganan Produk Lainnya di Razen Politik.
                                            Nama: '.$produkLain->nama);
                                @endphp
                                <a href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&text={{$text_produk_lain}}" class="btn btn-danger waves-effect waves-light"></i>Beli Paket</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer Section End -->
@endsection

@section('js')
    <script>
        $('.btn-jabatan-pilihan').click(function(){
            $('.btn-jabatan-pilihan').removeClass('current');
            var id = $(this).attr('data-id');
            $('.btn-jabatan-pilihan#btn_jabatan_pilihan_'+id).addClass('current');

            $('#row_pivot_paket_fitur').empty();

            var url = "{{route('get-paket', ['id' => ":id"])}}";
            url = url.replace(":id", id);
            $.ajax({
                url : url,
                dataType: "json",
                success: function(data)
                {
                    $('#row_pivot_paket_fitur').html(data);
                }
            });
        });
    </script>
@endsection
