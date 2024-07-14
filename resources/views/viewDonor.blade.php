@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="card-title"><i class="fa fa-list"></i> Data Donor Darah</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pendonor</th>
                            <th>Nama Pegawai</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Golongan Darah</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Donasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donor as $lihat)
                        <tr>
                            <td>{{ $lihat->nama_pendonor }}</td>
                            <td>{{ $lihat->nama_pegawai }}</td>
                            <td>{{ $lihat->alamat }}</td>
                            <td>{{ $lihat->telepon }}</td>
                            <td>{{ $lihat->email }}</td>
                            <td>{{ $lihat->golongan_darah }}</td>
                            <td>{{ $lihat->tanggal_lahir }}</td>
                            <td>{{ $lihat->jenis_kelamin }}</td>
                            <td>{{ $lihat->tanggal_donasi }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('editForm', $lihat->id) }}" class="btn btn-sm btn-primary"
                                        title="Edit Data"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('hapus', $lihat->id) }}" class="btn btn-sm btn-danger"
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
