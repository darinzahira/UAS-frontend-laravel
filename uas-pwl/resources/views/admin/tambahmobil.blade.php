@extends('admin.layout.master')

@section('title', 'Tambah Data Mobil')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Form Data Mobil</h1>
          </div>  

          <div class="card">
              <div class="card-body">

              <form method="GET" action="/simpan/mobil" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-md-6">

                      <div class="form-group">
                          <label>Type Mobil</label>
                          <select name="kode_type" class="form-control">
                              <option>----------Pilih Type Mobil----------</option>
                              @foreach($type as $tp)
                                <option value="{{$tp['kode_type']}}">
                                {{$tp['nama_type']}}</option>
                              @endforeach
                          </select>
                    </div>

                      <div class="form-group">
                          <label>Merk Mobil</label>
                          <input type="text" name="merk" class="form-control"> 
                      </div>

                      <div class="form-group">
                          <label>Nomor Kendaraan</label>
                          <input type="text" name="nopol" class="form-control"> 
                          </div>

                      <div class="form-group">
                          <label>Warna Mobil</label>
                          <input type="text" name="warna" class="form-control"> 
                      </div>

                      <div class="form-group">
                          <label>AC</label>
                          <select name="ac" class="form-control">
                              <option value="">----------Pilih Status----------</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                          </select>
                          </div>
                      <div class="form-group">
                          <label>Supir</label>
                          <select name="supir" class="form-control">
                              <option value="">----------Pilih Status----------</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                          </select>
                         </div>
                      <div class="form-group">
                          <label>MP3 Player</label>
                          <select name="mp3_player" class="form-control">
                              <option value="">----------Pilih Status----------</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                          </select>
                         </div>
                      <div class="form-group">
                          <label>Central Lock</label>
                          <select name="central_lock" class="form-control">
                              <option value="">----------Pilih Status----------</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                          </select>
                          </div>

                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label>Tahun Mobil</label>
                          <input type="text" name="tahun" class="form-control"> 
                         </div>

                      <div class="form-group">
                          <label>Harga Sewa Kendaraan</label>
                          <input type="text" name="harga" class="form-control"> 
                         </div>

                      <div class="form-group">
                          <label>Harga Denda Kendaraan</label>
                          <input type="text" name="denda" class="form-control"> 
                          </div>

                      <div class="form-group">
                          <label>Status Mobil</label>
                          <select name="status" class="form-control">
                              <option value="">----------Pilih Status----------</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Sedang Direntalkan</option>
                          </select>
                        </div>
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                      </div>
                  </div>
                </form>
              </div>
          </div>
</section>
</div>  
@endsection