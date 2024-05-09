@extends('layout.adminPage')
@section('title', 'Tambah Data')
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
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                                    </div>
                                    <form class="user" action="{{ route('store-program-rumah_tahfidz-admin') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_program">Nama Program</label>
                                            <input type="text" class="form-control form-control-user" id="nama_program"
                                                name="nama_program" placeholder="Nama Program...">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat"
                                                name="alamat" placeholder="Alamat...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                                                name="tanggal_lahir" placeholder="Tanggal lahir...">
                                        </div> --}}
                                        <button class="btn btn-primary btn-user">
                                            Tambah Data
                                        </button>
                                        <a href="{{ route('program-rumah_tahfidz-admin') }}"
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