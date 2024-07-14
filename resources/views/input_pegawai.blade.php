@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="col-md-8 offset-md-2">
        <div class="card border-danger shadow-lg">
            <div class="card-header bg-danger text-white">
                <h3 class="card-title"><i class="fa fa-user"></i> Form Input Pegawai</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('savePegawai') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama"><i class="fa fa-user"></i> Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan"><i class="fa fa-briefcase"></i> Jabatan</label>
                        <input class="form-control" type="text" name="jabatan" id="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon"><i class="fa fa-phone"></i> Telepon</label>
                        <input class="form-control" type="text" name="telepon" id="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><i class="fa fa-map-marker"></i> Alamat</label>
                        <input class="form-control" type="text" name="alamat" id="alamat" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
