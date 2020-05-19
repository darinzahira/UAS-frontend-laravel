@extends('admin.layout.master')

@section('title', 'Detail Data Mobil')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Mobil</h1>
          </div>    
        </section>

        @foreach($detail as $dt)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img width="425px" src="/upload/{{$dt['gambar']}}">
                        </div>

                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td>Type Mobil</td>
                                    <td>
                                    @if($dt['kode_type'] == 'MBL')
                                        Mobil
                                    @elseif($dt['kode_type'] == 'BUS')
                                        Bus
                                    @elseif($dt['kode_type'] == 'PICKUP')
                                        Pickup
                                    @else
                                        <span class='text-danger'>Type Mobil Belum Terdaftar</span>
                                    @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Merk Kendaraan</td>
                                    <td>{{$dt['merk']}}</td>
                                </tr>

                                <tr>
                                    <td>Harga Sewa Kendaraan</td>
                                    <td>Rp. {{number_format($dt['harga'],0,',','.') }}/Hari</td>
                                </tr>

                                <tr>
                                    <td>Harga Denda Kendaraan</td>
                                    <td>Rp. {{number_format($dt['denda'],0,',','.') }}/Hari</td>
                                </tr>

                                <tr>
                                    <td>Plat Kendaraan</td>
                                    <td>{{$dt['nopol'] }}</td>
                                </tr>

                                <tr>
                                    <td>Warna Kendaraan</td>
                                    <td>{{$dt['warna'] }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun Kendaraan</td>
                                    <td>{{$dt['tahun'] }}</td>
                                </tr>

                                <tr>
                                    <td>Status Kendaraan</td>
                                    <td>
                                        @if($dt['status'] == "0")
                                            <span class='badge badge-danger'>Sedang Direntalkan</span>
                                        @else
                                            <span class='badge badge-primary'>Tersedia</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas AC</td>
                                    <td>
                                        @if($dt['ac'] == "0")
                                            <span class='badge badge-danger'>Tidak Tersedia</span>
                                        @else
                                            <span class='badge badge-primary'>Tersedia</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas Supir</td>
                                    <td>
                                        @if($dt['supir'] == "0")
                                            <span class='badge badge-danger'>Tidak Tersedia</span>
                                        @else
                                            <span class='badge badge-primary'>Tersedia</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas MP3 Player</td>
                                    <td>
                                        @if($dt['mp3_player'] == "0")
                                            <span class='badge badge-danger'>Tidak Tersedia</span>
                                        @else
                                            <span class='badge badge-primary'>Tersedia</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas Central Lock</td>
                                    <td>
                                        @if($dt['central_lock'] == "0")
                                            <span class='badge badge-danger'>Tidak Tersedia</span>
                                        @else
                                            <span class='badge badge-primary'>Tersedia</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <a class=" btn btn-danger" href="/mobil">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
</div>
@endsection