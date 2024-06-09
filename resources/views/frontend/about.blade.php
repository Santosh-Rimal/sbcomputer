@extends('layout.frontend.master')
@section('content')
    <!-- breadcrumb begin -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-txt">
                        <h1>About us</h1>
                        <ul>
                            <li>Home</li>
                            <li><span><i class="fas fa-angle-double-right"></i></span></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- feature begin -->
    <div class="feature feature-2 feature-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ 'assets/frontend/assets/images/feature-icon-1.png' }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>qualified service</h3>
                            <p>soluta ullam incidunt officiis asper natur ab quia laborum delectus perfer endis, tenetur
                                laudantium inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ 'assets/frontend/assets/images/feature-icon-2.png' }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>always available</h3>
                            <p>soluta ullam incidunt officiis asper natur ab quia laborum delectus perfer endis, tenetur
                                laudantium inventore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/feature-icon-3.png') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <h3>quick response</h3>
                            <p>soluta ullam incidunt officiis asper natur ab quia laborum delectus perfer endis, tenetur
                                laudantium inventore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature end -->

    <!-- about begin -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-txt">
                        <div class="title">
                            <p>about</p>
                            <h2>a few words about solvit</h2>
                        </div>
                        <p>A Trusted Name To Customers Over 33 Years For Quality Computer & Mobile Repair Service. We
                            have been in the repair and service business since 1984. We have experienced service
                            department ready to handle all of your repair tasks. Our team will get your device with
                            guarantee.</p>
                        <a class="def-btn def-btn-2" href="#">learn more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-xl-block d-lg-block d-md-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="{{ asset('assets/frontend/assets/images/about-img-2.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- why choose begin -->
    <div class="why-choose why-choose-2 why-choose-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>your perfect way</p>
                        <h2>why choose our facilities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="part-img">
                        <img src="{{ asset('assets/frontend/assets/images/why-choose-img-2.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="part-txt">
                        <div class="single-box">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/why-choose-icon-1.svg') }}"
                                    alt="img">
                            </div>
                            <div class="txt">
                                <h3>24x7 support service</h3>
                                <p>In case you have a minor PC issue or need a consultation, our support team can help!
                                </p>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/why-choose-icon-2.svg') }}"
                                    alt="img">
                            </div>
                            <div class="txt">
                                <h3>good performamce</h3>
                                <p>Looking for a quick PC upgrade? Our experts will have the job done correctly and in
                                    time.</p>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/why-choose-icon-3.svg') }}"
                                    alt="img">
                            </div>
                            <div class="txt">
                                <h3>repair process</h3>
                                <p>Our appliance repair technicians are clean and professional and provide repair
                                    services you can rely on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose end -->

    <!-- team begin -->
    <div class="team team-2">
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

    <!-- testimonial begin -->
    <div class="testimonial testimonial-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="comment-area">
                        <div class="title">
                            <p>testimonial</p>
                            <h2>what client's say about us</h2>
                        </div>
                        <div class="comments owl-carousel owl-theme">
                            <div class="single-comment">
                                <div class="part-img">
                                    <img src="{{ asset('assets/frontend/assets/images/client-1.jpg') }}" alt="image">
                                </div>
                                <div class="part-txt">
                                    <h3>shaikh darda</h3>
                                    <p>"I've taken in several computers with a multitude of different problems and your
                                        team was able to get them fixed super quick. Thank you!"</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="part-img">
                                    <img src="{{ asset('assets/frontend/assets/images/client-1.jpg') }}" alt="image">
                                </div>
                                <div class="part-txt">
                                    <h3>shaikh darda</h3>
                                    <p>"I've taken in several computers with a multitude of different problems and your
                                        team was able to get them fixed super quick. Thank you!"</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="part-img">
                                    <img src="{{ asset('assets/frontend/assets/images/client-1.jpg') }}" alt="image">
                                </div>
                                <div class="part-txt">
                                    <h3>shaikh darda</h3>
                                    <p>"I've taken in several computers with a multitude of different problems and your
                                        team was able to get them fixed super quick. Thank you!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-4 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="video-area">
                        <a class="vdo-btn" data-video-id="vt3W9tbXclw" href="#"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- pricing begin -->
    <div class="pricing pricing-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>pricing</p>
                        <h2>our reasonable pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="top">
                            <p>consultation</p>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/pricing-icon-1.svg') }}"
                                    alt="image">
                            </div>
                            <h3>free!</h3>
                        </div>
                        <div class="middle">
                            <ul>
                                <li>No Card Required</li>
                                <li>Free Online Consultation</li>
                                <li>24/7 Support via Chat</li>
                                <li>Plan Upgrade Available</li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a class="def-btn def-btn-2" href="#">try now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="top">
                            <p>digital home plan</p>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/pricing-icon-2.svg') }}"
                                    alt="image">
                            </div>
                            <h3>$159/month</h3>
                        </div>
                        <div class="middle">
                            <ul>
                                <li>3 Computers</li>
                                <li>2 Mobile Devices</li>
                                <li>24/7 Remote Online Support</li>
                                <li>Free Phone Consultations</li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a class="def-btn def-btn-2" href="#">try now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="top">
                            <p>business plan</p>
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/pricing-icon-3.svg') }}"
                                    alt="image">
                            </div>
                            <h3>$899/month</h3>
                        </div>
                        <div class="middle">
                            <ul>
                                <li>50+ Computers</li>
                                <li>Setup & Install</li>
                                <li>Unlimited Remote Tech Support</li>
                                <li>Corporate Cloud Solutions</li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <a class="def-btn def-btn-2" href="#">try now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing end -->

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
@endsection
@section('header-2')
    header-2
@endsection
