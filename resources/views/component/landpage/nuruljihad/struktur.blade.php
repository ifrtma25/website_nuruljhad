@extends('layout.landPage')
@section('title', 'Struktur')
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
                        <li><a href="{{ route('nurul_jihad.penceramah') }}" class="nav-link">Penceramah</a></li>
                        <li><a href="{{ route('nurul_jihad.event') }}" class="nav-link">Event</a></li>
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
    {{-- <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto">
                    <h3 class="text-cursive mb-4">Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo molestias sunt eius autem dolor
                        provident
                        nihil hic odio.</p>
                    <p>Aliquid optio, sunt asperiores velit odio suscipit autem itaque! Aspernatur fugiat, sapiente
                        deleniti
                        quod aut ab quidem ducimus.</p>
                    <p>A minima eos optio cum, veniam repellat autem, aperiam rem dolor asperiores. Debitis dolores
                        eligendi in
                        adipisci suscipit!</p>
                    <p><a href="#" class="btn btn-primary rounded-0 px-4">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="text-cursive">Struktur Masjid</h2>
                </div>
            </div>
            {{-- <div class="row align-items-stretch justify-content-center">
                @foreach ($pimpinan as $item)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 bg-white text-center">
                            <a href="#" class="d-inline-block">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">{{ $item->jabatan }}</span>
                                <h2>{{ $item->nama }}</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="row align-items-stretch">
                @foreach ($struktur as $item)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 bg-white text-center">
                            <a href="#" class="d-inline-block">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">{{ $item->jabatan }}</span>
                                <h2>{{ $item->nama }}</h2>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
