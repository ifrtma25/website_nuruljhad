@extends('layout.landPage')
@section('title', 'Kajian')
@section('header')
    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div>
                    <a href="{{ route('nurul_jihad.index') }}" class="text-white">
                        <h2 class="text-white">Masjid Nurul Jihad</h2>
                    </a>
                </div>

                <nav class="site-navigation text-left ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('nurul_jihad.index') }}" class="nav-link">Beranda</a></li>
                        <li><a href="{{ route('nurul_jihad.kajian') }}" class="nav-link">Kajian</a></li>
                        <li><a href="{{ route('nurul_jihad.program') }}" class="nav-link">Program</a></li>
                        <li><a href="{{ route('nurul_jihad.struktur') }}" class="nav-link">Struktur</a></li>
                        <li><a href="contact.html" class="nav-link">Kontak</a></li>
                    </ul>
                </nav>

                <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                        class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                            class="icon-menu h3 text-white"></span></a>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="heading-20219 mb-5">
                <h2 class="title text-cursive">Latest Blog</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="event-29191 mb-5">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/landpage/images/image_1.jpg') }}"
                                alt="Image" class="img-fluid rounded"></a>
                        <div class="px-3 d-flex">

                            <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                                <span class="text-white h3 m-0 d-block">22</span>
                                <span class="text-white small">Oct 2019</span>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <span class="mr-3"> <span class="icon-bookmark mr-2 text-muted"></span><a
                                            href="#">Cause</a>, <a href="#">Event</a></span>
                                    <span> <span class="icon-person mr-2 text-muted"></span>James Smith</span>
                                </div>
                                <h3><a href="#">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-29191 mb-5">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/landpage/images/image_2.JPG') }}"
                                alt="Image" class="img-fluid rounded"></a>
                        <div class="px-3 d-flex">

                            <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                                <span class="text-white h3 m-0 d-block">22</span>
                                <span class="text-white small">Oct 2019</span>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <span class="mr-3"> <span class="icon-bookmark mr-2 text-muted"></span><a
                                            href="#">Cause</a>, <a href="#">Event</a></span>
                                    <span> <span class="icon-person mr-2 text-muted"></span>James Smith</span>
                                </div>
                                <h3><a href="#">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="event-29191 mb-5">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/landpage/images/image_4.jpg') }}"
                                alt="Image" class="img-fluid rounded"></a>
                        <div class="px-3 d-flex">

                            <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                                <span class="text-white h3 m-0 d-block">22</span>
                                <span class="text-white small">Oct 2019</span>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <span class="mr-3"> <span class="icon-bookmark mr-2 text-muted"></span><a
                                            href="#">Cause</a>, <a href="#">Event</a></span>
                                    <span> <span class="icon-person mr-2 text-muted"></span>James Smith</span>
                                </div>
                                <h3><a href="#">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-29191 mb-5">
                        <a href="#" class="d-block mb-3"><img src="images/img_2.jpg" alt="Image"
                                class="img-fluid rounded"></a>
                        <div class="px-3 d-flex">

                            <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                                <span class="text-white h3 m-0 d-block">22</span>
                                <span class="text-white small">Oct 2019</span>
                            </div>

                            <div>
                                <div class="mb-3">
                                    <span class="mr-3"> <span class="icon-bookmark mr-2 text-muted"></span><a
                                            href="#">Cause</a>, <a href="#">Event</a></span>
                                    <span> <span class="icon-person mr-2 text-muted"></span>James Smith</span>
                                </div>
                                <h3><a href="#">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="site-section">
        <div class="container">

            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
                <div class="">
                    <h2 class="text-cursive">Helping the Homeless, Hungry, and Hurtings Children</h2>
                </div>
                <div class="ml-auto"><a href="#" class="btn btn-primary">Donate Now</a></div>
            </div>

        </div>
    </div> --}}

@endsection
