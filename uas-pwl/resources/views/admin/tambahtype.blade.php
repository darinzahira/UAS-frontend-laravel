@extends('admin.layout.master')

@section('title', 'Tambah Data Type')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <div class="section">
          <div class="section-header">
            <h1>Form Tambah Data Type Mobil</h1>
          </div>    
        </div>

        <form method="GET" action="/simpan/type">
        
        <div class="form-group">
            <label>Kode Type </label>
            <input type="text" name="kode_type" class="form-control"> 
            </div>

        <div class="form-group">
            <label>Nama Type </label>
            <input type="text" name="nama_type" class="form-control"> 
            </div>

        <button type="reset" class="btn btn-danger mt-4">Reset</button>
        <button type="submit" class="btn btn-primary mt-4">Simpan</button>

        </form>
    
</div>

@endsection