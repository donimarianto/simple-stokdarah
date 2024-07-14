@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="col-md-12">
        <div class="card border-danger shadow">
            <div class="card-header bg-danger text-white">
                <h3 class="card-title"><i class="fa fa-tint"></i> Form Donor Darah</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('saveDonor') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pendonor"><i class="fa fa-user"></i> Nama Pendonor</label>
                        <input class="form-control" type="text" name="nama_pendonor" id="nama_pendonor" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai"><i class="fa fa-id-badge"></i> Nama Pegawai</label>
                        <select class="form-control" name="nama_pegawai" id="nama_pegawai" required>
                            <option value="">--Pilih Pegawai--</option>
                            @foreach($pegawai as $lihat)
                                <option value="{{ $lihat->nama }}">{{ $lihat->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="fa fa-map-marker"></i> Alamat</label>
                        <input class="form-control" type="text" name="alamat" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon"><i class="fa fa-phone"></i> Telepon</label>
                        <input class="form-control" type="number" name="telepon" id="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="golongan_darah"><i class="fa fa-tint"></i> Golongan Darah</label>
                        <select class="form-control" name="golongan_darah" id="golongan_darah" required>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir"><i class="fa fa-calendar"></i> Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin"><i class="fa fa-venus-mars"></i> Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_donasi"><i class="fa fa-calendar-check"></i> Tanggal Donasi</label>
                        <input class="form-control" type="date" name="tanggal_donasi" id="tanggal_donasi" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
