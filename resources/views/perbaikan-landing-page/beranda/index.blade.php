@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Beranda | Razen Politik')

@section('content')
    <!-- Header section Start -->
    <div class="header-slider-one">
        <div class="header-area header-sanatory header-bg" style="background-image:url({{asset('landing-page/assets/img/header-bg.png')}});">
            <div class="senatory-bg-img" style="background-image:url({{asset('landing-page/assets/img/body-1.png')}});"></div>
            <svg viewBox="0 0 191.6 78.6" class="lottie-shape">
            <path class="path" fill="none" stroke="#DD131A" stroke-width="4.5" stroke-linecap="round" d="M186.3,17.5c0,0-36.4-18.2-92.3-14.7S1.4,29.6,2.9,47.8s34.4,25.9,62.6,28s79.9-1.5,108.2-14.9
            s12.8-31.8-5.9-37.7c-26.4-8.4-49.5-9.5-49.5-9.5"/>
            </svg>
            <div class="container nav-container">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="header-inner">
                        <!-- header inner -->
                        <h1 class="title">Together we can make Better world</h1>
                        <h5 class="subtitle-01">
                        <i class="fas fa-circle"></i>Vote for the best candidate
                        </h5>
                        <p>
                        President represented Delaware for 36 years in the U.S. Senate
                        before becoming the 47th Vice President of the United States. As
                        President, Harison will restore America’s leadership and build
                        our communities back better.
                        </p>
                        <div class="btn-wrapper  padding-top-35 padding-bottom-50">
                        <a href="#" class="boxed-btn btn-sanatory style-01"><i class="fas fa-arrow-right"></i>Discover More</a>
                        <a class="video-play mfp-iframe" href="https://www.youtube.com/watch?v=-ZwQtICNbRc">
                            <i class="fas fa-play"></i>
                        </a>
                        </div>
                    </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-sanatory header-bg" style="background-image:url({{asset('landing-page/assets/img/header-bg.png')}});">
        <div class="senatory-bg-img" style="background-image:url({{asset('landing-page/assets/img/woman-min.png')}});"></div>
        <svg viewBox="0 0 191.6 78.6" class="lottie-shape">
            <path class="path" fill="none" stroke="#DD131A" stroke-width="4.5" stroke-linecap="round" d="M186.3,17.5c0,0-36.4-18.2-92.3-14.7S1.4,29.6,2.9,47.8s34.4,25.9,62.6,28s79.9-1.5,108.2-14.9
        s12.8-31.8-5.9-37.7c-26.4-8.4-49.5-9.5-49.5-9.5"/>
        </svg>
        <div class="container nav-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-inner">
                    <!-- header inner -->
                    <h1 class="title">Together we can make Better country</h1>
                    <h5 class="subtitle-01">
                        <i class="fas fa-circle"></i>Vote for the best candidate
                    </h5>
                    <p>
                        President represented Delaware for 36 years in the U.S. Senate
                        before becoming the 47th Vice President of the United States. As
                        President, Harison will restore America’s leadership and build
                        our communities back better.
                    </p>
                    <div class="btn-wrapper  padding-top-35 padding-bottom-50">
                        <a href="#" class="boxed-btn btn-sanatory style-01"><i class="fas fa-arrow-right"></i>Discover More</a>
                        <a class="video-play mfp-iframe" href="https://www.youtube.com/watch?v=-ZwQtICNbRc">
                        <i class="fas fa-play"></i>
                        </a>
                    </div>
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
        </div>
        <div class="header-area header-sanatory header-bg" style="background-image:url({{asset('landing-page/assets/img/header-bg.png')}});">
            <div class="senatory-bg-img" style="background-image:url({{asset('landing-page/assets/img/men-photo.png')}});"></div>
            <svg viewBox="0 0 191.6 78.6" class="lottie-shape">
            <path class="path" fill="none" stroke="#DD131A" stroke-width="4.5" stroke-linecap="round" d="M186.3,17.5c0,0-36.4-18.2-92.3-14.7S1.4,29.6,2.9,47.8s34.4,25.9,62.6,28s79.9-1.5,108.2-14.9
            s12.8-31.8-5.9-37.7c-26.4-8.4-49.5-9.5-49.5-9.5"/>
            </svg>
            <div class="container nav-container">
                <div class="row">
                    <div class="col-lg-8">
                    <div class="header-inner">
                        <!-- header inner -->
                        <h1 class="title">Together we can make Better city</h1>
                        <h5 class="subtitle-01">
                        <i class="fas fa-circle"></i>Vote for the best candidate
                        </h5>
                        <p>
                        President represented Delaware for 36 years in the U.S. Senate
                        before becoming the 47th Vice President of the United States. As
                        President, Harison will restore America’s leadership and build
                        our communities back better.
                        </p>
                        <div class="btn-wrapper  padding-top-35 padding-bottom-50">
                        <a href="#" class="boxed-btn btn-sanatory style-01"><i class="fas fa-arrow-right"></i>Discover More</a>
                        <a class="video-play mfp-iframe" href="https://www.youtube.com/watch?v=-ZwQtICNbRc">
                            <i class="fas fa-play"></i>
                        </a>
                        </div>
                    </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header section End -->

    <!-- Header bottom Section Start -->
    <div class="header-bottom-area padding-top-120 padding-bottom-70"
        style="background-image: url({{asset('landing-page/assets/img/dotted-shape.png')}})">
        <div class="container">
        <div class="row">
            <div class="testimonial-carousel">
            <div class="single-testimonial-item wow animate__animated animate__fadeInUp">
                <img src="{{ asset('landing-page/assets/img/flag-shape.png') }}" class="shape-01" alt="" />
                <div class="icon">
                <span class="icon-sweet-hone"></span>
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
            <div class="single-testimonial-item wow animate__animated animate__fadeInUp animate__delay-1s">
                <img src="{{ asset('landing-page/assets/img/flag-shape.png') }}" class="shape-01" alt="" />
                <div class="icon">
                <span class="icon-kids-house"></span>
                </div>
                <div class="content">
                <h4 class="title">Parks, Fields & Recreation</h4>
                <p class="description">
                    Efficiently orchestrate resource sucking human capital whereas
                    future-proof outsourcing. Credibly actualize one-to-one
                    meta-services.
                </p>
                </div>
            </div>
            <div class="single-testimonial-item wow animate__animated animate__fadeInUp animate__delay-2s">
                <img src="{{ asset('landing-page/assets/img/flag-shape.png') }}" class="shape-01" alt="" />
                <div class="icon">
                <span class="icon-gym"></span>
                </div>
                <div class="content">
                <h4 class="title">Sports & Fitness Center</h4>
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
    <div class="our-party-section-area">
        <div class="party-bg" style="background-image: url({{asset('landing-page/assets/img/leader-01.png')}})"></div>
        <img src="{{ asset('landing-page/assets/img/party-shape.png') }}" class="party-shape" alt="" />
        <img src="{{ asset('landing-page/assets/img/party-shape-02.png') }}" class="party-shape-01" alt="" />
        <div class="party-shape-02"></div>
        <div class="party-shape-03"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <div class="party-single-item vision">
                <div class="content">
                <div class="subtitle wow animate__animated animate__fadeInUp">
                    <p>Our Party Visions</p>
                    <div class="icon">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    </div>
                </div>
                <h4 class="title wow animate__animated animate__fadeInUp">Join The Fight for Our Freedom</h4>
                <p class="description wow animate__animated animate__fadeInUp">
                    Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently occur that pleasures have to.
                </p>
                <p class="description none wow animate__animated animate__fadeInUp">
                    How all this mistaken idea of denouncing pleasure and praising
                    pain was born & we will give you a complete account of the
                    system.
                </p>
                <div class="feedback wow animate__animated animate__fadeInUp">
                    <span>99.8%</span>
                    <p>Positive Feedback From Peoples</p>
                </div>
                </div>
                <div class="  btn-wrapper margin-top-35  wow animate__animated animate__fadeInUp">
                <a href="about.html" class="boxed-btn btn-sanatory style-02"><i class="fas fa-arrow-right"></i>Read More Us</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Our party section end -->

    <!-- Donation Section Start -->
    <div class="donation-section-area">
        <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <div class="party-single-item margin-bottom-50">
                <div class="content">
                <div class="subtitle wow animate__animated animate__fadeInUp">
                    <p>Contribute For Us</p>
                    <div class="icon">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    </div>
                </div>
                <h4 class="title style-01 wow animate__animated animate__fadeInUp">Make A Donation For Your Country</h4>
                <p class="description style-01 wow animate__animated animate__fadeInUp">
                    Every pleasures is to welcomed pain avoided owing to the duty
                    the obligations of business it will frequently occur that
                    pleasures have to be repudiated.
                </p>
                </div>
                <div class="btn-wrapper margin-top-35 wow animate__animated animate__fadeInUp">
                <a href="#" class="price-btn">$25</a>
                <a href="#" class="price-btn">$50</a>
                <a href="#" class="price-btn">$100</a>
                <a href="#" class="boxed-btn donate-btn btn-sanatory">Donation Now <i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
            </div>
            <div class="col-lg-5">
            <div class="donate-bg" style="background-image: url({{asset('landing-page/assets/img/Asset-01.png')}})">
                <div class="donate-bg-02" style="background-image: url({{asset('landing-page/assets/img/donation.png')}})"></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Donation Section End -->

    <!-- Vote Section Start -->
    <div class="vote-section-area vote-bg margin-top-120" style="background-image: url({{asset('landing-page/assets/img/vote-banner.png')}})">
        <img src="{{ asset('landing-page/assets/img/party-shape.png') }}" class="party-shape" alt="" />
        <img src="{{ asset('landing-page/assets/img/party-shape-02.png') }}" class="party-shape-01" alt="" />
        <div class="party-shape-02"></div>
        <div class="party-shape-03"></div>
        <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
            <div class="party-single-item style-01">
                <div class="content">
                <div class="subtitle wow animate__animated animate__fadeInUp">
                    <p>Vote Our Party</p>
                    <div class="icon">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    </div>
                </div>
                <h4 class="title wow animate__animated animate__fadeInUp">Your Support make help us</h4>
                <p class="description style-01 wow animate__animated animate__fadeInUp">
                    Every pleasures is to welcomed pain avoided owing to the duty
                    the obligations of business it will frequently occur that
                    pleasures have to be repudiated.
                </p>
                <div class="video-section wow animate__animated animate__fadeInUp">
                    <span>Watch the video</span>
                    <a class="video-play style-01 mfp-iframe" href="https://www.youtube.com/watch?v=-ZwQtICNbRc">
                    <i class="fas fa-play"></i>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Vote Section End -->

    <!-- Campaigns Section Start -->
    <div class="campaign-section-area">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
            <div class="section-title">
                <div class="subtitle wow animate__animated animate__fadeInUp">
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
                <h4 class="title wow animate__animated animate__fadeInUp">Upcoming Events</h4>
                <p class="description wow animate__animated animate__fadeInUp">
                Excepteur sint occae cat cupidatat non proident, sunt in culpa
                qui officia deser unt mollit anim.
                </p>
            </div>
            </div>
        </div>
        <div class="campaign-single-item">
            <div class="row">
            <div class="col-lg-7">
                <div class="campaign-bg" style="background-image: url({{asset('landing-page/assets/img/audience.png')}})">
                <div id="mycountdown" class="counter-single-item">
                    <ul>
                    <li class="counter-item wow animate__animated animate__fadeInUp">
                        <span class="days"></span>
                        <h6>Days</h6>
                    </li>
                    <li class="counter-item wow animate__animated animate__fadeInUp animate__delay-1s">
                        <span class="hours"></span>
                        <h6>Hours</h6>
                    </li>
                    <li class="counter-item wow animate__animated animate__fadeInUp animate__delay-2s">
                        <span class="mins"></span>
                        <h6>Minuts</h6>
                    </li>
                    <li class="counter-item wow animate__animated animate__fadeInUp animate__delay-3s">
                        <span class="secs"></span>
                        <h6>Seconds</h6>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="campaign-list-item">
                <div class="list-single-items">
                    <div class="content">
                    <div class="designation">
                        <span class="event">Event</span>
                        <span class="date">29 May 2021</span>
                    </div>
                    <a href="event-single.html"><h5 class="title">Let’s Make Country Great with Razniti</h5></a>
                    <p>
                        Every pleasures is to welcomed pain avoided owing to the
                        duty the obligations of business.
                    </p>
                    </div>
                </div>
                <div class="list-single-items">
                    <div class="content">
                    <div class="designation">
                        <span class="event">Event</span>
                        <span class="date">29 May 2021</span>
                    </div>
                    <a href="event-single.html"><h5 class="title">Lets meet & help for education in tax</h5></a>
                    <p>
                        Every pleasures is to welcomed pain avoided owing to the
                        duty the obligations of business.
                    </p>
                    </div>
                </div>
                <div class="list-single-items">
                    <div class="content">
                    <div class="designation">
                        <span class="event">Event</span>
                        <span class="date">29 May 2021</span>
                    </div>
                    <a href="event-single.html"><h5 class="title">Lets meet for protecting eco system</h5></a>
                    <p class="style-01">
                        Every pleasures is to welcomed pain avoided owing to the
                        duty the obligations of business.
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="campaign-single-items-02 wow animate__animated animate__fadeInLeft">
                <div class="icon">
                <i class="icon-human-right"></i>
                </div>
                <div class="content">
                <div class="title-wrapper">
                    <div class="title">
                    <h5>Human Rights</h5>
                    </div>
                    <div class="line">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot style-02"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    </div>
                </div>
                <p>
                    Every pleasures is to welcomed pain avoided owing to the duty
                    the obligations of business
                </p>
                </div>
                <img src="{{ asset('landing-page/assets/img/setting-shape.png') }}" class="shape" alt="" />
            </div>
            </div>
            <div class="col-lg-6">
            <div class="campaign-single-items-02 wow animate__animated animate__fadeInRight">
                <div class="icon">
                <i class="icon-women-leader"></i>
                </div>
                <div class="content">
                <div class="title-wrapper">
                    <div class="title">
                    <h5>Women Leaders</h5>
                    </div>
                    <div class="line">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot style-02"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    </div>
                </div>
                <p>
                    Every pleasures is to welcomed pain avoided owing to the duty
                    the obligations of business
                </p>
                </div>
                <img src="{{ asset('landing-page/assets/img/setting-shape.png') }}" class="shape" alt="" />
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Campaigns Section End -->

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
                <p>Become A Volunteer</p>
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

    <!-- Counter Section Start -->
    <div class="counter-section-area style-02">
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

    <!-- Event items Section Start Here -->
    <div class="issues-around-us-section">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-single-items">
                    <div class="content">
                        <div class="post-mate">
                            <h2 class="post-date">21</h2>
                            <div class="post-month">jan</div>
                        </div>
                        <div class="subtitle">
                            <div class="location">
                                <div class="icon">
                                    <i class="icon-location"></i>
                                </div>
                                <p>684 Ann St.  FL 34608</p>
                            </div>
                            <div class="time">
                                <div class="icon">
                                    <i class="icon-clock"></i>
                                </div>
                                <p>12:00 am</p>
                            </div>
                        </div>
                        <h4 class="title"><a href="event-single.html">The Economy of the US: What are the Weakest Spots?</a></h4>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        <div class="btn-wrapper">
                            <a href="event-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="event-single-items">
                    <div class="content">
                        <div class="post-mate">
                            <h2 class="post-date">04</h2>
                            <div class="post-month">feb</div>
                        </div>
                        <div class="subtitle">
                            <div class="location">
                                <div class="icon">
                                    <i class="icon-location"></i>
                                </div>
                                <p>684 Ann St.  FL 34608</p>
                            </div>
                            <div class="time">
                                <div class="icon">
                                    <i class="icon-clock"></i>
                                </div>
                                <p>12:00 am</p>
                            </div>
                        </div>
                        <h4 class="title"><a href="event-single.html">The Economy of the US: What are the Weakest Spots?</a></h4>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        <div class="btn-wrapper">
                            <a href="event-single.html" class="boxed-btn event-btn"><i class="fas fa-arrow-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 col-9">
                <div class="blog-pagination style-01">
                    <div class="blog-pagination style-01 margin-top-30">
                        <ul>
                            <li><span>PREV</span></li>
                            <li><a class="page-numbers" href="#">01</a></li>
                            <li><a class="page-numbers current" href="#">02</a></li>
                            <li><a class="page-numbers" href="#">03</a></li>
                            <li><a class="page-numbers" href="#">04</a></li>
                            <li><span class="next">NEXT</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Event Items Section Start Here -->

    <!-- News Section Start -->
    <div class="news-section-start">
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
                <p>Our News</p>
                <div class="icon">
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                </div>
                </div>
                <h4 class="title wow animate__animated animate__fadeInUp">Latest News & Articles</h4>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="news-single-items wow animate__animated animate__fadeInUp">
                <div class="news-bg" style="background-image: url({{asset('landing-page/assets/img/businessmen-shaking-hands.png')}});">
                <span class="even">Event</span>
                <div class="content">
                    <a href="news-single.html"><h4 class="title">Many important brands have given us their trust</h4></a>
                    <div class="author-meta">
                    <p class="author-name">By:Smith Roy</p>
                    <p>24th March,2021</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="news-single-items wow animate__animated animate__fadeInUp animate__delay-1s">
                <div class="news-bg" style="background-image: url({{asset('landing-page/assets/img/partners-shaking-hands.png')}});">
                <span class="even">Event</span>
                <div class="content">
                    <a href="news-single.html"><h4 class="title">Many important brands have given us their trust</h4></a>
                    <div class="author-meta">
                    <p class="author-name">By:Smith Roy</p>
                    <p>24th March,2021</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-12">
            <ul class="news-single-list wow animate__animated animate__fadeInRight animate__delay-2s">
                <li class="news-single-list-items">
                <div class="thumb">
                    <img src="{{ asset('landing-page/assets/img/cheking-sheet.png') }}" alt="">
                </div>
                <div class="content">
                    <span class="date">24th March,2021</span>
                    <a href="news-single.html"><h4 class="title">Many important brands have given us their</h4></a>
                </div>
                </li>
                <li class="news-single-list-items">
                <div class="thumb">
                    <img src="{{ asset('landing-page/assets/img/busisess-women.png') }}" alt="">
                </div>
                <div class="content">
                    <span class="date">24th March,2021</span>
                    <a href="news-single.html"><h4 class="title">Many important brands have given us their</h4></a>
                </div>
                </li>
                <li class="news-single-list-items">
                <div class="thumb">
                    <img src="{{ asset('landing-page/assets/img/discussion.png') }}" alt="">
                </div>
                <div class="content">
                    <span class="date">24th March,2021</span>
                    <a href="news-single.html"><h4 class="title">Many important brands have given us their</h4></a>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <!-- News Section End  -->
@endsection
