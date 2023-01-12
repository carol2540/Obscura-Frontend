@extends('ObscuraExibition.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/ObscuraExibition/komite.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection

@section('content')

<div class="main">
    <div class="section section-1 d-flex justify-content-center align-items-center"> 
        <p class="font-gradient font-goudy fw-bold">Meet The Committee</p>
    </div>
    <div class="section-2 pb-5 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU KLUET</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Badan Pengurus Harian</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/KLUET/Kluet_CindyOctavia.png') }}" alt=""></div>
                    <p class="text-center font-yellow font-goudy mt-5">Cindy Octavia</p>
                    <p class="text-center font-yellow font-goudy mb-5">Ketua</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/KLUET/Kluet_Justin.png') }}" alt=""></div>
                    <p class="text-center font-yellow font-goudy mt-5">Justin</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Wakil Ketua</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/KLUET/Kluet_SuPing.png') }}" alt=""></div>
                    <p class="text-center font-yellow font-goudy mt-5">Su Ping</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Sekretaris</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/KLUET/Kluet_Stevanny.png') }}" alt="">
                </div>
                    <p class="text-center font-yellow font-goudy mt-5">Stevanny Mizellyta Graciany</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Bendahara</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>

        </div>
    </div>
    <div class="section-2 pb-5 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU AERO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Visual</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/AERO/Aero_Amelia.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Amelia Linti</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/AERO/Aero_Fedora.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Fedora Nathania Rusdiono</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/AERO/Aero_radi.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Ignatius Radi Haryanto</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/AERO/Aero_Timmy.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Timothy Maurice Changka</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU BAJO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Media Partner</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BAJO/Bajo_Monica.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Monica Berliana</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BAJO/Bajo_Nasya.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Nasya Georgina Rompas</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BAJO/Bajo_Raysa.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Raysa Kay Wiriadinata</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BAJO/Bajo_Sari.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Falensia Indah Sari</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-3 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU MOROTAI</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Registrasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/MOROTAI/Morotai_Abraham.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Abraham Anelka Amar</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/MOROTAI/Morotai_Gio.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Giovanni Cahyadi</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/MOROTAI/Morotai_Vincentius.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Vincentius Auki Prayudi</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-3 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU SIKKA</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Acara</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SIKKA/Sikka_Ferbie.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Ferbie Viona</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SIKKA/Sikka_Joan.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Joan Noverlianto Tanawi</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SIKKA/Sikka_Sherlina.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Sherlina Purnamasari</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-6 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU BANJAR</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Fresh money</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Bimo.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Bimo Seno</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Jiee.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Fuji Mentari Endiany</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Nanda.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Ananda Ayu Putri</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom  mt-5 container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Nico.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Nicolas Wijaya</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Regina.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Regina Florence</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/BANJAR/Banjar_Rosalyn.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Rosalyn Mettasari Tirta</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU LUWU</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Perlengkapan</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LUWU/Luwu_Eklim.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Tan Ek Lim</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LUWU/Luwu_Khesar.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Khesar Kurniawan</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LUWU/Luwu_Timothy.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Timothy Gracie</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LUWU/Luwu_Zarwal.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Zarwal Firmansyah Siregar</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-3 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU SAMIN</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Keamanan</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SAMIN/Samin_Adell.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Adelia</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SAMIN/Samin_Aura.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Aura Ramadita </p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/SAMIN/Samin_Firdaus.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Firdaus nuzula</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-6 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU ASARO</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Dokumentasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_Albert.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Albert Jonathan</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_Keenan.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Keenan Adrian Putra</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_Louis.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Justiano Louis</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom mt-5 container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_Salman.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Salman Aqiil Munandar</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_StevenAustin.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Steven Austin Gemilang</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ASARO/Asaro_Toni.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Stevan Antonius</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 pb-5 people-3 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU ALUNE</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Publikasi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ALUNE/Alune_LilianWongso.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Lilian Wongso</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ALUNE/Alune_RyanRichardo.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Ryan Richardo</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Koordinator</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/ALUNE/Alune_Shanreva.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Shanreva Oktavia Andi</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Anggota</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="akhir people-8 section-2 pb-5 section-bawah section d-flex flex-column align-items-center"> 
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_atas.png') }}" alt="frame_kiri" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kiri_bawah.png') }}" alt="frame_kiri_bawah" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_atas.png') }}" alt="frame_kanan" class="frame-size">
        <img src="{{ asset('images/ObscuraExibition/Frame/frame_kanan_bawah.png') }}" alt="frame_kanan_bawah" class="frame-size">
        <img class="pembatas" src="{{ asset('images/ObscuraExibition/Frame/pembatas_kecil.png') }}" alt="pembatas_atas" width="100">
        <div class="topic d-flex flex-column align-items-center justify-content-center mt-4">
            <p class="font-gradient font-goudy fw-bold">SUKU LINTANG</p>
            <div class="divisi d-flex justify-content-around align-items-center">
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kiri.png') }}" alt="line_kiri">
                <p class="font-yellow font-goudy">Divisi Supervisi</p>
                <img class="img-garis" src="{{ asset('images/ObscuraExibition/Frame/line_kanan.png') }}" alt="line_kanan">
            </div>
        </div>
        <div class="komite w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="kom container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Alden.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Alden Jonathan</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Alyssa.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Alyssa Salsabila</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Axel.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Axel Andrean Handoko</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Daniel.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Daniel Kurniawan</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
            </div>
            <div class="kom mt-5 container d-flex justify-content-around align-items-center">
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Florencia.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Florencia Irene</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_KristaCeline.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Krista Celine</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Valdo.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Trivaldo Agatha</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p Agatha>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
                </div>
                <div class="image-box">
                    <div class="image"><img src="{{ asset('images/ObscuraExibition/komite/LINTANG/Lintang_Vania.png') }}" alt=""></div>
                    <p style=" font-size: 18px"class="text-center mb-0 font-yellow font-goudy mt-5">Vania Amadea Josephine</p>
                    <p  class="text-center font-yellow font-goudy mb-5">Supervisi</p>
                    <img src="{{ asset('images/ObscuraExibition/Frame/profile_frame.png') }}" alt="profile_frame" width="200">
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
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            
            
        });
    </script>
@endsection