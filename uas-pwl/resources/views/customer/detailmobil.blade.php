@extends('customer.layout.master')

@section('title', 'Our Cars')

@section('judul_halaman', 'Cars')

@section('konten')
<div class="container mt-5 mb-5">
    <div class="card" style="margin-top: 200px">
        <div class="card-body">
            @foreach($detail as $detail)
                <div class="row">
                <div class="col-md-6">
                    <img src="/upload/{{$detail['gambar']}}" style = "wietailh: 500px; height: 350px" alt="">
                    
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Merk Mobil</th>
                            <td> {{$detail["merk"]}}</td>
                        </tr>
                        <tr>
                            <th>No Plat Mobil</th>
                            <td> {{$detail["nopol"]}}</td>
                        </tr>
                        <tr>
                            <th>Harga Mobil</th>
                            <td>Rp. {{ number_format($detail["harga"],0,',','.')}}/Hari</td>
                        </tr>
                        <tr>
                            <th>Status Mobil</th>
                            <td>@if ($detail["status"] == "1")
                                Tersedia
                            @else
                                Telah Direntalkan
                            @endif
                            </td>
                            <tr>
                                <td><a class=" btn btn-warning" href="/mobilcus">Kembali</a></td>
                                <td>
                                    @if($detail["status"] == "0")
                                        <span class= 'btn btn-danger' disable>Telah di Rental</span>
                                    @else
                                    <button class="btn btn-success" href="#">Rental</button>
                                    @endif
                                </td> 
                            </tr>
                        </tr>
                        
                    </table>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection