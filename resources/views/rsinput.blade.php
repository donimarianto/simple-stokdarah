@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="col-md-12">
        <div class="card border-danger shadow">
            <div class="card-header bg-danger text-white">
                <h3 class="card-title"><i class="fa fa-tint"></i> Form input RS</h3>
            </div>
            <div class="card-body">
                <form action="{{route('saveRs')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama"><i class="fa fa-user"></i> Nama</label>
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan"><i class="fa fa-user"></i> jabatan</label>
                        <input class="form-control" type="text" name="jabatan" id="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="rs"><i class="fa fa-user"></i> rumah sakit</label>
                        <input class="form-control" type="text" name="rs" id="rs" required>
                    </div>
                    <div class="form-group">
                        <label for="golongan"><i class="fa fa-tint"></i> Golongan Darah</label>
                        <select class="form-control" name="golongan" id="golongan" required>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah"><i class="fa fa-user"></i> jumlah</label>
                        <input class="form-control" type="number" name="jumlah" id="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="no_tlp"><i class="fa fa-phone"></i> Telepon</label>
                        <input class="form-control" type="number" name="no_tlp" id="no_tlp" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal"><i class="fa fa-calendar"></i> Tanggal pengambilan</label>
                        <input class="form-control" type="date" name="tanggal" id="tanggal" required>
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

