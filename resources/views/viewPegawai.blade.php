@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="card-title"><i class="fa fa-list"></i> Data Pegawai</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pegawai as $lihat)
                        <tr>
                            <td>{{ $lihat->nama }}</td>
                            <td>{{ $lihat->jabatan }}</td>
                            <td>{{ $lihat->telepon }}</td>
                            <td>{{ $lihat->email }}</td>
                            <td>{{ $lihat->alamat }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('editPegawai', $lihat->id) }}"
                                        class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('Delete', $lihat->id) }}" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?');"
                                        title="Hapus Data"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
