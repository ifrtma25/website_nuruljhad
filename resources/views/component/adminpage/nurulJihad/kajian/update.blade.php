@extends('layout.adminPage')
@section('title', 'Update Data')
@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Update Data</h1>
                                    </div>
                                    <form class="user"
                                        action="{{ route('update-kajian-nuruljihad-admin', $kajiannuruljihad->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_penceramah">Nama</label>
                                            <input type="text" class="form-control form-control-user"
                                                id="nama_penceramah" name="nama_penceramah"
                                                value="{{ $kajiannuruljihad->nama_penceramah }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tema">Tema</label>
                                            <input type="text" class="form-control form-control-user" id="tema"
                                                name="tema" value="{{ $kajiannuruljihad->tema }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal"
                                                name="tanggal" value="{{ $kajiannuruljihad->tanggal }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control form-control-user" id="gambar"
                                                name="gambar" value="{{ $kajiannuruljihad->gambar }}">
                                            @if ($kajiannuruljihad->gambar)
                                                <img src="{{ asset('storage/' . $kajiannuruljihad->gambar) }}"
                                                    alt="" width="100px">
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Update Data
                                        </button>
                                        <a href="{{ route('kajian-nuruljihad-admin') }}"
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
