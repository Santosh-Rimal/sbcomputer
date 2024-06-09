@extends('layout.frontend.master')
@section('content')
    <!-- preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader -->

    <!-- header begin -->

    <!-- header end -->

    <!-- banner begin -->
    <div class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="banner-txt">
                        <h1>Quality Appliance Repair</h1>
                        <p>We are the largest full-service appliance repair company in the world. We service all types and
                            brands of home appliances. People trust us.</p>
                        <a class="def-btn" href="#">our services</a>
                        <a class="banner-btn" href="#">get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- feature begin -->
    <div class="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/frontend/assets/images/feature-icon-1.png') }}" alt="image">
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
                            <img src="{{ asset('assets/frontend/assets/images/feature-icon-2.png') }}" alt="image">
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
                        <p>A Trusted Name To Customers Over 33 Years For Quality Computer & Mobile Repair Service. We have
                            been in the repair and service business since 1984. We have experienced service department ready
                            to handle all of your repair tasks. Our team will get your device with guarantee.</p>
                        <a class="def-btn" href="#">learn more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-xl-block d-lg-block d-md-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="{{ asset('assets/frontend/assets/images/about-img.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- service begin -->
    <div class="service">
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
                            <img src="{{ asset('assets/frontend/assets/assets/images/svg/service-1.svg') }}" alt="image">
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
                            <p>solvit provides smartphone repair services that include solutions even for the most complex
                                issues.</p>
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
                        <p>We offer affordable repair services of all computer, mobile, and other electronics to client at
                            your home or office.</p>
                        <a class="def-btn" href="#">online appointment</a>
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

    <!-- why choose begin -->
    <div class="why-choose">
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
                        <img src="{{ asset('assets/frontend/assets/images/why-choose-img.png') }}" alt="img">
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
                                <p>In case you have a minor PC issue or need a consultation, our support team can help!</p>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/why-choose-icon-2.svg') }}"
                                    alt="img">
                            </div>
                            <div class="txt">
                                <h3>good performamce</h3>
                                <p>Looking for a quick PC upgrade? Our experts will have the job done correctly and in time.
                                </p>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="icon">
                                <img src="{{ asset('assets/frontend/assets/images/svg/why-choose-icon-3.svg') }}"
                                    alt="img">
                            </div>
                            <div class="txt">
                                <h3>repair process</h3>
                                <p>Our appliance repair technicians are clean and professional and provide repair services
                                    you can rely on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose end -->

    <!-- team begin -->
    <div class="team">
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
    <div class="testimonial">
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
                                    <p>“I've taken in several computers with a multitude of different problems and your team
                                        was able to get them fixed super quick. Thank you!”</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="part-img">
                                    <img src="{{ asset('assets/frontend/assets/images/client-1.jpg') }}" alt="image">
                                </div>
                                <div class="part-txt">
                                    <h3>shaikh darda</h3>
                                    <p>“I've taken in several computers with a multitude of different problems and your team
                                        was able to get them fixed super quick. Thank you!”</p>
                                </div>
                            </div>
                            <div class="single-comment">
                                <div class="part-img">
                                    <img src="{{ asset('assets/frontend/assets/images/client-1.jpg') }}" alt="image">
                                </div>
                                <div class="part-txt">
                                    <h3>shaikh darda</h3>
                                    <p>“I've taken in several computers with a multitude of different problems and your team
                                        was able to get them fixed super quick. Thank you!”</p>
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
    <div class="pricing">
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
                            <a class="def-btn" href="#">try now</a>
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
                            <a class="def-btn" href="#">try now</a>
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
                            <a class="def-btn" href="#">try now</a>
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
    <!-- fun fact end -->

    <!-- blog begin -->
    <div class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>blog</p>
                        <h2>latest blog from us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/blog-1.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <a href="#">10 Reasons iPhone and iPad Screens Crack</a>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i>21 jan 2020</li>
                                <li><i class="fas fa-user-alt"></i>by <span>admin</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/blog-2.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <a href="#">Why Your Tablet May Not Be Charging Properly</a>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i>21 jan 2020</li>
                                <li><i class="fas fa-user-alt"></i>by <span>admin</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="part-img">
                            <img src="{{ asset('assets/frontend/assets/images/blog-3.jpg') }}" alt="image">
                        </div>
                        <div class="part-txt">
                            <a href="#">20 Useful Tips on Keeping Your PC Safe</a>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i>21 jan 2020</li>
                                <li><i class="fas fa-user-alt"></i>by <span>admin</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

    <!-- subscribe begin -->
    <div class="subscribe">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11">
                    <div class="part-txt">
                        <h2>subscribe to get our latest news</h2>
                        <form>
                            <input type="email" placeholder="enter your email" required>
                            <button><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->

    <!-- contact begin -->
    <div class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="heading">
                        <p>contact</p>
                        <h2>get in touch with us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-10">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                <input type="text" name="fname" placeholder="your first name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                <input type="text" name="lname" placeholder="your last name" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                <input type="email" name="email" placeholder="enter your email" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                <input type="number" name="phone" placeholder="enter your phone" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                <input type="text" name="subject" placeholder="your subject" required>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <textarea name="message" placeholder="your message" required></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <button class="def-btn">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
@endsection
@section('header-2')
    header
@endsection
