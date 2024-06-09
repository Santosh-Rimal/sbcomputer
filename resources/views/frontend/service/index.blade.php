@extends('layout.frontend.master')
@section('content')
    <!-- breadcrumb begin -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-txt">
                        <h1>Our services</h1>
                        <ul>
                            <li>Home</li>
                            <li><span><i class="fas fa-angle-double-right"></i></span></li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- service begin -->
    <div class="service service-2 service-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>service</p>
                        <h2>services that we provide</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-1.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>desktop repair</h3>
                            <p>Our highly qualified team offers a wide range of PC & Mac repair services as well as free
                                diagnostics.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-2.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>Laptop Repair</h3>
                            <p>We offer affordable repair services of all laptop brands and models to individual and
                                corporate clients.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-3.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>Smartphone Repair</h3>
                            <p>solvit provides smartphone repair services that include solutions even for the most
                                complex issues.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-4.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>Game pad repair</h3>
                            <p>Solvit provides reliable and reasonably priced game console repair services.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-5.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>Media Player repair</h3>
                            <p>The trained technicians of Solvit maintain and repair a variety of media players.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/service-6.svg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>Smartwatch repair</h3>
                            <p>We are also ready to help you get smartwatches of any brand and model working again.</p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- home service begin -->
    <div class="home-service">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-txt">
                        <h2>book an appointment for home service</h2>
                        <p>We offer affordable repair services of all computer, mobile, and other electronics to client
                            at your home or office.</p>
                        <a class="def-btn def-btn-2" href="#">online appointment</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="part-img">
                        <img src="{{ asset('assets/frontend/assets/images/home-service-img.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home service end -->

    <!-- team begin -->
    <div class="team team-2 team-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>our team</p>
                        <h2>behind our success</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-around">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/team-1.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>shaikh darda</h3>
                            <p>founder</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/team-2.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>darda shaikh</h3>
                            <p>manager</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/team-3.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>shaikh darda</h3>
                            <p>computer expert</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/team-4.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>darda shaikh</h3>
                            <p>mobile expert</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->

    <!-- fun fact begin -->
    <div class="fun-fact">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/fun-fact-icon-1.svg') }}"
                                alt="image">
                        </div>
                        <div class="txt">
                            <h2 class="odometer" data-count="123">000</h2>
                            <p>repairs</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/fun-fact-icon-2.svg') }}"
                                alt="image">
                        </div>
                        <div class="txt">
                            <h2 class="odometer" data-count="456">000</h2>
                            <p>awards</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/fun-fact-icon-3.svg') }}"
                                alt="image">
                        </div>
                        <div class="txt">
                            <h2 class="odometer" data-count="789">000</h2>
                            <p>partners</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/assets/images/svg/fun-fact-icon-4.svg') }}"
                                alt="image">
                        </div>
                        <div class="txt">
                            <h2 class="odometer" data-count="321">000</h2>
                            <p>clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fun fact end -->
@endsection
@section('header-2')
    header-2
@endsection
