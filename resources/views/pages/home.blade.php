@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <div class="hero-box-area">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area" id="product-preview">
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center"> 
                            <!-- ganti font -->
                            <h1>Welcome to the biggest Musical Instrument Store in asia</h1><br> 
                            <p>
                                <small>
                                Gudang Musik adalah destinasi utama bagi para musisi, produser, dan pecinta musik dari seluruh Asia. 
                                Kami menghadirkan ribuan pilihan alat musik, audio gear, hingga perlengkapan studio — dari merek ternama dunia 
                                hingga produk lokal berkualitas tinggi.
                                Dengan ruang pamer terbesar di Asia dan staf ahli yang siap membantu, kami tidak hanya menjual produk, 
                                tapi juga memberikan pengalaman bermusik yang lengkap. Temukan instrumen impian Anda, coba langsung di 
                                ruang demo kami, atau ikuti workshop dan event musik eksklusif di tempat kami.
                                Temukan musik, rasakan kualitas, hanya di Gudang Musik.
                                </small>
                            </p>
                            <p class="mt-5">Temukan Suara,
                                <span class="text-color-primary"> Ciptakan Karya </span> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Video Area Start -->
        <div class="banner-video-area overflow-hidden">
            <div class="container">
                <div class="row">
       <!-- looping dan autoplay video -->
                        <div class="banner-video-box">
                            <iframe width="560" height="315" 
                                src="https://www.youtube.com/embed/6BtTf0tx7tc?loop=1&playlist=6BtTf0tx7tc&autoplay=1&mute=1" 
                                title="YouTube video player" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                            </iframe>
                            </div>
            
                </div>
            </div>
        </div>
        <!-- Banner Video Area End -->

        <!-- Our Brand Area Start -->
        <div class="our-brand-area section-space--pb_90">
            <div class="container">
                <div class="brand-slider-active">
                    @php
                        $partner_count = 9;
                    @endphp
                    @for($i=1;$i<=$partner_count;$i++)
                        <div class="col-lg-12">
                            <div class="single-brand-item">
                                <a href="http://127.0.0.1:8000/instrument">
                                    <img src="{{ asset('assets/images/brand/b' . $i . '.png') }}" 
                                    class="img-fluid" alt="Partner Images"></a> 
                                    <!-- mengganti file asset brand -->
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <!-- Our Brand Area End -->

        <!-- Our Member Area Start -->
        <!-- Area Member -->
        <div class="our-member-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="member--box">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4">
                                    <div class="section-title small-mb__40 tablet-mb__40">
                                        <h4 class="section-title">Join the community!</h4>
                                        <p>Become one of the member and get discount 50% off</p>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <div class="member-wrap">
                                        <form id="memberForm" class="member--two">
                                            <input class="input-box" id="emailInput" type="text" placeholder="Your email address" required>
                                            <button class="submit-btn" type="submit"><i class="icon-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Popup -->
        <div id="popupModal" class="emodal">
            <div class="emodal-content">
                <span class="close-btn">&times;</span>
                <p>🎉 Selamat Anda telah terdaftar menjadi<br> 
                    member dan mendapatkan diskon 50%</p>
            </div>
        </div>
        <!-- Our Member Area End -->

    </div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection