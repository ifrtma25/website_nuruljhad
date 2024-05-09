@extends('layout.adminPage')
@section('title', 'Raudhatul Athfal')
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
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard-admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Raudhatul Athfal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Alumni</li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Alumni</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('create-alumni-raudhatul_athfal-admin') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tahun Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($alumni as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->tahun_lulus }}</td>
                                    <td>
                                        <div class="form-buttom-action">
                                            <a href="{{ route('edit-alumni-raudhatul_athfal-admin', $item->id) }}"
                                                data-toggle="tooltip" title="Update" class="btn btn-primary"
                                                data-original-title="Update"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('delete-alumni-raudhatul_athfal-admin', $item->id) }}"
                                                method="POST" onsubmit="return confirm('Yakin?')" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button data-toggle="tooltip" title="Hapus" class="btn btn-danger"
                                                    data-original-title="Hapus"><i class="fa fa-eraser"></i></button>
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
@endsection
