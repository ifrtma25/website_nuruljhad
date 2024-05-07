@extends('layout.landPage')
@section('title', 'Masjid Nurul Jihad')
@section('content')
    @include('includes.landpage.header.nuruljihad')

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="text-cursive">Struktur Tahfidz</h2>
                </div>
            </div>
            <div class="row align-items-stretch justify-content-center">
                {{-- @foreach ($struktur as $item)
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
