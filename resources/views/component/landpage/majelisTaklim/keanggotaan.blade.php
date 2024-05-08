@extends('layout.landPage')
@section('title', 'majelis Taklim')
@section('content')
    @include('includes.landPage.header.majelistaklim')
    {{-- <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/landPage/images/Pesantren.png') }}" alt="Image" class="img-fluid">
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
                    <h2 class="text-cursive">Keanggotaan</h2>
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
            <div class="row align-items-stretch justify-content-center">
                {{-- @foreach ($keanggotaan as $item)
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
                @endforeach --}}
            </div>
        </div>
    </div>
@endsection
