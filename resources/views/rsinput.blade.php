@extends('desain.header')

@section('content')
<form action="{{route('saveRs')}}" method="post">
    @csrf 
    <input type="text" name="nama">
    <input type="text" name="jabatan">
    <input type="text" name="rs">
    <select name="golongan" id="golongan">
        <option value="">--pilih--</option>
        <option value="A">A</option>
        <option value="A">AB</option>
        <option value="A">B</option>
        <option value="A">O</option>
    </select>
    <input type="number" name="jumlah">
    <input type="email" name="email">
    <input type="number" name="no_tlp">
    <input type="date" name="tanggal">
    <input type="text" name="alamat">
    <button type="submit">Simpan</button>
</form>
@endsection