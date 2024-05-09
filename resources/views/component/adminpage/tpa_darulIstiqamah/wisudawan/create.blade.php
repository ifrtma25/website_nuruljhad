@extends('layout.adminPage')
@section('title', 'TPA Darul Istiqamah')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">TPA Darul Istiqamah</a></li>
                <li class="breadcrumb-item"><a href="{{ route('wisudawan-tpa_darulistiqamah-admin') }}">Wisudawan</a></li>
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
                                    <form class="user" action="{{ route('store-wisudawan-tpa_darulistiqamah-admin') }}"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama"
                                                name="nama" placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                <option selected>Jenis kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_wisuda">Tahun Wisuda</label>
                                            <input type="text" class="form-control form-control-user" id="tahun_wisuda"
                                                name="tahun_wisuda" placeholder="Tahun wisuda">
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Tambah Data
                                        </button>
                                        <a href="{{ route('wisudawan-tpa_darulistiqamah-admin') }}"
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
