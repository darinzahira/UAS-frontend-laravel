@extends('admin.layout.master')

@section('title', 'Data Type')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <div class="section">
          <div class="section-header">
            <h1>Data Type Mobil</h1>
          </div>    
        </div>
        <div class="row mt-3">
              <a href="/tambah/type" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Type</a>
          </div>
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                
                @foreach($type as $tp) 
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tp['kode_type'] }} </td>
                        <td>{{ $tp['nama_type'] }} </td>
                        <td>
                        <a href="/edit/type/{{$tp['id_type']}}" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/delete/type/{{$tp['id_type']}}" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>

@endsection