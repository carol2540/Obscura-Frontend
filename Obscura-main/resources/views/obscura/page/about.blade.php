@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/about.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section-1 m-auto text-center d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('images/about/title.png') }}" class="title d-block" alt="">
        <p class="container d-block">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <img src="{{ asset('images/about/arrow.png') }}" class="arrow"alt="">
    </div>

    <div class="section-2 row">
        <div class="col-lg-5 col-12 visimisi w-auto h-100">
            <img  class="img-fluid w-100 h-100 d-lg-none d-block" src="{{ asset('images/about/visimis_land.png') }}" alt="">
            <img  class="img-fluid w-100 h-100 d-lg-block d-none" src="{{ asset('images/about/visimisi.png') }}" alt="">
        </div>
        <div class="col-lg-1 col-12 border-gradient d-flex flex-lg-column flex-row p-0">
            <div class="text-container d-flex justify-content-center align-items-center" id="visi">
                <div class="visi" id="visi-text">
                    VISION
                </div>
            </div>
            <div class="text-container d-flex justify-content-center align-items-center" id="misi">
                <div class="mission " id="misi-text">
                    MISSION
                </div>
            </div>
            
        </div>
        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center py-5">
            <div class="d-none flex-column container" id="content-misi">
                <img src="{{ asset('images/about/misi.png') }}" width="50%" alt="">
                <div class="content-list ">
                    <ul>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                    </ul>
                </div>
            </div>
            <div class="d-none flex-column container" id="content-visi">
                <img src="{{ asset('images/about/visi.png') }}" width="50%" alt="">
                <div class="content-list ">
                    <ul>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                        <li>Content</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3 d-flex align-items-center">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-12 d-flex flex-column align-items-lg-end align-items-center">
                    <img src="{{ asset('images/about/activities.png') }}" width="80%" alt="">
                    <img class="mb-2"src="{{ asset('images/about/line_active.png') }}" width="80%" alt="">
                    <p class="container d-block text-white text-lg-end text-center p-0">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/about/normal-1.png') }}" class="m-auto text-center d-lg-none d-block w-100" alt="...">
                                <img src="{{ asset('images/about/carousel-1.png') }}" class="m-auto text-center d-lg-block d-none w-75" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/about/normal-2.png') }}" class="m-auto text-center d-lg-none d-block w-100" alt="...">
                                <img src="{{ asset('images/about/carousel-2.png') }}" class="m-auto text-center d-lg-block d-none w-75" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/about/normal-3.png') }}" class="m-auto text-center d-lg-none d-block w-100" alt="...">
                                <img src="{{ asset('images/about/carousel-3.png') }}" class="m-auto text-center d-lg-block d-none w-75" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/about/normal-4.png') }}" class="m-auto text-center d-lg-none d-block w-100" alt="...">
                                <img src="{{ asset('images/about/carousel-4.png') }}" class="m-auto text-center d-lg-block d-none w-75" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>

@include('obscura.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $( "#visi" ).addClass("active");
            $( "#visi-text" ).addClass("active");
            $( "#content-visi" ).addClass("d-flex");
            $( "#content-visi" ).removeClass("d-none");
        });
        $("#visi").click(function() {
            $( "#visi" ).addClass("active");
            $( "#visi-text" ).addClass("active");
            $( "#misi" ).removeClass("active");
            $( "#misi-text" ).removeClass("active");
            $( "#content-visi" ).addClass("d-flex");
            $( "#content-visi" ).removeClass("d-none");
            $( "#content-misi" ).addClass("d-none");
            $( "#content-misi" ).removeClass("d-flex");
        })
        $("#misi").click(function() {
            $( "#misi" ).addClass("active");
            $( "#misi-text" ).addClass("active");
            $( "#visi" ).removeClass("active");
            $( "#visi-text" ).removeClass("active");
            $( "#content-misi" ).addClass("d-flex");
            $( "#content-misi" ).removeClass("d-none");
            $( "#content-visi" ).addClass("d-none");
            $( "#content-visi" ).removeClass("d-flex");
        })
    </script>
@endsection