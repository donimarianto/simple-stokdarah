@extends('desain.header')

@section('content')
<div class="container my-5">
    <div class="card border-danger shadow">
        <div class="card-header bg-danger text-white">
            <h3 class="card-title"><i class="fa fa-tint"></i> Data Stok Darah</h3>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-danger text-white">
                        <th scope="col">Golongan Darah</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>{{ $data['A'] }}</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>{{ $data['B'] }}</td>
                    </tr>
                    <tr>
                        <td>AB</td>
                        <td>{{ $data['AB'] }}</td>
                    </tr>
                    <tr>
                        <td>O</td>
                        <td>{{ $data['O'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
