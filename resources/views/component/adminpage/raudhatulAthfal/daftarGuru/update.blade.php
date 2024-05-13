@extends('layout.adminPage')
@section('title', 'Raudhatul Athfal')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">RA Darul Istiqamah</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('dashboard-admin') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">RA Darul Istiqamah</a>
                    </li>
                    <li class="separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('daftar_guru-raudhatul_athfal-admin') }}">Daftar Guru</a>
                    </li>
                    <li class="separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Update Data</a>
                    </li>
                </ul>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Update Data</div>
                        </div>
                        <form action="{{ route('update-daftar_guru-raudhatul_athfal-admin', $daftarguru->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $daftarguru->nama }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                value="{{ $daftarguru->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                                value="{{ $daftarguru->pendidikan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control" id="gambar" name="gambar"
                                                value="{{ $daftarguru->gambar }}">
                                            @if ($daftarguru->gambar)
                                                <img src="{{ asset('storage/' . $daftarguru->gambar) }}" alt=""
                                                    width="100px">
                                            @else
                                                <p>Gambar tidak tersedia</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Update</button>
                                <a href="{{ route('daftar_guru-raudhatul_athfal-admin') }}"
                                    class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
