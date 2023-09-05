<!DOCTYPE html>
<html lang="en">
    @include('perbaikan-landing-page.layouts.head')

    <body>
        <!-- preloader area start -->
        <div class="preloader" id="preloader">
            <div class="preloader-inner">
                <div class="loader">
                    <svg
                    id="eJPpT6qIRLO1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 41 52"
                    shape-rendering="geometricPrecision"
                    text-rendering="geometricPrecision"
                    >
                    <g id="eJPpT6qIRLO2" transform="matrix(1 0 0 1 -219 -96.817001)">
                        <g id="eJPpT6qIRLO3" transform="matrix(1 0 0 1 219.111 139.233001)">
                        <path
                            id="eJPpT6qIRLO4"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -112.573997 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                        <path
                            id="eJPpT6qIRLO5"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -97.171997 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                        <path
                            id="eJPpT6qIRLO6"
                            d="M117.617,183.55L118.923,187.05L122.66,187.209L119.73,189.534L120.73,193.134L117.613,191.067L114.496,193.134L115.496,189.534L112.567,187.209L116.304,187.05Z"
                            transform="matrix(1 0 0 1 -81.771004 -183.550003)"
                            opacity="0"
                            fill="rgb(221,19,26)"
                            stroke="none"
                            stroke-width="1"
                        />
                        </g>
                        <path
                        id="eJPpT6qIRLO7"
                        d="M6238.076,2712.141L6238.076,2692.616L6201.827,2692.616L6201.827,2715.847L6208.336,2715.847L6208.336,2699.125L6231.567,2699.125L6231.567,2705.633L6214.843,2705.633L6214.843,2722.356L6201.826,2722.356L6201.826,2728.865L6221.351,2728.865L6221.351,2716.743L6233.472,2728.865L6238.072,2728.865L6238.072,2724.265L6227.532,2713.725L6225.949,2712.144Z"
                        transform="matrix(1 0 0 1 -5980.451 -2595.798999)"
                        fill="rgb(221,19,26)"
                        fill-rule="evenodd"
                        stroke="none"
                        stroke-width="1"
                        />
                    </g>
                    </svg>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- Header-top-start -->
        <div class="header-top about">
            <div class="container nav-container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="top-social">
                            <ul class="top-social-share">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top-single-items">
                            <div class="top-single-item">
                                <div class="icon">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">009-215-5599</h5>
                                </div>
                            </div>
                            <div class="top-single-item">
                                <div class="icon">
                                    <i class="icon-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">info@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-style-01">
            <!-- support bar area end -->
            <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
                <div class="container nav-container">
                    <div class="responsive-mobile-menu">
                        <div class="logo-wrapper">
                            <a href="index.html" class="logo">
                            <img src="{{ asset('landing-page/assets/img/logo.png') }}" alt="" />
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                        <ul class="navbar-nav political">
                            <li class="current-menu-item">
                                <a href="{{ url('/perbaikan') }}">Beranda</a>
                            </li>
                            <li>
                                <a href="{{ url('/perbaikan/tentang-kami') }}">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="{{ url('/perbaikan/harga') }}">Harga</a>
                            </li>
                            <li>
                                <a href="{{ url('/perbaikan/artikel') }}">Artikel</a>
                            </li>
                            <li>
                                <a href="{{ url('/perbaikan/bantuan') }}">Bantuan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-right-content">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn btn-sanatory">
                            Login Sekarang
                            <i class="icon-paper-plan"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- navbar area end -->
        </div>
        <!-- Header-top-end -->

        @yield('content')

        <!-- Testimonial Section Start -->
        <div class="testimonial-section-area testimonial-bg margin-top-120"
            style="background-image: url({{asset('landing-page/assets/img/team.png')}});">
            <div class="shapes">
                <img src="{{ asset('landing-page/assets/img/shape-04.png') }}" class="shape-01" alt="">
                <img src="{{ asset('landing-page/assets/img/shape-03.png') }}" class="shape-02" alt="">
                <div class="shape-03"></div>
                <div class="shape-04"></div>
            </div>
            <div class="shapes style-01">
                <img src="{{ asset('landing-page/assets/img/shape-04.png') }}" class="shape-01" alt="">
                <img src="{{ asset('landing-page/assets/img/shape-03.png') }}" class="shape-02" alt="">
                <div class="shape-03"></div>
                <div class="shape-04"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel-area">
                            <div class="testimonial-carousel-three">
                                <div class="party-single-item style-02">
                                    <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <div class="quotes">
                                        <p class="description">"The theories largely focus on the development of agriculture, and the population and organizational pressure that followed and resulted in state formation. One of the most prominent theories of early and primary state formation is the hydraulic hypothesis"</p>
                                        <i class="icon-quotes"></i>
                                        <img src="{{ asset('landing-page/assets/img/shape-02.png') }}" class="quotes-shape" alt="">
                                    </div>
                                    <div class="author-meta">
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="party-single-item style-02">
                                    <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <div class="quotes">
                                        <p class="description">" Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt in culpa qui officia
                                        deserunt mollit anim id, sint occaecat cupidatat non proident, sunt in culpa qui "</p>
                                        <i class="icon-quotes"></i>
                                        <img src="{{ asset('landing-page/assets/img/shape-02.png') }}" class="quotes-shape" alt="">
                                    </div>
                                    <div class="author-meta">
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                    </div>
                                </div>
                                <div class="party-single-item style-02">
                                    <div class="content">
                                    <div class="subtitle">
                                        <p>Public Comments</p>
                                        <div class="icon">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        </div>
                                    </div>
                                    <h4 class="title">People's Say About us</h4>
                                    <div class="quotes">
                                        <p class="description">" Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum Occaecat cupidatat non proident,sunt in culpa qui officia
                                        deserunt mollit anim id, sint occaecat cupidatat non proident, sunt in culpa qui "</p>
                                        <i class="icon-quotes"></i>
                                        <img src="{{ asset('landing-page/assets/img/shape-02.png') }}" class="quotes-shape" alt="">
                                    </div>
                                    <div class="author-meta">
                                        <span class="author-name">William Smith</span>
                                        <span class="line"></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Secition End -->

        @include('perbaikan-landing-page.layouts.footer')

        <!-- News Section End -->
        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->

        @include('perbaikan-landing-page.layouts.js')
    </body>
</html>
