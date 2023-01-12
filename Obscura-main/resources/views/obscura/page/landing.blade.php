@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/landing.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section-1 d-flex justify-content-center align-items-center">
        <div class="content m-auto d-flex flex-column justify-content-center align-items-center container">
            <div class="d-flex justify-content-center welcome-text">
                <img class="m-auto" src="{{ asset('images/home/HOME_Welcome.png') }}" alt="" >
            </div>
            <div class="text-content">
                <h2>TO OBSCURA</h2>
            </div>
            <div class="line-asset d-flex justify-content-center">
                <img src="{{ asset('images/home/HOME_Line.png') }}" alt="" width="65%">
            </div>
            <div class="button-asset d-flex justify-content-center mb-3">
                <img src="{{ asset('images/home/HOME_Button_Explore Us.png') }}" width="50%" alt="">
            </div>
        </div>

        <div class="bottom-asset">
            <img src="{{ asset('images/home/HOME_bottom.png') }}" alt="">
        </div>
    </div>
    <div class="main-section position-relative">
        <img src="{{ asset('images/home/gallery/teks.png') }}" class="position-absolute obscura-gallery" alt="">
        <img src="{{ asset('images/home/gallery/button.png') }}" class="position-absolute obscura-gallery-button" alt="">

        <div class="section-2 d-flex flex-column justify-content-center align-items-center pt-5 container">
            <div class="content d-flex align-items-center row">
                    <div class="col-lg-5 col-12 d-flex flex-column justify-content-center align-items-center">
                        <span><img src="{{ asset('images/home/BUTTON SEGITIGA.png') }}" alt=""></span>
                        <span></span>
                        <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Cover Pameran.png') }}" width="70%" alt="">
                        <span class="reverse"><img src="{{ asset('images/home/BUTTON SEGITIGA.png') }}" alt=""></span>
                    </div>
                    <div class="col-lg-7 col-12 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start align-items-end">
                            <img src="{{ asset('images/home/exibition/OBS EXHI_TEKS_Obscura Exhibition.png') }}" width="70%" alt="">
                            <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_2022.png') }}" class="image-year" alt="">
                        </div>
                        <div class="d-flex justify-content-start  align-items-center mt-4">
                            <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Garis Merah Hijau.png') }}" class="pe-4" width="44%" alt="">
                            <img src="{{ asset('images/home/exibition/OBS EXHI_ASET_Trapesium.png') }}" width="44%" alt="">
                        </div>
                        <div class="weekly-desc pt-3">
                            <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro fugit unde nobis, error voluptas architecto? Exercitationem temporibus provident, quibusdam deserunt deleniti, qui vero maxime facere dolorem itaque possimus amet velit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur voluptate accusantium nobis error nulla ad ea dolorum adipisci sed, dignissimos facilis voluptates veniam ullam pariatur, nemo ducimus eum, dolor eos.</p>
                        </div>
                    </div>
            </div>
            <div class="button-asset d-flex mt-5 align-items-center justify-content-end">
                <img src="{{ asset('images/home/exibition/OBS EXHI_BUTTON_Visit Us.png') }}" width="20%" alt="">
            </div>
        </div>

        <div class="section-3 container d-flex align-items-start pt-5 justify-content-center">
            <div class="row justify-content-center align-items-center position-relative">

                    <div class="title-section-3 col-8 d-flex justify-content-center">
                        <img src="{{ asset('images/home/meeting/text-week.png') }}" class="w-100"alt="">
                    </div>
                    <!-- Slider main container -->
                    <div class="col-12 ">
                        <div class="swiper swiper-weekly swiper-1 col-6">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img class="icon" src="{{ asset('images/home/meeting/01_ICON.png') }}" alt="">
                                    <img class="preview" src="{{ asset('images/home/meeting/01_PREVIEW.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="icon" src="{{ asset('images/home/meeting/02_ICON.png') }}" alt="">
                                    <img class="preview" src="{{ asset('images/home/meeting/02_PREVIEW.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="icon" src="{{ asset('images/home/meeting/03_ICON.png') }}" alt="">
                                    <img class="preview" src="{{ asset('images/home/meeting/03_PREVIEW.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="icon" src="{{ asset('images/home/meeting/04_ICON.png') }}" alt="">
                                    <img class="preview" src="{{ asset('images/home/meeting/04_PREVIEW.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="icon" src="{{ asset('images/home/meeting/05_ICON.png') }}" alt="">
                                    <img class="preview" src="{{ asset('images/home/meeting/05_PREVIEW.png') }}" alt="">
                                </div>
                        
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button-prev-weekly">
                                <img src="{{ asset('images/home/triangle_left.png') }}" alt="">

                            </div>
                            <div class="swiper-button-next swiper-button-next-weekly">
                                <img src="{{ asset('images/home/triangle_right.png') }}" alt="">

                            </div>

                        </div>
                    </div>
                    <div class="title-section-3 col-6 d-flex justify-content-center pt-2">
                        <a href="" class="w-50"><img src="{{ asset('images/home/meeting/button.png') }}" class="w-100"alt=""></a>
                    </div>
            </div>
        </div>
        <div class="section-4 w-100">
        </div>
    </div>
    <div class="section-5 position-relative d-flex justify-content-center align-items-center">
        <!-- asset absolute  -->
        <img src="{{ asset('images/home/about/left-circle.png') }}" alt="" class="position-absolute left-circle">
        <img src="{{ asset('images/home/about/right-circle.png') }}" alt="" class="position-absolute right-circle">
        <img src="{{ asset('images/home/about/up.png') }}" alt="" class="position-absolute up-border">
        <img src="{{ asset('images/home/about/bottom.png') }}" alt="" class="position-absolute bot-border">
        <img src="{{ asset('images/home/about/left.png') }}" alt="" class="position-absolute left-border">
        <img src="{{ asset('images/home/about/right.png') }}" alt="" class="position-absolute right-border">

        <div class="section-5-content container d-flex ">
            <div class="row justify-content-center align-items-center">  
                <div class="col-lg-12 text-center">
                    <h2>
                        MORE ABOUT
                    </h2>
                </div>   
                <div class="col-lg-12 text-center"> 
                    <img class="w-50 col-lg-4 col-12" src="{{ asset('images/home/obscura-teks.png') }}" alt="">
                </div>
                <div class="col-lg-12 text-center"> 
                    <p class="col-lg-4 col-12" ></p>
                </div>
                <div class="col-lg-12 text-center"> 
                    <img src="{{ asset('images/home/explore-button.png') }}" alt="" class="w-25 col-lg-4 col-12">
                </div>
            </div>
        </div>
    </div>
    @include('obscura.template.footer')
</div>


@endsection

@section('custom-js')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script>
        const swiper = new Swiper('.swiper-weekly', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 3,
            speed:400,
            centeredSlides:true,

            loop: true,
            // autoHeight:true,
            navigation: {
                nextEl: '.swiper-button-next-weekly',
                prevEl: '.swiper-button-prev-weekly',
            }
            
        });
    </script>
@endsection