@extends('layout.adminPage')
@section('title', 'Rumah Tahfidz')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Rumah Tahfidz</a></li>
                <li class="breadcrumb-item"><a href="{{ route('program-rumah_tahfidz-admin') }}">Program</a></li>
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
                                        action="{{ route('update-program-rumah_tahfidz-admin', $program->id) }}"
                                        enctype="multipart/form-data" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama_program">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama_program"
                                                name="nama_program" value="{{ $program->nama_program }}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control form-control-user" id="alamat"
                                                name="alamat" value="{{ $program->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                                                name="tanggal_lahir" value="{{ $program->tanggal_lahir }}">
                                        </div> --}}
                                        <button class="btn btn-primary btn-user">
                                            Update Data
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
