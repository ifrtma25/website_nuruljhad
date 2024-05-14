@extends('layout.adminPage')
@section('title', 'Nurul Jihad')
@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: "Berhasil!",
                text: "{{ session('status') }}"
            });
        </script>
    @endif
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Nurul Jihad</h4>
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
                        <a href="#">Nurul Jihad</a>
                    </li>
                    <li class="separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Daftar Kegiatan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Daftar Kegiatan</div>
                            <div class="pt-2"><a class="btn btn-primary"
                                    href="{{ route('create-kegiatan-nuruljihad-admin') }}">Tambah
                                    Data</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Kegiatan</th>
                                            <th scope="col">Tema</th>
                                            <th scope="col">Tanggal(Tahun-Bulan-Hari)</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($kegiatan as $key => $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nama_kegiatan }}</td>
                                                <td>{{ $item->tema }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td><img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                        width="150px">
                                                </td>
                                                <td>
                                                    <div class="form-buttom-action">
                                                        <a href="{{ route('edit-kegiatan-nuruljihad-admin', $item->id) }}"
                                                            data-toggle="tooltip" title="Update" class="btn btn-primary"
                                                            data-original-title="Update"><i class="fa fa-edit"></i></a>
                                                        <form
                                                            action="{{ route('delete-kegiatan-nuruljihad-admin', $item->id) }}"
                                                            method="POST" onsubmit="return confirm('Yakin?')"
                                                            style="display: inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button data-toggle="tooltip" title="Hapus"
                                                                class="btn btn-danger" data-original-title="Hapus"><i
                                                                    class="fa fa-eraser"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
