@extends('admin.layout.master')

@section('title', 'Edit Data Type')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <div class="section">
          <div class="section-header">
            <h1>Form Update Data Type Mobil</h1>
          </div>    
        </div>
        @foreach($type as $tp)
        <form method="PUT" action="/update/type">
        
        <div class="form-group">
            <label>Kode Type </label>
            <input type="hidden" name="id_type" value="{{$tp['id_type']}}">
            <input type="text" name="kode_type" class="form-control" value="{{$tp['kode_type']}}"> 
            </div>

        <div class="form-group">
            <label>Nama Type </label>
            <input type="text" name="nama_type" class="form-control" value="{{$tp['nama_type']}}"> 
            </div>

        <button type="reset" class="btn btn-danger mt-4">Reset</button>
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>

        </form>
        @endforeach
</div>

@endsection