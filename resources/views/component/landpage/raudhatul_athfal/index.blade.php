@extends('layout.landpage')
@section('title', 'Raudhatul Athfal')
@section('header')
    <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div>
                    <a href="{{ route('index.raudhatul_athfal') }}" class="text-white">
                        <h2 class="text-white">Raudhatul Athfal</h2>
                    </a>
                </div>

                <nav class="site-navigation text-left ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('index.raudhatul_athfal') }}" class="nav-link">Dashboard</a></li>
                        <li><a href="about.html" class="nav-link">About Us</a></li>
                        <li><a href="causes.html" class="nav-link">Our Causes</a></li>
                        <li><a href="blog.html" class="nav-link">Blog</a></li>
                        <li><a href="contact.html" class="nav-link">Contact</a></li>
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
