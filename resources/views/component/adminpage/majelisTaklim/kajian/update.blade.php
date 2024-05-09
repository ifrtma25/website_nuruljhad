@extends('layout.adminPage')
@section('title', 'majelis Taklim')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Majelis Taklim</a></li>
                <li class="breadcrumb-item"><a href="{{ route('kajian-majelis_taklim-admin') }}">Kajian</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Data</li>
            </ol>
        </nav>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Update Data</h1>
                                    </div>
                                    <form class="user"
                                        action="{{ route('update-kajian-majelis_taklim-admin', $kajian->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_penceramah">Nama</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama_penceramah" name="nama_penceramah"
                                                value="{{ $kajian->nama_penceramah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tema">Tema</label>
                                            <input type="text" class="form-control form-control-user" id="tema"
                                                name="tema" value="{{ $kajian->tema }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal"
                                                name="tanggal" value="{{ $kajian->tanggal }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control form-control-user" id="gambar"
                                                name="gambar" value="{{ $kajian->gambar }}">
                                            @if ($kajian->gambar)
                                                <img src="{{ asset('storage/' . $kajian->gambar) }}" alt=""
                                                    width="100px">
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Update Data
                                        </button>
                                        <a href="{{ route('kajian-majelis_taklim-admin') }}"
                                            class="btn btn-danger btn-user">Batal</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
