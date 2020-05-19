@extends('admin.layout.master')

@section('title', 'Data Transaksi')

@section('judul_halaman', 'Rental Mobil')

@section('konten')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <div class="table-responsive">
        <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Merk Mobil</th>
                <th>Tanggal Rental</th>
                <th>Tanggal Kembali</th>
                <th>Harga Sewa </th>
                <th>Harga Denda </th>
                <th>Total Denda</th>
                <th>Tanggal dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                <th>Check Pembayaran</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($transaksi as $tr)
                <tr>
                    <td>{{ $no++ }}</td>

                    <td>{{ $tr['nama'] }}</td>

                    <td>{{ $tr['merk'] }}</td>

                    <td>{{ date('d/m/Y', strtotime($tr['tgl_rental'])) }}</td>

                    <td>{{ date('d/m/Y', strtotime($tr['tgl_kembali'])) }}</td>

                    <td>Rp. {{ number_format($tr['harga'],0,',','.') }}/Hari</td>

                    <td>Rp. {{ number_format($tr['denda'],0,',','.') }}/Hari</td>

                    <td>Rp. {{ number_format($tr['total_denda'],0,',','.') }} /Hari</td>
                    
                    <td>@if ($tr['tgl_pengembalian'] == "0000-00-00")
                                    -
                        @else
                                  {{date('d/m/Y', strtotime($tr['tgl_pengembalian']))}}
                        @endif
                    </td>
                    <td> 
                    @if($tr['status'] == "0")
                        Belum Kembali 
                    @else
                        Kembali
                    
                    @endif</td>
                    <td>@if($tr['status'] == "0")
                        Belum Selesai
                    @else
                        Selesai
                    @endif
                    </td>
                    
                    <td>
                    <center>
                        @if(empty($tr->bukti_pembayaran))
                         <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                        @else
                        <a class="btn btn-sm btn-primary" href="Admin/Data_transaksi/pembayaran/'.$tr->id_rental) ?>"><i class="fas fa-check-circle"></i></a>
                        @endif
                        </center>
                    </td>

                    <td>
                    @if($tr['status'] == "1")
                                -
                    @else
                        <div class="row">
                        <a class="btn btn-sm btn-success mr-2"
                            href="Admin/Data_transaksi/transaksi_selesai/'.$tr->id_rental">
                                <i class='fas fa-check'></i></a>
                                <a class="btn btn-sm btn-danger"
                                href="Admin/Data_transaksi/transaksi_batal/'.$tr->id_rental">
                                <i class='fas fa-times'></i></a>
                                </div>
                    @endif
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          </div>
        </section>
</div>
@endsection