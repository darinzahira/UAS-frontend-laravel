@extends('admin.layout.master')

@section('title', 'Edit Data Customer')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div> 
        </section>
        @foreach ($customer as $cs)
        <form method ="PUT" action="/update/customer">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id_customer" value="{{$cs['id_customer']}}">
                <input type="text" name="nama" class="form-control" value="{{$cs['nama']}}">
                </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="{{ $cs['username']}}">
               </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $cs['alamat']}}">
                </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="{{ $cs['gender']}}">{{ $cs['gender']}}</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="text" name="no_tlp" class="form-control" value="{{ $cs['no_tlp']}}">
               </div>
            <div class="form-group">
                <label>No KTP</label>
                <input type="text" name="no_ktp" class="form-control" value="{{ $cs['no_ktp']}}">
               </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="{{ $cs['password']}}">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <button type="reset" class="btn btn-sm btn-danger">Hapus</button>
        </form>
        @endforeach
</div>
@endsection