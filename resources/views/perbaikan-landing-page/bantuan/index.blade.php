@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Bantuan | Razen Politik')

@section('content')
    @php
        use App\Models\LandingPageBantuan;
        use App\Models\Profil;

        $bantuan = LandingPageBantuan::first();

        $section_1 = json_decode($bantuan->section_1, true);
        $section_2 = json_decode($bantuan->section_2, true);
        $section_3 = json_decode($bantuan->section_3, true);
        $section_4 = json_decode($bantuan->section_4, true);

        $profil = Profil::first();
    @endphp
    <!-- About Us section start here -->
    <div id="section_1" class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{ asset('images/razen-politik/bantuan/'.$section_1['gambar']) }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">{{$section_1['judul']}}</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="{{route('beranda')}}">Beranda</a></li>
                            <li><a href="#">Bantuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Office Address Section Start here -->
    <div id="section_2" class="office-address-section">
        <div class="container">
        <img src="{{ asset('images/razen-politik/bantuan/'.$section_2['gambar_2']) }}" class="contact-shape" alt="">
        <img src="{{ asset('images/razen-politik/bantuan/'.$section_2['gambar_1']) }}" class="contact-shape-02" alt="">
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
            <div class="col-lg-4 col-md-6">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-testimonial-item-02 wow animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="icon style-01">
                        <i class="icon-building"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">{{$profil->nama}}</h4>
                        <ul class="contact-info-list-02">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="details">
                                    {{$profil->alamat}}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="details">
                                    {{$profil->no_hp}}
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="icon-envelope"></i>
                                </div>
                                <div class="details">
                                    {{$profil->email}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            </div>
        </div>
        </div>
    </div>
    <!-- Office Address Section Start here -->

    <!-- Contact Page Form Section Start Here -->
    <div id="section_3" class="contact-page-form-section contact-form-bg" style="background-image: url({{ asset('images/razen-politik/bantuan/'.$section_3['gambar_background_1']) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-item-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="contact-single-item">
                                    <div class="content">
                                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_3['judul']}}</h4>
                                        <p class="wow animate__animated animate__fadeInUp">{{$section_3['deskripsi']}}</p>
                                    </div>
                                    <div class="thumb">
                                        <img src="{{ asset('images/razen-politik/bantuan/'.$section_3['gambar']) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-page-wrapper style-03">
                                    <div class="contact-form contact-bg style-01" style="background-image: url({{ asset('images/razen-politik/bantuan/'.$section_3['gambar_background_2']) }});">
                                        <div class="content desktop-center">
                                            <h6 class="title">Hubungi Sekarang</h6>
                                        </div>
                                        <form action="{{ route('kontak-kami') }}" class="contact-page-form" novalidate="novalidate" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" name="nama" placeholder="Masukan nama anda" class="form-control" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" placeholder="Masukan email anda" class="form-control" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="tel" name="no_hp" placeholder="Masukan nomor hp anda" class="form-control" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" name="subjek" placeholder="Subjek" class="form-control" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group style-01">
                                                        <textarea name="message" placeholder="Masukan pesan" class="text-area"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="btn-wrapper desktop-center">
                                                        <button class="boxed-btn political-btn style-01 border-0">Kirim<i class="icon-paper-plan"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Page Form Section End Here -->

    <!-- Map Section Start Here -->
    <div id="section_4" class="map-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title wow animate__animated animate__fadeInUp">{{$section_4['judul']}}</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            {{$section_4['deskripsi']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_map">
                        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=razen%20teknologi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Start Here -->
@endsection
