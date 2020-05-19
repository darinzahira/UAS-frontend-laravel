@extends('admin.layout.master')

@section('title', 'Tambah Data Customer')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div> 
        </section>
        <form method ="GET" action="/simpan/customer">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
                </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
               </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
               </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option>----------Pilih Gender----------</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
               </div>
            <div class="form-group">
                <label>No Telpon</label>
                <input type="text" name="no_tlp" class="form-control">
                </div>
            <div class="form-group">
                <label>No KTP</label>
                <input type="text" name="no_ktp" class="form-control">
               </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
                </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <button type="reset" class="btn btn-sm btn-danger">Hapus</button>
        </form>
</div>
@endsection