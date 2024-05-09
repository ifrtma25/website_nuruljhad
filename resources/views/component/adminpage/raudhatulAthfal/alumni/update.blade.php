@extends('layout.adminPage')
@section('title', 'Raudhatul Athfal')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Raudhatul Athfal</a></li>
                <li class="breadcrumb-item"><a href="{{ route('alumni-raudhatul_athfal-admin') }}">Alumni</a></li>
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
                                        action="{{ route('update-alumni-raudhatul_athfal-admin', $alumni->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama"
                                                name="nama" value="{{ $alumni->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control form-control-user" id="jenis_kelamin"
                                                name="jenis_kelamin" value="{{ $alumni->jenis_kelamin }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_lulus">Tahun Lulus</label>
                                            <input type="text" class="form-control form-control-user" id="tahun_lulus"
                                                name="tahun_lulus" value="{{ $alumni->tahun_lulus }}">
                                        </div>
                                        <button class="btn btn-primary btn-user">
                                            Update Data
                                        </button>
                                        <a href="{{ route('alumni-raudhatul_athfal-admin') }}"
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
