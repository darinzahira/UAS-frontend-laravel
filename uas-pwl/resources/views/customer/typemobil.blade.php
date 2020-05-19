@extends('customer.layout.master')

@section('title', 'Mobil')

@section('judul_halaman', 'Cars')

@section('konten')
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Mobil</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    @if($type['kode_type'=='MBL'])
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->
                            @foreach ($type as $tp)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                <img src="upload/{{$tp['gambar']}}" style = "width: 550px; height: 300px" alt="">
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{ $tp['merk'] }}</a></h2>
                                        <h5>Rp. {{ number_format($tp['harga'],0,',','.')}}/Hari</h5>
                                        <ul class="car-info-list">
                                            <li> 
                                                    @if($tp['ac'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif 
                                            AC</li>
                                            <li> 
                                                    @if($tp['supir'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif
                                                        
                                            Supir</li>
                                            <li>
                                                    @if($tp['mp3_player'] == "1")
                                                        <i class='fa fa-check-circle text-warning'></i>
                                                    @else
                                                        <i class='fa fa-times-circle text-danger'></i>
                                                    @endif
                                                        
                                            MP3 Player</li>
                                            <li>
                                                    @if($tp['central_lock'] == "1")
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
                                        
                                    
                                        
                                        <a href="/detailmobilcus/{{$tp['id_mobil']}}" class="rent-btn">Detail</a>
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
    @endif
    <!--== Car List Area End ==-->
@endsection