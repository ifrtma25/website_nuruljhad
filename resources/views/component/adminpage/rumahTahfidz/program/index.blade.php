@extends('layout.adminPage')
@section('title', 'Program')
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

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Program</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{-- route('create-program-rumahtahfidz-admin') --}}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Program</th>
                                <th>Tema</th>
                                <th>Tanggal</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- @foreach ($program as $key => $item)
                            <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->nama_program }}</td>
                                    <td>{{ $item->tema }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td><a href="{{ asset('storage/' . $item->gambar) }}" target="blankspace"><img
                                                src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                width="150px"></a>
                                    </td>
                                    <td>
                                        <div class="form-buttom-action">
                                            <a href="{{ route('edit-program-rumahtahfidz-admin', $item->id) }}"
                                                data-toggle="tooltip" title="Update" class="btn btn-primary"
                                                data-original-title="Update"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('delete-program-rumahtahfidz-admin', $item->id) }}"
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
                        @endforeach --}}
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection