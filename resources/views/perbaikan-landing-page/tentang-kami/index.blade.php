@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Tentang Kami | Razen Politik')

@section('content')
    <!-- About Us section start here -->
    <div class="about-us-section-area about-bg margin-bottom-120" style="background-image: url({{asset('landing-page/assets/img/about-bg.png')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-8">
                    <div class="about-inner">
                        <h1 class="title wow animate__animated animate__fadeInUp">About Us</h1>
                    </div>
                    <div class="breadcrumbs wow animate__animated animate__fadeInUp animate__delay-1s">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Administration Section Start Here -->
    <div class="administration-section">
        <div class="container custom-container">
            <img src="{{ asset('landing-page/assets/img/shape-05.png') }}" class="admin-shape" alt="">
            <img src="{{ asset('landing-page/assets/img/about-shape.png') }}" class="admin-shape-02" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="administration-single-items wow animate__animated animate__fadeInLeft">
                        <div class="administrative-bg" style="background-image: url({{asset('landing-page/assets/img/business-people.png')}});">
                            <div class="btn-wrapper administration">
                                <a class="video-popup mfp-iframe" href="https://www.youtube.com/watch?v=-ZwQtICNbRc">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="administration-single-items style-01">
                        <div class="content">
                            <h4 class="title wow animate__animated animate__fadeInUp">We Have Super Power  Administration</h4>
                            <p class="wow animate__animated animate__fadeInUp">Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.</p>
                        </div>
                        <div class="administration-quotes wow animate__animated animate__fadeInUp">
                            <h5 class="title">Successfully Providing the Best Solution from 20 years</h5>
                            <div class="icon">
                                <img src="{{ asset('landing-page/assets/icon/quotes-02.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="list-items wow animate__animated animate__fadeInUp">
                            <ul>
                                <li>Politics is the set of activities that are associated</li>
                                <li>There are several ways in which approaching politics.</li>
                                <li>Some perspectives on politics view it empirically.</li>
                            </ul>
                        </div>
                        <div class="feedback wow animate__animated animate__fadeInUp">
                            <div class="feedback-single">
                                <span>99.8%</span>
                                <p>Positive Feedback From Peoples</p>
                            </div>
                            <div class="feedback-single">
                                <span>103</span>
                                <p>Board Member of Senatory</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Administration Section End Here -->

    <!-- Why Choose us secion Start here -->
    <div class="why-choose-us-section choose-bg" style="background-image: url({{asset('landing-page/assets/img/group-activity-02.png')}});">
        <div class="choose-bg-02" style="background-image: url({{asset('landing-page/assets/img/ceo.png')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title style-01">Why chose us</h4>
                        <p class="description style-01">A choice that makes the difference from others.</p>
                    </div>
                    <div class="single-items-wrapper">
                        <div class="why-choose-single-items wow animate__animated animate__fadeInUp">
                            <div class="icon">
                                <i class="icon-tips-bulb"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Smart Thinking</h4>
                                <p>Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business</p>
                            </div>
                            <img src="{{ asset('landing-page/assets/img/setting-shape.png') }}" class="shape" alt="">
                        </div>
                        <div class="why-choose-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                            <div class="icon">
                                <i class="icon-crown"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Smart Thinking</h4>
                                <p>Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business</p>
                            </div>
                            <img src="{{ asset('landing-page/assets/img/setting-shape.png') }}" class="shape" alt="">
                        </div>
                        <div class="why-choose-single-items wow animate__animated animate__fadeInUp animate__delay-2s">
                            <div class="icon">
                                <i class="icon-hand-shake"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Smart Thinking</h4>
                                <p>Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business</p>
                            </div>
                            <img src="{{ asset('landing-page/assets/img/setting-shape.png') }}" class="shape" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us secion End here -->

    <!-- Volunteer Section Start -->
    <div class="volunteer-section-area style-02">
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
                            <p>Join Campaigns</p>
                            <div class="icon">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                        </div>
                        <h4 class="title wow animate__animated animate__fadeInUp">Meet Our Party Volunteer</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            Every pleasures is to welcomed pain avoided owing to the duty
                            the obligations of business it will frequently.
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
                            <img src="{{ asset('landing-page/assets/img/volunteer-03.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                            <div class="social-links">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="volunteer-single-items">
                        <div class="thum">
                            <img src="{{ asset('landing-page/assets/img/volunteer-01.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                            <div class="social-links">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="volunteer-single-items">
                        <div class="thum">
                            <img src="{{ asset('landing-page/assets/img/volunteer-02.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                            <div class="social-links">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="volunteer-single-items">
                        <div class="thum">
                            <img src="{{ asset('landing-page/assets/img/volunteer-04.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                            <div class="social-links">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                    <div class="volunteer-single-items">
                        <div class="thum">
                            <img src="{{ asset('landing-page/assets/img/valunteer-05.png') }}" alt="" />
                        </div>
                        <div class="content">
                            <div class="author-meta">
                                <span class="author-name">Pier Goodman</span>
                                <p class="designation">MANAGING DIRECTOR</p>
                            </div>
                            <div class="social-links">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer Section End -->

    <!-- Faq section Start here -->
    <div class="accoridion-section">
        <div class="container">
            <img src="{{ asset('landing-page/assets/img/shape-06.png') }}" class="shape" alt="">
            <img src="{{ asset('landing-page/assets/img/Ellipse-01.png') }}" class="shape-01" alt="">
            <img src="{{ asset('landing-page/assets/img/Ellipse-02.png') }}" class="shape-02" alt="">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title">
                        <h2 class="title wow animate__animated animate__fadeInUp">Inspiration, innovation and countless opportunities</h2>
                        <p class="description wow animate__animated animate__fadeInUp">Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-wrapper">
                        <!-- accordion wrapper -->
                        <div id="accordion">
                            <div class="card wow animate__animated animate__fadeInUp">
                                <div class="card-header" id="headingOwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseOwo" aria-expanded="false" aria-controls="collapseOwo">
                                            Senatory Vision?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the  obligations of business.Every pleasures is to welcomed pain avoided owing  to the duty the obligations of business.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                        Senatory Mission?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the  obligations of business.Every pleasures is to welcomed pain avoided owing  to the duty the obligations of business.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow animate__animated animate__fadeInUp animate__delay-2s">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOwo">
                                        Senatory Future Plan?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the  obligations of business.Every pleasures is to welcomed pain avoided owing  to the duty the obligations of business.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq section end here -->

    <!-- Counter Section Start -->
    <div class="counter-section-area style-01">
        <div class="container">
            <div class="counter-section-inner">
                <img src="{{ asset('landing-page/assets/img/party-shape.png') }}" class="counter-shape" alt="Shape">
                <img src="{{ asset('landing-page/assets/img/party-shape.png') }}" class="counter-shape-01" alt="Shape">
                <img src="{{ asset('landing-page/assets/img/party-shape-02.png') }}" class="counter-shape-02" alt="Shape">
                <img src="{{ asset('landing-page/assets/img/party-shape-02.png') }}" class="counter-shape-03" alt="Shape">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counterup-01 style-04">
                            <div class="content">
                            <div class="count-wrap"><span class="count-num">40</span>k+</div>
                            <h4 class="title">Total Volunteer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counterup-01 style-02">
                            <div class="content">
                            <div class="count-wrap"><span class="count-num">23</span>k+</div>
                            <h4 class="title">Campaigns</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counterup-01 style-04">
                            <div class="content">
                            <div class="count-wrap"><span class="count-num">35</span>k+</div>
                            <h4 class="title">Vote Paper</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counterup-01 style-01">
                            <div class="content">
                            <div class="count-wrap"><span class="count-num">66</span>k+</div>
                            <h4 class="title">Coverage Area</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->
@endsection
