@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Artikel | Razen Politik')

@section('content')
    @php
        use App\Models\LandingPageArtikel;
        use Carbon\Carbon;

        $artikel = LandingPageArtikel::first();

        $section_1 = json_decode($artikel->section_1, true);
    @endphp
    <!-- About Us section start here -->
    <div id="section_1" class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{ asset('images/razen-politik/artikel/'.$section_1['gambar']) }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">{{$section_1['judul']}}</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="{{route('beranda')}}">Beranda</a></li>
                            <li><a href="#">Artikel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->
    <!-- blog items Section Start Here -->
    <div class="issues-around-us-section style-01">
        <div class="container">
            <div class="row">
                @foreach ($datas as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="news-single-items-two">
                            <div class="thumbnail">
                                <img src="{{$data->image}}" alt="">
                                <span class="tag">Politik</span>
                            </div>
                            <div class="content">
                                <div class="post-meta">
                                    <div class="post-date" style="padding-left: 0px;">
                                        <p class="date">{{Carbon::parse($data->isoDate)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y ; h:i a')}}</p>
                                    </div>
                                </div>
                                <h4 class="title">{{$data->title}}</h4>
                                <p>{{$data->description}}</p>
                                    <div class="btn-wrapper">
                                    <a href="{{$data->link}}" class="boxed-btn event-btn" target="blank"><i class="fas fa-arrow-right"></i>Baca</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- blog Items Section Start Here -->
@endsection
