@php
    use App\Models\LandingPageFooter;
    use App\Models\Profil;
    use Carbon\Carbon;

    $beranda = LandingPageFooter::first();
    $profil = Profil::first();

    $footer = json_decode($beranda->footer, true);
@endphp
<!-- footer area start -->
<footer class="footer-area line-bg" style="background-image: url({{ asset('images/razen-politik/footer/'.$footer['gambar_background']) }});">
    <div class="footer-top issue style-01">
        <div class="container">
            <div class="footer-top-border padding-bottom-60 padding-top-75">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget wow animate__animated animate__fadeInUp">
                                <a href="{{route('beranda')}}" class="footer-logo"> <img src="{{ asset('images/razen-politik/logo/'.$profil->logo) }}" alt="footer logo"></a>
                                <p>{{$profil->deskripsi}}</p>
                                <div class="social-links">
                                    @foreach ($profil->pivot_profil_media_sosial as $item)
                                        <a href="{{$item->tautan}}"><i class="{{$item->media_sosial->kode_ikon}}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <ul class="contact_info_list wow animate__animated animate__fadeInUp">
                            <li class="single-info-item">
                                <div class="icon style-01">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="details style-01">
                                    {{$profil->alamat}}
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
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="details">
                                    {{$profil->no_hp}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-border">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">
                                Jelajah
                                <span class="line">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot style-02"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </span>
                            </h4>
                            <ul>
                                <li><a href="{{ route('tentang-kami') }}">Cerita Kami</a></li>
                                <li><a href="{{ route('tentang-kami') }}">Tim</a></li>
                                <li><a href="{{ route('artikel') }}">Berita</a></li>
                                <li><a href="#">Pemilihan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">
                                Tautan Berguna
                                <span class="line">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot style-02"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </span>
                            </h4>
                            <ul>
                                <li><a href="{{ route('bantuan') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('bantuan') }}">Terms and Conditions</a></li>
                                <li><a href="{{ route('bantuan') }}">Support</a></li>
                                <li><a href="{{ route('bantuan') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">
                                Tautan Cepat
                                <span class="line">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot style-02"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </span>
                            </h4>
                            <ul>
                                <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('harga') }}">Layanan</a></li>
                                <li><a href="{{ route('bantuan') }}">Kontak</a></li>
                                <li><a href="{{ route('artikel') }}">Berita</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget widget widget_nav_menu wow animate__animated animate__fadeInUp">
                            <h4 class="widget-title">
                                Events Campaigns
                                <span class="line">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot style-02"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </span>
                            </h4>
                            <div class="footer-event-item">
                                <div class="content">
                                    <div class="designation">
                                        <span class="event">Event</span>
                                        <span class="date">29 May 2021</span>
                                    </div>
                                    <h6 class="title"><a href="event-single.html">Lets meet for protecting eco system</a></h6>
                                    <p>
                                    Every pleasures is to welcomed pain avoided owing to the duty the
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget style-01 widget_nav_menu wow animate__animated animate__fadeInUp">
                            <div class="footer-event-item">
                                <div class="content">
                                    <div class="designation">
                                        <span class="event">Event</span>
                                        <span class="date">29 May 2021</span>
                                    </div>
                                    <h6 class="title"><a href="event-single.html">Lets meet for protecting eco system</a></h6>
                                    <p>
                                    Every pleasures is to welcomed pain avoided owing to the duty the
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-area-inner">
                            Copyright © {{Carbon::now()->year}} {{$profil->nama}}. All Rights Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
