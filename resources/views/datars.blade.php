@extends('desain.header')

@section('content')
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Rumah Sakit</th>
            <th>Rumah Sakit</th>
            <th>Golongan</th>
            <th>Jumlah</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Tanggal</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($data as $lihat)
            <td>{{$lihat->nama}}</td>
            <td>{{$lihat->jabatan}}</td>
            <td>{{$lihat->rs}}</td>
            <td>{{$lihat->golongan}}</td>
            <td>{{$lihat->jumlah}}</td>
            <td>{{$lihat->email}}</td>
            <td>{{$lihat->no_tlp}}</td>
            <td>{{$lihat->tanggal}}</td>
            <td>{{$lihat->alamat}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
@endsection