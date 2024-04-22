@extends('layout.landPage')
@section('title', 'Kajian')
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
    <div class="site-section">
        <div class="container">
            <div class="heading-20219 mb-5">
                <h2 class="title text-cursive">Kajian</h2>
            </div>
            <div class="row">
                @foreach ($kajian as $item)
                    <div class="col-md-4 p-2">
                        <div class="event-29191 mb-5">
                            <div class="card">
                                <a href="#" class="d-block mb-3"><img src="{{ asset('storage/' . $item->gambar) }}"
                                        alt="Image" class="img-fluid rounded"></a>
                                <div class="px-3 d-flex">
                                    <div>
                                        <div class="mb-3">
                                            <span class="mr-3 text-primary">
                                                <span class="icon-calendar mr-2 text-muted"></span>
                                                {{ $item->tanggal }}
                                            </span>
                                            <span>
                                                <span class="icon-person mr-2 text-muted"></span>
                                                {{ $item->nama_penceramah }}
                                            </span>
                                        </div>
                                        <span>Tema :</span>
                                        <h4>{{ $item->tema }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
