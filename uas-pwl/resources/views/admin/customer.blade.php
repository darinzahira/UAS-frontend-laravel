@extends('admin.layout.master')

@section('title', 'Data Customer')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>    
          <div class="row mt-3">
              <a href="/tambah/customer" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Customer</a>
          </div>
            <table class="table table-striped table-responsive table-bordered">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th> 
                    <th>Gender</th>
                    <th>No Telpon</th>
                    <th>No KTP</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($customer as $cs) 
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $cs['nama'] }}</td>
                        <td>{{ $cs['username'] }}</td>
                        <td>{{ $cs['alamat'] }}</td>
                        <td>{{ $cs['gender'] }}</td>
                        <td>{{ $cs['no_tlp'] }}</td>
                        <td>{{ $cs['no_ktp'] }}</td>
                        <td>{{ $cs['password'] }}</td>
                        <td>
                        <a href="/edit/customer/{{$cs['id_customer']}}" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/delete/customer/{{$cs['id_customer']}}" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
</div>
@endsection