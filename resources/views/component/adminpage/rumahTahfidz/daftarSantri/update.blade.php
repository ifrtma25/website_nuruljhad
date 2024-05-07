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
                                        action="{{ route('update-daftar_santri-rumah_tahfidz-admin', $daftartahfidz->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama"
                                                name="nama" value="{{ $daftartahfidz->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat"
                                                name="alamat" value="{{ $daftartahfidz->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                                                name="tanggal_lahir" value="{{ $daftartahfidz->tanggal_lahir }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control form-control-user" id="gambar"
                                                name="gambar" value="{{ $daftartahfidz->gambar }}">
                                            @if ($daftartahfidz->gambar)
                                                <img src="{{ asset('storage/' . $daftartahfidz->gambar) }}" alt=""
                                                    width="100px">
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Update Data
                                        </button>
                                        <a href="{{ route('daftar_santri-rumah_tahfidz-admin') }}"
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
