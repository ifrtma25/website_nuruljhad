@extends('layout.landPage')
@section('title', 'Masjid Nurul Jihad')
@section('content')
    @include('includes.landpage.header.nuruljihad')
    <div class="site-section">
        <div class="container">

            <div class="row mb-5 align-items-st">
                <div class="col-md-4">
                    <div class="heading-20219">
                        <h2 class="title text-cursive">Update Kegiatan</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga ea reprehenderit rerum magnam,
                        ipsum
                        aperiam. Earum, expedita ratione.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($kegiatannuruljihad as $item)
                    <div class="col-md-4">
                        <div class="cause shadow-sm">

                            <a href="{{ asset('storage/' . $item->gambar) }}" target="blankspace"
                                class="cause-link d-block">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image" class="img-fluid">
                                <div class="custom-progress-wrap">
                                    {{-- <span class="caption">80% complete</span> --}}
                                    <div class="custom-progress-inner">
                                        <div class="custom-progress bg-primary" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </a>

                            <div class="px-3 pt-3 border-top-0 border border shadow-sm">
                                <span
                                    class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">{{ $item->nama_kegiatan }}</span>
                                <h3 class="mb-4"><a href="#">{{ $item->tema }}</a></h3>
                                {{-- <div class="border-top border-light border-bottom py-2 d-flex">
                                    <div>Donated</div>
                                    <div class="ml-auto"><strong class="text-primary">$32,919</strong></div>
                                </div> --}}

                                <div class="py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="">{{ $item->tanggal }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
