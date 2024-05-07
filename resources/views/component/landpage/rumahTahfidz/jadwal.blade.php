@extends('layout.landPage')
@section('title', 'Masjid Nurul Jihad')
@section('content')
    @include('includes.landPage.header.rumahtahfidz')
    <div class="site-section">
        <div class="container">
            <div class="heading-20219 mb-5">
                <h2 class="title text-cursive">Jadwal</h2>
            </div>
            <div class="row">
                {{-- @foreach ($kajian as $item)
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
                @endforeach --}}
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
