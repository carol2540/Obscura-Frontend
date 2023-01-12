@extends('obscura.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/obscura/meeting.css') }}">
@endsection

@section('content')

<div class="main">
    <div class="container">
        <div class="weekly-content d-flex flex-column align-items-center">
            <img class="mb-2"src="{{ asset('images/meeting/WM_TEKS_Weekly Meeting.png') }}" width="75%" >
            <div class="border-gradient mb-4"></div>
            <div class="row w-75 justify-content-start meeting-details">
                <div class="col-4">
                    <img src="{{ asset('images/meeting/WM_ICON_Composition.png') }}" width="70%" alt="">
                </div>
                <div class="col-6">
                    <h1>COMPASITION</h1>
                    <div class="col-lg-2 d-flex align-items-start w-100 mt-3">
                        <img width="10px" src="{{ asset('images/meeting/triangle.png') }}" alt="">
                        <div class="d-flex ps-3 flex-column">
                            <h3>5 January 2022</h3>
                            <p>by Axel Andrean and Daniel Kurniawan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-75 pt-5 desc-text col-lg-12 d-flex flex-column">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptatum quis impedit temporibus esse omnis. A voluptas impedit voluptatibus harum voluptatum expedita, incidunt porro odit rerum labore natus minus exercitationem.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, quibusdam optio magnam tenetur error qui non deserunt cumque laudantium magni debitis impedit cupiditate beatae temporibus repellendus aliquid perspiciatis accusamus. Facere?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus totam temporibus omnis, recusandae ipsum ex quibusdam illo. Optio atque dolorum sed commodi, est quis eius eos, nulla magnam maiores enim?
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quaerat ratione asperiores officia error eum ea natus vitae voluptate cumque perferendis odio nisi officiis, optio quasi. Laudantium, amet maiores! Quia!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam eius alias esse iusto veritatis adipisci perferendis dignissimos optio ipsa ducimus tempora nobis ipsum, eaque aliquam consequatur repellat? Ea, voluptatum!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nostrum delectus reprehenderit autem tempora animi repellendus! Culpa nulla quo aspernatur distinctio eaque odio ipsum vero. At pariatur hic voluptate nobis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti itaque, laudantium placeat voluptate officiis vel ducimus illo minima aut quam atque eos dolores repellendus impedit repellat minus veritatis quia reprehenderit.
                </p>
        </div>
        </div>
    </div>

    <!-- <div class="section-1 container d-flex flex-column justify-content-center align-items-center">
        
        <div class="d-flex align-items-start w-100 pt-5 mt-5">
            <div class="col-lg-4">
                <img src="{{ asset('images/meeting/WM_ICON_Composition.png') }}" width="70%" alt="">
            </div>
            <div class="top-section col-lg-8 d-flex flex-column align-items-start">
                <h1>COMPASITION</h1>
                <div class="col-lg-2 d-flex align-items-center w-100 mt-3">
                    <img src="{{ asset('images/home/BUTTON SEGITIGA.png') }}" alt="">
                    <div class="d-flex ps-3 flex-column">
                        <h3>5 January 2022</h3>
                        <p>by Axel Andrean and Daniel Kurniawan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2 pt-5 col-lg-12 d-flex flex-column">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel voluptatum quis impedit temporibus esse omnis. A voluptas impedit voluptatibus harum voluptatum expedita, incidunt porro odit rerum labore natus minus exercitationem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, quibusdam optio magnam tenetur error qui non deserunt cumque laudantium magni debitis impedit cupiditate beatae temporibus repellendus aliquid perspiciatis accusamus. Facere?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus totam temporibus omnis, recusandae ipsum ex quibusdam illo. Optio atque dolorum sed commodi, est quis eius eos, nulla magnam maiores enim?
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quaerat ratione asperiores officia error eum ea natus vitae voluptate cumque perferendis odio nisi officiis, optio quasi. Laudantium, amet maiores! Quia!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam eius alias esse iusto veritatis adipisci perferendis dignissimos optio ipsa ducimus tempora nobis ipsum, eaque aliquam consequatur repellat? Ea, voluptatum!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati nostrum delectus reprehenderit autem tempora animi repellendus! Culpa nulla quo aspernatur distinctio eaque odio ipsum vero. At pariatur hic voluptate nobis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti itaque, laudantium placeat voluptate officiis vel ducimus illo minima aut quam atque eos dolores repellendus impedit repellat minus veritatis quia reprehenderit.
            </p>
        </div>
    </div> -->
</div>

@include('obscura.template.footer')
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/about-us.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection