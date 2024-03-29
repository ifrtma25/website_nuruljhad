@extends('layout.landPage')
@section('title', 'Masjid Nurul Jihad')
@section('header')
    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div>
                    <a href="{{ route('index.nurul_jihad') }}" class="text-white">
                        <h2 class="text-white">Masjid Nurul Jihad</h2>
                    </a>
                </div>

                <nav class="site-navigation text-left ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('index.nurul_jihad') }}" class="nav-link">Beranda</a></li>
                        <li><a href="about.html" class="nav-link">Tentang Kami</a></li>
                        <li><a href="causes.html" class="nav-link">Kajian</a></li>
                        <li><a href="blog.html" class="nav-link">Informasi</a></li>
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
