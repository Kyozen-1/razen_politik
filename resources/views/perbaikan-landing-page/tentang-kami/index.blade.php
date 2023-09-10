@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Tentang Kami | Razen Politik')

@section('content')
    @php
        use App\Models\LandingPageTentangKami;

        $tentang_kami = LandingPageTentangKami::first();

        $section_1 = json_decode($tentang_kami->section_1, true);
        $section_2 = json_decode($tentang_kami->section_2, true);
        $section_3 = json_decode($tentang_kami->section_3, true);
        $section_4 = json_decode($tentang_kami->section_4, true);
        $section_5 = json_decode($tentang_kami->section_5, true);
    @endphp
    <!-- About Us section start here -->
    <div id="section_1" class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{ asset('images/razen-politik/tentang-kami/'.$section_1['gambar']) }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">{{$section_1['judul']}}</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Administration Section Start Here -->
    <div id="section_2" class="administration-section">
        <div class="container custom-container">
            <img src="{{ asset('images/razen-politik/tentang-kami/'.$section_2['gambar_3']) }}" class="admin-shape" alt="">
            <img src="{{ asset('images/razen-politik/tentang-kami/'.$section_2['gambar_1']) }}" class="admin-shape-02" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="administration-single-items wow animate__animated animate__fadeInLeft">
                        <div class="administrative-bg" style="background-image: url({{ asset('images/razen-politik/tentang-kami/'.$section_2['gambar_2']) }});">
                            <div class="btn-wrapper administration">
                                <a class="video-popup mfp-iframe" href="{{$section_2['link_youtube']}}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="administration-single-items style-01">
                        <div class="content">
                            <h4 class="title wow animate__animated animate__fadeInUp">{{$section_2['judul']}}</h4>
                            <p class="wow animate__animated animate__fadeInUp">{{$section_2['deskripsi']}}</p>
                        </div>
                        <div class="administration-quotes wow animate__animated animate__fadeInUp">
                            <h5 class="title">{{$section_2['watermark']}}</h5>
                            <div class="icon">
                                <img src="{{ asset('landing-page/assets/icon/quotes-02.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="list-items wow animate__animated animate__fadeInUp">
                            <ul>
                                @foreach ($section_2['konten'] as $item)
                                    <li>{{$item['deskripsi']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Administration Section End Here -->

    <!-- Why Choose us secion Start here -->
    <div id="section_3" class="why-choose-us-section choose-bg" style="background-image: url({{ asset('images/razen-politik/tentang-kami/'.$section_3['gambar_background']) }});">
        <div class="choose-bg-02" style="background-image: url({{ asset('images/razen-politik/tentang-kami/'.$section_3['gambar']) }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title style-01">{{$section_3['judul']}}</h4>
                        <p class="description style-01">{{$section_3['deskripsi']}}</p>
                    </div>
                    <div class="single-items-wrapper">
                        @foreach ($section_3['konten'] as $item)
                            <div class="why-choose-single-items wow animate__animated animate__fadeInUp">
                                <div class="icon">
                                    <i class="{{$item['kode_ikon']}}"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{$item['judul']}}</h4>
                                    <p>{{$item['deskripsi']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us secion End here -->

    <!-- Volunteer Section Start -->
    <div id="section_4" class="volunteer-section-area style-02">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title">
                        <div class="subtitle wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p>{{$section_4['sub_judul']}}</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_4['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$section_4['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="section_tim">
            <div class="row">
                <div class="testimonial-carousel-two">
                    @foreach ($tims as $tim)
                        <div class="volunteer-single-items">
                            <div class="thum">
                                <img src="{{ asset('images/razen-politik/tim/'.$tim->foto) }}" alt="" />
                            </div>
                            <div class="content">
                                <div class="author-meta">
                                    <span class="author-name">{{$tim->nama}}</span>
                                    <p class="designation">{{$tim->jabatan}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer Section End -->

    <!-- Faq section Start here -->
    <div id="section_5" class="accoridion-section">
        <div class="container">
            <img src="{{ asset('images/razen-politik/tentang-kami/'.$section_5['gambar_3']) }}" class="shape" alt="">
            <img src="{{ asset('images/razen-politik/tentang-kami/'.$section_5['gambar_2']) }}" class="shape-01" alt="">
            <img src="{{ asset('images/razen-politik/tentang-kami/'.$section_5['gambar_1']) }}" class="shape-02" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title">
                        <h2 class="title wow animate__animated animate__fadeInUp">{{$section_5['judul']}}</h2>
                        <p class="description wow animate__animated animate__fadeInUp">{{$section_5['deskripsi']}}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-wrapper">
                        <!-- accordion wrapper -->
                        <div id="accordion">
                            @foreach ($section_5['konten'] as $item)
                            <div class="card wow animate__animated animate__fadeInUp">
                                <div class="card-header" id="heading{{$item['id']}}">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapse{{$item['id']}}" aria-expanded="false" aria-controls="collapse{{$item['id']}}">
                                            {{$item['judul']}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse{{$item['id']}}" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    {{$item['deskripsi']}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq section end here -->
@endsection
