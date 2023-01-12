@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/admin.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center"> 
        <p class="font-gradient font-goudy fw-bold">Admin Panel</p>
    </div>
    <div class="section-2 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="komite container d-flex flex-column justify-content-center align-items-center">
            <p class="font-gradient font-goudy fw-bold fs-1">COMPETITION</p>
            <div class="d-flex justify-content-center align-items-center">
                <a href="{{ route('page-add-competitor') }}"><button class="btn btn-info">Add Competitor</button></a>
                <button id="default" class="ms-3 btn btn-info">Default</button>
                <button id="ranking" class="ms-3 btn btn-info">Ranking</button>
            </div>
            <div id="panel">
                <table id="example" class="table table-striped mt-4" style="width:100%">
                    <thead>
                        <tr class="text-center font-yellow">
                            <th width="5%">No</th>
                            <th width="15%">Name</th>
                            <th width="15%">Title</th>
                            <th width="15%">image</th>
                            <th width="25%">Description</th>
                            <th width="5%">Views</th>
                            <th width="5%">Vote</th>
                            <th width="15%">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                            @foreach($gallery as $data)
                            @php $i++ @endphp
                                <tr class="text-center">
                                    <td class="text-center font-yellow align-middle">{{ $i }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['name'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['title'] }}</td>
                                    <td class="text-center font-yellow align-middle"><img class="image-data" src="{{ asset('storage/Images/Competition') . '/' . $data['image'] }}" width="200"></td>
                                    <td class="text-center font-yellow align-middle">{{ $data['description'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['views'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['vote_count'] }}</td>
                                    <td class="text-center font-yellow align-middle">
                                        <div class="d-flex justify-content-around align-items-center operation">
                                            <a href="{{ url('/obscura-exhibition/edit-competitor') . '/' . $data['id']   }}"><button class="btn btn-info">Edit</button></a>
                                            <a href="{{ url('/obscura-exhibition/delete-competitor') . '/' . $data['id'] }}"><button class="btn btn-danger">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
                <div class="col d-flex justify-content-center">
                    {{ $gallery->links("pagination::bootstrap-4") }}   
                </div>
            </div>
            <div id="panel1">
                <table id="example" class="table table-striped mt-4" style="width:100%">
                    <thead>
                        <tr class="text-center font-yellow">
                            <th width="5%">No</th>
                            <th width="15%">Name</th>
                            <th width="15%">Title</th>
                            <th width="15%">image</th>
                            <th width="25%">Description</th>
                            <th width="5%">Views</th>
                            <th width="5%">Vote</th>
                            <th width="15%">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                            @foreach($ranking as $data)
                            @php $i++ @endphp
                                <tr class="text-center">
                                    <td class="text-center font-yellow align-middle">{{ $i }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['name'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['title'] }}</td>
                                    <td class="text-center font-yellow align-middle"><img class="image-data" src="{{ asset('storage/Images/Competition') . '/' . $data['image'] }}" width="200"></td>
                                    <td class="text-center font-yellow align-middle">{{ $data['description'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['views'] }}</td>
                                    <td class="text-center font-yellow align-middle">{{ $data['vote_count'] }}</td>
                                    <td class="text-center font-yellow align-middle">
                                        <div class="d-flex justify-content-around align-items-center operation">
                                            <a href="{{ url('/obscura-exhibition/edit-competitor') . '/' . $data['id']   }}"><button class="btn btn-info">Edit</button></a>
                                            <a href="{{ url('/obscura-exhibition/delete-competitor') . '/' . $data['id'] }}"><button class="btn btn-danger">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
                <div class="col d-flex justify-content-center">
                    {{ $ranking->links("pagination::bootstrap-4") }}   
                </div>
            </div>
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
    <script src="{{ asset('js/sweetalert/sweetalert.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#panel1').hide();
            $('#panel').show();
            $('#ranking').click(function(){
                $('#panel1').show();
                $('#panel').hide();
            });
            $('#default').click(function(){
                $('#panel').show();
                $('#panel1').hide();
            });
        });
        @if($status = Session::get('success'))
            $(document).ready(function() {
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "Data Berhasil Ditambahkan!", 
            });
        });
        @elseif($status = Session::get("edit"))
        $(document).ready(function() {
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "Data Berhasil Diedit!", 
            });
        });
        @elseif(session('status') == 'delete')
        $(document).ready(function() {
                Swal.fire({
                icon: 'success',
                title: 'Delete',
                text: "Data Berhasil Dihapus!", 
            });
        });
        @endif
    </script>
@endsection