@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="card-title"><i class="fa fa-edit"></i> Update Data Donor Darah</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('upDonor', $donor->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_pendonor">Nama Pendonor</label>
                    <input type="text" class="form-control" id="nama_pendonor" name="nama_pendonor"
                        value="{{ $donor->nama_pendonor }}">
                </div>
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <select name="nama_pegawai" id="nama_pegawai" class="form-control">
                        <option value="">-- Pilih Pegawai --</option>
                        @foreach($pegawai as $lihat)
                        <option value="{{ $lihat->nama }}" {{ $donor->nama_pegawai == $lihat->nama ? 'selected' : '' }}>
                            {{ $lihat->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="{{ $donor->alamat }}">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="number" class="form-control" id="telepon" name="telepon"
                        value="{{ $donor->telepon }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ $donor->email }}">
                </div>
                <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <select name="golongan_darah" id="golongan_darah" class="form-control">
                        <option value="A" {{ $donor->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                        <option value="AB" {{ $donor->golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                        <option value="B" {{ $donor->golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                        <option value="O" {{ $donor->golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ $donor->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki - Laki" {{ $donor->jenis_kelamin == 'Laki - Laki' ? 'selected' : '' }}>Lk</option>
                        <option value="Perempuan" {{ $donor->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Pr</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_donasi">Tanggal Donasi</label>
                    <input type="date" class="form-control" id="tanggal_donasi" name="tanggal_donasi"
                        value="{{ $donor->tanggal_donasi }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
