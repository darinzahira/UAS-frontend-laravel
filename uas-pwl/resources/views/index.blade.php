@extends('master')

@section('title', 'Home')

@section('judul_halaman', 'Data Mobil')

@section('konten')
    <br/>
    <br/>
    <table class="table table-responsive table-bordered table-hover table-striped">
        <thead>
            <tr>
            <th>kode_type</th>
            <th>merk</th>
            <th>nopol</th>
            <th>warna</th>
            <th>tahun</th>
            <th>harga</th>
            <th>status</th>
            <th>denda</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $mbl)
            <tr>
            <td>{{ $mbl['kode_type'] }}</td>
            <td>{{ $mbl['merk'] }}</td>
            <td>{{ $mbl['nopol'] }}</td>
            <td>{{ $mbl['warna'] }}</td>
            <td>{{ $mbl['tahun'] }}</td>
            <td>{{ $mbl['harga'] }}</td>
            <td>{{ $mbl['status'] }}</td>
            <td>{{ $mbl['denda'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection