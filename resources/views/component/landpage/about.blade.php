@extends('layout.app')
@section('title', 'About')
@section('topic')
    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item {{ Request::is('about') ? 'active' : '' }}">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="detail-box">
                                    <div>
                                        <h1>
                                            About
                                        </h1>
                                        {{-- <a href="">
                                        Read More
                                    </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="side_img">
            <img src="images/side-img.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img_container">
                        <div class="img-box b1">
                            <img src="{{ asset('assets/images/IMG_5702.JPG') }}" alt="" />
                        </div>
                        <div class="img-box b2">
                            <img src="{{ asset('assets/images/IMG_5775.JPG') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h3>
                                About Our College
                            </h3>
                            <p>
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                                The point of using Lorem Ipsum is that it has a more it
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- course section -->

    <section class="course_section layout_padding-bottom">
        <div class="side_img">
            <img src="{{ asset('assets/images/side-img.png') }}" alt="" />
        </div>
        <div class="container">
            <div class="heading_container">
                <h3>
                    POPULAR COURSES
                </h3>
                <p>
                    It is a long established fact that a reader will be distracted
                </p>
            </div>
            <div class="course_container">
                <div class="course_content">
                    <div class="box">
                        <img src="{{ asset('assets/images/c-1.jpg') }}" alt="" />
                        <a href="" class="">
                            <img src="{{ asset('assets/images/link.png') }}" alt="" />
                        </a>
                        <h5>
                            LMS <br />
                            Content
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/images/c-2.jpg') }}" alt="" />
                        <a href="" class="">
                            <img src="{{ asset('assets/images/link.png') }}" alt="" />
                        </a>
                        <h5>
                            From <br />
                            Zero to Hero
                        </h5>
                    </div>
                </div>
                <div class="course_content">
                    <div class="box">
                        <img src="{{ asset('assets/images/c-3.jpg') }}" alt="" />
                        <a href="" class="">
                            <img src="{{ asset('assets/images/link.png') }}" alt="" />
                        </a>
                        <h5>
                            Learn <br />
                            Python - Interactive
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/images/c-4.jpg') }}" alt="" />
                        <a href="" class="">
                            <img src="{{ asset('assets/images/link.png') }}" alt="" />
                        </a>
                        <h5>
                            Your <br />
                            Complete Guide
                        </h5>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/images/c-5.jpg') }}" alt="" />
                        <a href="" class="">
                            <img src="{{ asset('assets/images/link.png') }}" alt="" />
                        </a>
                        <h5>
                            Photography
                        </h5>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- end course section -->
@endsection
