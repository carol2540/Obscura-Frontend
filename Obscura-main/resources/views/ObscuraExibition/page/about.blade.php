@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/about.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center">
        <div class="container content-section-1"> 
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" width="20%">
            <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" width="20%">
            <!-- <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="frame_kanan_bawah" width="40%"> -->
            <!-- <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="pembatas-bawah" width="40%"> -->
            <div class="topic row d-flex w-100 p-lg-5">
                <div class="judul col-lg-7 col-12 p-0">
                    <p>OBSCURA</p>
                    <p>EXHIBITION:</p>
                </div>
                <div class="col-lg-5 col-12 d-flex justify-content-center">
                    <img src="{{ asset('images/ObscuraExibition/Logo/logo.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img class="pembatas_atas" src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold mt-5">MEET THE COMMITTEE</p>
        </div>
        <div class="swiper swiper-komitee">
                <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide box-image-komitee"><img src="https://images.unsplash.com/photo-1646051326596-8ebfbb6f780e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt=""></div>
                <div class="swiper-slide box-image-komitee"><img src="https://images.unsplash.com/photo-1645991897950-1078bb654f05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt=""></div>
                <div class="swiper-slide box-image-komitee"></div>
                <div class="swiper-slide box-image-komitee"></div>
                <div class="swiper-slide box-image-komitee"></div>

            </div>

        
            <div class="swiper-scrollbar swiper-scrollbar-komitee"></div>


        </div>
        <div class="button-see d-flex justify-content-between align-items-center">
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri" width="150">
            <a href="{{ route('komiteExhibition') }}"><button class="font-yellow button-about">See More</button></a>
            <img src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan" width="150">
        </div>
    </div>

    <div class="section-3 section-3_4 section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <img src="{{ asset('images/ObscuraExibition/Frame/pembatas_atas.png') }}" alt="frame_kanan_bawah">
        <div class="topic d-flex flex-column align-items-center justify-content-center">
            <p class="font-gradient font-goudy fw-bold">OUR EVENTS</p>
        </div>
        <div class="swiper swiper-event">
                <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>
                <div class="swiper-slide box-date d-flex justify-content-center align-items-center"><p class="font-goudy fw-bold">February 28th ~ March 6th 2022</p></div>

            </div>

        
            <div class="swiper-scrollbar swiper-scrollbar-event"></div>


        </div>

    </div>

    
</div>

@include('ObscuraExibition.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        const swiper = new Swiper('.swiper-komitee', {
            // Default parameters
            slidesPerView: 3,
            spaceBetween: 20,
            centeredSlides: true,

            scrollbar: {
                el: '.swiper-scrollbar-komitee',
            hide: true,
                draggable: true,
            },
        });
        const swiper2 = new Swiper('.swiper-event', {
            // Default parameters
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,

            scrollbar: {
                el: '.swiper-scrollbar-event',
            hide: true,
                draggable: true,
            },
        })
    </script>
@endsection