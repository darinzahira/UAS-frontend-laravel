@extends('customer.layout.master')

@section('title', 'Our Cars')

@section('judul_halaman', 'Cars')

@section('konten')

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Cars</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach ($mobil as $mbl)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                <img src="upload/{{$mbl['gambar']}}" style = "width: 550px; height: 300px" alt="">
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{ $mbl['merk'] }}</a></h2>
                                        <h5>Rp. {{ number_format($mbl['harga'],0,',','.')}}/Hari</h5>
                                        <ul class="car-info-list">
                                            <li> 
                                                    @if($mbl['ac'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif 
                                            AC</li>
                                            <li> 
                                                    @if($mbl['supir'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif
                                                        
                                            Supir</li>
                                            <li>
                                                    @if($mbl['mp3_player'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif
                                                        
                                            MP3 Player</li>
                                            <li>
                                                    @if($mbl['central_lock'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif
                                                        
                                            Central Lock</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        
                                        <a href="/detailmobilcus/{{$mbl['id_mobil']}}" class="rent-btn">Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Single Car End -->
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->
    @endsection
