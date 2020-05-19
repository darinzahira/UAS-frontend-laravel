@extends('admin.layout.master')

@section('title', 'Data Mobil')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mobil</h1>
          </div>
          <div class="row mt-3">
              <a href="/tambah/mobil" class="btn btn-sm btn-primary mb-4">
            <i class="fas fa-plus fa-sm"></i>Tambah Data Mobil</a>
          </div>
          <div class="table-responsive">
          <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Type</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Nomor Kendaraan</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>

            </thead>
            <tbody>
                
                @foreach($mobil as $mbl)
                <tr>
                    <td>{{$no++}}</td>
                    <td>
                      <img width="160px" src="upload/{{$mbl['gambar']}}">
                    </td>
                    <td>{{$mbl['kode_type']}}</td>
                    <td>{{$mbl['merk']}}</td>
                    <td>Rp. {{ number_format($mbl['harga'],0,',','.') }}/Hari</td>
                    <td>{{$mbl['nopol']}}</td>
                    <td>
                    @if($mbl['status'] == "0")
                        <span class='badge badge-danger text-white'>Sedang Direntalkan </span>
                    @else
                        <span class='badge badge-primary text-white'>Tersedia </span>
                    @endif
                    </td>
                    <td>
                        <a href="/detailmobil/{{$mbl['id_mobil']}}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="/edit/mobil/{{$mbl['id_mobil']}}" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/delete/mobil/{{$mbl['id_mobil']}}" class="btn btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </section>
</div>
@endsection