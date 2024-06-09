@extends('layout.frontend.master')
@section('content')
    <!-- breadcrumb begin -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-txt">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>Home</li>
                            <li><span><i class="fas fa-angle-double-right"></i></span></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact begin -->
    <div class="contact contact-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-10">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('frontend.contacts.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                @if ($errors->has('fname'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('fname') }}
                                    </div>
                                @endif
                                <input type="text" name="fname" placeholder="your first name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                @if ($errors->has('lname'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('lname') }}
                                    </div>
                                @endif
                                <input type="text" name="lname" placeholder="your last name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                @if ($errors->has('email'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <input type="email" name="email" placeholder="enter your email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                @if ($errors->has('phone'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                                <input type="number" name="phone" placeholder="enter your phone">
                            </div>
                            <div class="col-xl-6 col-lg-6 col col-sm-6 col-12">
                                @if ($errors->has('subject'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('subject') }}
                                    </div>
                                @endif
                                <input type="text" name="subject" placeholder="your subject">
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                @if ($errors->has('message'))
                                    <div class="text-danger alert alert-danger mt-0">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                                <textarea name="message" placeholder="your message"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <button class="def-btn def-btn-2">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->

    <!-- map begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195693.72656128908!2d-75.14106376009002!3d39.9701359458315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew%20Jersey%2C%20USA!5e0!3m2!1sen!2sbd!4v1627242948604!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- map begin -->
@endsection
@section('header-2')
    header-2
@endsection
