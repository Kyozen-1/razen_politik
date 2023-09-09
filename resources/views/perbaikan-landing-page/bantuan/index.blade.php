@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Bantuan | Razen Politik')

@section('content')
    <!-- About Us section start here -->
    <div class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{asset('landing-page/assets/img/about-bg.png')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">Bantuan</h1>
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
    <div class="office-address-section">
        <div class="container">
        <img src="{{ asset('landing-page/assets/img/shape-05.png') }}" class="contact-shape" alt="">
        <img src="{{ asset('landing-page/assets/img/shape-08.png') }}" class="contact-shape-02" alt="">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title">
                <h4 class="title wow animate__animated animate__fadeInUp">Have to join with us? </h4>
                <p class="description wow animate__animated animate__fadeInUp">
                    Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will
                    frequently.
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
                    <h4 class="title">New York</h4>
                    <ul class="contact-info-list-02">
                        <li class="single-info-item">
                        <div class="icon">
                            <i class="icon-location"></i>
                        </div>
                        <div class="details">
                            Woods Avenue (East LA), 380/6, San Morni CA
                        </div>
                        </li>
                        <li class="single-info-item">
                        <div class="icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="details">
                            009-215-5599
                        </div>
                        </li>
                        <li class="single-info-item">
                        <div class="icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <div class="details">
                            info@yourmail.com
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
    <div class="contact-page-form-section contact-form-bg" style="background-image: url({{asset('landing-page/assets/img/contact-bg-02.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-item-wrapper">
                        <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="contact-single-item">
                            <div class="content">
                                <h4 class="title wow animate__animated animate__fadeInUp">Thanks for your interest in Senatory</h4>
                                <p class="wow animate__animated animate__fadeInUp">The circumstances get murkier with both sides trying every trick to ensure their victory in upcoming.</p>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('landing-page/assets/img/contact-01.png') }}" alt="">
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-page-wrapper style-03">
                                <div class="contact-form contact-bg style-01" style="background-image: url({{asset('landing-page/assets/img/contact-02.png')}});">
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
    <div class="map-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                    <h4 class="title wow animate__animated animate__fadeInUp">Find Us on Goggle Maps</h4>
                    <p class="description wow animate__animated animate__fadeInUp">
                        Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will
                        frequently.
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
