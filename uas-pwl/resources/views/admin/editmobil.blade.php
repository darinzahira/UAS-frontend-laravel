@extends('admin.layout.master')
@section('title', 'Edit Data Mobil')
@section('judul_halaman', 'Rental Mobol')
@section('konten')
<div class="main-content">
<section class="section">
          <div class="section-header">
            <h1>Form Update Mobil</h1>
          </div>  

          <div class="card">
              <div class="card-body">

              @foreach($mobil as $mbl)
              

              <form method="PUT" action="/update/mobil">
                  <div class="row">
                      <div class="col-md-6">

                      <div class="form-grou">
                          <label>Type Mobil</label>
                          <input type="hidden" name="id_mobil" value="{{ $mbl['id_mobil']}}">
                          <select name="kode_type" class="form-control">
                              <option value="{{ $mbl['kode_type']}}">{{ $mbl['kode_type']}}</option>
                              @foreach($mobil as $tp)
                                <option value="{{ $tp['kode_type']}}">
                                {{ $tp['nama_type']}}</option>
                              @endforeach
                          </select>
                          </div>

                      <div class="form-group">
                          <label>Merk Mobil</label>
                          <input type="text" name="merk" class="form-control" value="{{ $mbl['merk']}}"> 
                      </div>

                      <div class="form-group">
                          <label>Harga Sewa Mobil</label>
                          <input type="number" name="harga" class="form-control" value="{{ $mbl['harga']}}"> 
                         </div>

                      <div class="form-group">
                          <label>Harga Denda Mobil</label>
                          <input type="number" name="denda" class="form-control" value="{{ $mbl['denda']}}"> 
                         </div>

                      <div class="form-group">
                          <label>Nomor Kendaraan</label>
                          <input type="text" name="nopol" class="form-control" value="{{ $mbl['nopol']}}"> 
                          </div>

                      <div class="form-group">
                          <label>Warna Mobil</label>
                          <input type="text" name="warna" class="form-control" value="{{ $mbl['warna']}}"> 
                          </div>

                      

                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label>Tahun Mobil</label>
                          <input type="text" name="tahun" class="form-control" value="{{ $mbl['tahun']}}"> 
                         </div>

                      <div class="form-group">
                          <label>Status Mobil</label>
                          <select name="status" class="form-control">
                              
                              <option @if ($mbl['status'] == "1") selected = 'selected' @endif $mbl['status'] value="1">Tersedia</option>
                              <option @if ($mbl['status'] == "0") selected = 'selected' @endif $mbl['status'] value="0">Sedang Direntalkan</option>
                          </select>
                         </div>

                      <div class="form-group">
                          <label>Fasilitas AC</label>
                          <select name="ac" class="form-control">
                              <option @if ($mbl['ac'] == "1") selected = 'selected' @endif $mbl['ac'] value="1">Tersedia</option>
                              <option @if ($mbl['ac'] == "0") selected = 'selected' @endif $mbl['ac'] value="0">Tidak Tersedia</option>
                          </select>
                         </div>

                      <div class="form-group">
                          <label>Fasilitas Supir</label>
                          <select name="supir" class="form-control">
                          <option @if ($mbl['supir'] == "1") selected = 'selected' @endif $mbl['supir'] value="1">Tersedia</option>
                              <option @if ($mbl['supir'] == "0") selected = 'selected' @endif $mbl['supir'] value="0">Tidak Tersedia</option>
                          </select>
                          </div>

                      <div class="form-group">
                          <label>Fasilitas MP3 Player</label>
                          <select name="mp3_player" class="form-control">
                              <option @if ($mbl['mp3_player'] == "1") selected = 'selected' @endif $mbl['mp3_player'] value="1">Tersedia</option>
                              <option @if ($mbl['mp3_player'] == "0") selected = 'selected' @endif $mbl['mp3_player'] value="0">Tidak Tersedia</option>
                          </select>
                         </div>

                      <div class="form-group">
                          <label>Fasilitas Central Lock</label>
                          <select name="central_lock" class="form-control">
                              <option @if ($mbl['central_lock'] == "1") selected = 'selected' @endif $mbl['central_lock'] value="1">Tersedia</option>
                              <option @if ($mbl['central_lock'] == "0") selected = 'selected' @endif $mbl['central_lock'] value="0">Tidak Tersedia</option>
                          </select>
                          </div>
                        
                        <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                      </div>
                  </div>
                </form>
                @endforeach
              </div>
          </div>
</section>
</div>  
@endsection