@extends('layout.adminPage')
@section('title', 'Raudhatul Athfal')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Raudhatul Athfal</a></li>
                <li class="breadcrumb-item"><a href="{{ route('daftar_siswa-raudhatul_athfal-admin') }}">Daftar Siswa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
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
                                    <form class="user" action="{{ route('store-daftar_siswa-raudhatul_athfal-admin') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama"
                                                name="nama" placeholder="Nama...">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat"
                                                name="alamat" placeholder="Alamat...">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                                                name="tanggal_lahir" placeholder="Tanggal lahir...">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                                            <select name="jenis_kelamin" id="jenis_kelamin"
                                                class="form form-select form-control">
                                                <option selected>Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control form-control-user" id="gambar"
                                                name="gambar">
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Tambah Data
                                        </button>
                                        <a href="{{ route('daftar_siswa-raudhatul_athfal-admin') }}"
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
