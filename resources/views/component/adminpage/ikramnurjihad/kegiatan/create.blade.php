@extends('layout.adminPage')
@section('title', 'Ikramnurjihad')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Ikramnurjihad</a></li>
                <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data</h1>
                                    </div>
                                    <form class="user" action="{{ route('store-kegiatan-ikramnurjihad-admin') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_kegiatan">Nama Kegaitan</label>
                                            <input type="text" class="form-control form-control-user" id="nama_kegiatan"
                                                name="nama_kegiatan" placeholder="Nama kegiatan...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tema">Tema</label>
                                            <input type="text" class="form-control form-control-user" id="tema"
                                                name="tema" placeholder="Tema...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal"
                                                name="tanggal" placeholder="Tema...">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control form-control-user" id="gambar"
                                                name="gambar">
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Tambah Data
                                        </button>
                                        <a href="{{ route('kegiatan-ikramnurjihad-admin') }}"
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
