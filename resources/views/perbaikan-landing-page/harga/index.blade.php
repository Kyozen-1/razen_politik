@extends('perbaikan-landing-page.layouts.app')
@section('title', 'Harga | Razen Politik')

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
                            <li><a href="{{ route('beranda') }}">Home</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us section End here -->

    <!-- Our Principle Section Start here -->
    <div class="our-principle-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="title wow animate__animated animate__fadeInUp">Our Campaign Principles</h4>
                        <p class="description wow animate__animated animate__fadeInUp">
                            Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp">
                        <div class="icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Democracy</h4>
                            <p>A free society depends on a free media and organizes civic</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="icon">
                            <i class="icon-equality"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Equality</h4>
                            <p>All people are welcomed as part of a free society. All people are equal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="icon">
                            <i class="icon-hand-shake"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">Diversity</h4>
                            <p>All people in a free society are different, and space for their.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp">
                    <div class="icon">
                        <i class="icon-vallot"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Security</h4>
                        <p>Every human in a free society has secure access to meet.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="icon">
                        <i class="icon-equality"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Justice</h4>
                        <p>All people have the right to be free from coercion, threat, and violence.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="princilple-single-items margin-bottom-60 wow animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="icon">
                        <i class="icon-hand-shake"></i>
                    </div>
                    <div class="content">
                        <h4 class="title">Peace</h4>
                        <p>A free society uses conflict as an opportunity to learn from.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Our Principle Section End here -->
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
@endsection
