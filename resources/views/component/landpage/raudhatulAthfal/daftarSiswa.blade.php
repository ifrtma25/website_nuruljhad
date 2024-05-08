@extends('layout.landPage')
@section('title', 'Raudhatul Athfal')
@section('header')
@section('content')
    @include('includes.landPage.header.ra_darulistiqamah')
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
                    <h2 class="text-cursive">Daftar Siswa</h2>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center">

                {{-- @foreach ($penceramah as $item)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 bg-white text-center">
                            <a href="{{ asset('storage/' . $item->gambar) }}" target="blankspace" class="d-inline-block">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>{{ $item->nama }}</h2>
                                <p>{{ $item->alamat }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach --}}

            </div>
        </div>
    </div>
@endsection
