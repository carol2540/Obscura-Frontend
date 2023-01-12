@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/admin.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="komite container d-flex flex-column justify-content-center align-items-center">
            <div id="modal-add" class="modal-dialog row" style="width:100%;margin-top:50px;">	
                <div class="modal-content p-4 col-md-12">
                    <div class="modal-header d-flex justify-content-center">
                        <span class="font-goudy font-yellow fw-bold">Add</span><span class="ms-2 font-goudy fw-bold font-yellow">Competitor</span>
                    </div>
                    <div class="modal-body">
                    @if(Auth()->user()->role == 'admin')
                    <form method="POST" action="{{ url('obscura-exhibition/add-competitor/add') }}" enctype="multipart/form-data">
                    @endif

                        @csrf
                        
                        <div class="form-group row flex-column">
                            <label for="name" class="col-md-12 col-form-label font-gradient fw-bold">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" >
                            </div>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row flex-column ">
                            <label for="title" class="col-md-12 col-form-label font-gradient fw-bold">{{ __('Title') }}</label>

                            <div class="col-md-12">
                                <input id="title" type="text" class="form-control" name="title" >
                            </div>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row flex-column p-2">
                            <label for="image" class="col-md-5 col-form-label font-gradient fw-bold">{{ __('Image') }}</label>

                            <div class="col-md-12 row flex-column img-invalid">
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" />

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-column p-2">
                            <label for="desc" class="col-md-5 col-form-label font-gradient fw-bold">{{ __('Description') }}</label>
                            <textarea name="description" id="description" rows="5" placeholder="Description"></textarea>
                            
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group modal-btn row justify-content-end align-items-end mb-0 mt-2">
                            <div class="col-3">
                                <button type="submit" class="btn btn-add px-4">
                                    {{ __('Add') }}
                                </button>
                            </div>
                            <div class="col-3">
                                <a href="{{ url('/obscura-exhibition/admin-panel') }}"><button type="button" class="btn btn-danger" class="close">Cancel</button></a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- <form class="w-50" method="POST" action="">
                <div class="form-group">
                    <label for="name" class="font-gradient font-goudy fs-3 fw-bold">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="title" class="font-gradient font-goudy fs-3 fw-bold">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="description" class="font-gradient font-goudy fs-3 fw-bold">Description</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </form> -->
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
        $(document).ready(function(){
        $('#btn-booked').click(function(){
            $('#modal-add').modal({
            keyboard: false,
            show: true,
            backdrop: 'static'
        	});
        })
    })
    </script>
@endsection