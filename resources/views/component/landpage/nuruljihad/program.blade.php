@extends('layout.landPage')
@section('title', 'Masjid Nurul Jihad')
@section('header')
    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container-fluid">
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
                        <li><a href="{{-- route('nurul_jihad.penceramah') --}}" class="nav-link">Penceramah</a></li>
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

            <div class="row mb-5 align-items-st">
                <div class="col-md-4">
                    <div class="heading-20219">
                        <h2 class="title text-cursive">Latest Causes</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga ea reprehenderit rerum magnam,
                        ipsum
                        aperiam. Earum, expedita ratione.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="cause shadow-sm">

                        <a href="#" class="cause-link d-block">
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                            <div class="custom-progress-wrap">
                                <span class="caption">80% complete</span>
                                <div class="custom-progress-inner">
                                    <div class="custom-progress bg-primary" style="width: 80%;"></div>
                                </div>
                            </div>
                        </a>

                        <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                            <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">School</span>
                            <h3 class="mb-4"><a href="#">Alias Odit Ipsam Quas Unde Obcaecati</a></h3>
                            <div class="border-top border-light border-bottom py-2 d-flex">
                                <div>Donated</div>
                                <div class="ml-auto"><strong class="text-primary">$32,919</strong></div>
                            </div>

                            <div class="py-4">
                                <div class="d-flex align-items-center">
                                    <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3"
                                        width="50">
                                    <div class="">James Smith</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="cause shadow-sm">

                        <a href="#" class="cause-link d-block">
                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                            <div class="custom-progress-wrap">
                                <span class="caption">80% complete</span>
                                <div class="custom-progress-inner">
                                    <div class="custom-progress bg-primary" style="width: 80%;"></div>
                                </div>
                            </div>
                        </a>

                        <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                            <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">Health</span>
                            <h3 class="mb-4"><a href="#">Alias Odit Ipsam Quas Unde Obcaecati</a></h3>
                            <div class="border-top border-light border-bottom py-2 d-flex">
                                <div>Donated</div>
                                <div class="ml-auto"><strong class="text-primary">$32,919</strong></div>
                            </div>

                            <div class="py-4">
                                <div class="d-flex align-items-center">
                                    <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3"
                                        width="50">
                                    <div class="">James Smith</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">

                    <div class="cause shadow-sm">

                        <a href="#" class="cause-link d-block">
                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                            <div class="custom-progress-wrap">
                                <span class="caption">80% complete</span>
                                <div class="custom-progress-inner">
                                    <div class="custom-progress bg-primary" style="width: 80%;"></div>
                                </div>
                            </div>
                        </a>

                        <div class="px-3 pt-3 border-top-0 border border ">
                            <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">Livelihood</span>
                            <h3 class="mb-4"><a href="#">Alias Odit Ipsam Quas Unde Obcaecati</a></h3>
                            <div class="border-top border-light border-bottom py-2 d-flex">
                                <div>Donated</div>
                                <div class="ml-auto"><strong class="text-primary">$32,919</strong></div>
                            </div>

                            <div class="py-4">
                                <div class="d-flex align-items-center">
                                    <img src="images/person_1.jpg" alt="Image" class="rounded-circle mr-3"
                                        width="50">
                                    <div class="">James Smith</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
