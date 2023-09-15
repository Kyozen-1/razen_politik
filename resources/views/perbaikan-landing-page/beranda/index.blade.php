@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Beranda | Razen Politik')

@section('content')
    @php
        use App\Models\LandingPageBeranda;
        use App\Models\LandingPageProdukLain;
        use App\Models\Profil;
        use Carbon\Carbon;

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
        $section_5 = json_decode($beranda->section_5, true);
        $section_6 = json_decode($beranda->section_6, true);

        $produk_lain = LandingPageProdukLain::first();

        $produk_lain = json_decode($produk_lain->produk_lain, true);

        $profil = Profil::first();
    @endphp
    <!-- Header section Start -->
    <div id="section_1" class="header-area header-sanatory header-bg" style="background-image:url({{ asset('images/razen-politik/beranda/'.$section_1['gambar']) }});">
        <div class="container nav-container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- header inner -->
                    <div class="header-inner">
                        <h1 class="title">
                            {{$section_1['judul']}}
                        </h1>
                        <p>
                            {{$section_1['deskripsi']}}
                        </p>
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header section End -->

    <!-- Header bottom Section Start -->
    <div id="section_2" class="header-bottom-area padding-top-120 padding-bottom-70" style="background-image: url({{ asset('images/razen-politik/beranda/'.$section_2['gambar']) }})">
        <div class="container">
            <div class="row">
                <div class="testimonial-carousel">
                    <div class="single-testimonial-item wow animate__animated animate__fadeInUp">
                        <div class="icon">
                            <span class="fas fa-plus"></span>
                        </div>
                        <div class="content">
                        <h4 class="title">City Traffic & Parking</h4>
                        <p class="description">
                            Efficiently orchestrate resource sucking human capital whereas
                            future-proof outsourcing. Credibly actualize one-to-one
                            meta-services.
                        </p>
                        </div>
                    </div>
                    <div class="single-testimonial-item wow animate__animated animate__fadeInUp">
                        <div class="icon">
                            <span class="fas fa-plus"></span>
                        </div>
                        <div class="content">
                        <h4 class="title">City Traffic & Parking</h4>
                        <p class="description">
                            Efficiently orchestrate resource sucking human capital whereas
                            future-proof outsourcing. Credibly actualize one-to-one
                            meta-services.
                        </p>
                        </div>
                    </div>
                    <div class="single-testimonial-item wow animate__animated animate__fadeInUp">
                        <div class="icon">
                            <span class="fas fa-plus"></span>
                        </div>
                        <div class="content">
                        <h4 class="title">City Traffic & Parking</h4>
                        <p class="description">
                            Efficiently orchestrate resource sucking human capital whereas
                            future-proof outsourcing. Credibly actualize one-to-one
                            meta-services.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header bottom section end -->

    <!-- Our party section start -->
    <div id="section_3" class="our-party-section-area">
        <div class="party-bg" style="background-image: url({{ asset('images/razen-politik/beranda/'.$section_3['gambar']) }})"></div>
        <div class="party-shape-02"></div>
        <div class="party-shape-03"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="party-single-item vision">
                        <div class="content">
                            <div class="subtitle wow animate__animated animate__fadeInUp">
                                <p>{{$section_3['sub_judul']}}</p>
                                <div class="icon">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                </div>
                            </div>
                            <h4 class="title wow animate__animated animate__fadeInUp">{{$section_3['judul']}}</h4>
                            <p class="description wow animate__animated animate__fadeInUp">
                                {{$section_3['deskripsi']}}
                            </p>
                        </div>
                        <div class="  btn-wrapper margin-top-35  wow animate__animated animate__fadeInUp">
                            <a href="{{ route('tentang-kami') }}" class="boxed-btn btn-sanatory style-02"><i class="fas fa-arrow-right"></i>Lebih Banyak Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our party section end -->

    <!-- Donation Section Start -->
    <div id="section_4" class="donation-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="party-single-item margin-bottom-50">
                        <div class="content">
                            <div class="subtitle wow animate__animated animate__fadeInUp">
                                <p>{{$section_4['sub_judul']}}</p>
                                <div class="icon">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                            </div>
                            <h4 class="title style-01 wow animate__animated animate__fadeInUp">{{$section_4['judul']}}</h4>
                            <p class="description style-01 wow animate__animated animate__fadeInUp">
                                {{$section_4['deskripsi']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-bg" >
                        <div class="donate-bg-02" style="background-image: url({{ asset('images/razen-politik/beranda/'.$section_4['gambar']) }})"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation Section End -->

    <!-- Volunteer Section Start -->
    <div id="section_5" class="volunteer-section-area">
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
                        <p>{{$section_5['sub_judul']}}</p>
                        <div class="icon">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_5['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$section_5['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="testimonial-carousel-two">
                    <div class="volunteer-single-items">
                        <div class="thum">
                            <img src="{{ asset('landing-page/assets/img/valunteer-05.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer Section End -->

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

    <!-- News Section Start -->
    <div id="section_6" class="news-section-start">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="section-title">
                <div class="subtitle wow animate__animated animate__fadeInUp">
                <div class="icon">
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                </div>
                <p>{{$section_6['sub_judul']}}</p>
                <div class="icon">
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                </div>
                </div>
                <h4 class="title wow animate__animated animate__fadeInUp">{{$section_6['judul']}}</h4>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="news-single-items wow animate__animated animate__fadeInUp">
                    <div class="news-bg" style="background-image: url({{$beritas[0]->image}});">
                        <span class="even">Politik</span>
                        <div class="content">
                            <a href="{{$beritas[0]->link}}" target="blank"><h4 class="title">{{$beritas[0]->title}}</h4></a>
                            <div class="author-meta">
                                <p>{{Carbon::parse($beritas[0]->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="news-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="news-bg" style="background-image: url({{$beritas[1]->image}});">
                        <span class="even">Politik</span>
                        <div class="content">
                            <a href="{{$beritas[1]->link}}" target="blank"><h4 class="title">{{$beritas[1]->title}}</h4></a>
                            <div class="author-meta">
                                <p>{{Carbon::parse($beritas[1]->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="news-single-list wow animate__animated animate__fadeInRight animate__delay-2s">
                    <li class="news-single-list-items">
                        <div class="thumb">
                            <img src="{{$beritas[2]->image}}" alt="">
                        </div>
                        <div class="content">
                            <span class="date">{{Carbon::parse($beritas[2]->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</span>
                            <a href="{{$beritas[2]->link}}"><h4 class="title">{{$beritas[2]->title}}</h4></a>
                        </div>
                    </li>
                    <li class="news-single-list-items">
                        <div class="thumb">
                            <img src="{{$beritas[3]->image}}" alt="">
                        </div>
                        <div class="content">
                            <span class="date">{{Carbon::parse($beritas[3]->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</span>
                            <a href="{{$beritas[3]->link}}"><h4 class="title">{{$beritas[3]->title}}</h4></a>
                        </div>
                    </li>
                    <li class="news-single-list-items">
                        <div class="thumb">
                            <img src="{{$beritas[4]->image}}" alt="">
                        </div>
                        <div class="content">
                            <span class="date">{{Carbon::parse($beritas[4]->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</span>
                            <a href="{{$beritas[4]->link}}"><h4 class="title">{{$beritas[4]->title}}</h4></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <!-- News Section End  -->
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
