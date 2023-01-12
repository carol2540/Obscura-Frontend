<nav class="mb-5 p-4 navbar navbar-expand-md navbar-fixed-top">
<div class="row w-100">
    <div class="d-flex px-lg-4 px-0 col-lg-5 col-11 align-items-center">
    <a href="{{ route('homeExhibition') }}"><div class="row">
        <div class="logo col-3">
            <img src="{{ asset('images/ObscuraExibition/Logo/Logo.png') }}" alt="logo" width="100">
        </div>
        <div class="d-flex col-9 flex-column ps-2 justify-content-center">
            <p class="text-topic font-yellow font-goudy fs-3 m-0">OBSCURA EXHIBITION</p>
            <p class="text-topic font-yellow font-goudy fs-6 m-0"><i>Gallery</i></p>
        </div>  
    </div></a>
    </div>    
    <div class=" m-0 flex-column flex-lg-row justify-content-lg-end justify-content-md-center col-lg-6 d-lg-flex d-none align-items-center btn-regis">
    @guest
        @if (Route::has('login'))
        <a href="{{ route('login') }}" class="fs-6">Log in</a>
        @endif
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="fs-6 ">Register</a>
        @endif
    @else
        <p class="font-goudy font-yellow pe-5">Vote coin : <span id="coin" class="ps-1">{{ Auth::user()->vote }}</span></p>
        <p class="font-goudy font-yellow pe-2">{{ Auth::user()->name }}</p>
        @if(Auth::user()->role == 'admin')
        <a href="{{ route('admin') }}">Admin Panel</a>
        @endif
        @if(Auth::user()->email_verified_at == NULL)
        <a href="{{ url('email/verify') }}">Not Verified<img class="ms-1" src="{{ asset('images/ObscuraExibition/warning.png') }}" width="20" height="20" alt="warning"></a>
        @endif
        <a class="mt-lg-0 mt-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @endguest
</div>
</nav>

<div id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="nav-main d-flex flex-column">
        <div class="nav-menu-container  container">
            <div class="nav-menu py-2 font-yellow"><a href="{{ route('homeall') }}">Obscura</a></div>
            <div class="nav-menu py-2 font-yellow"><a href="{{ route('homeExhibition') }}">Home</a></div>
            <div class="nav-menu py-2 font-yellow"><a href="{{ route('galleryExhibition') }}">Gallery</a></div>
            <div class="nav-menu py-2 font-yellow"><a href="{{ route('aboutExhibition') }}">About Us</a></div>
            <div class="nav-menu py-2 font-yellow"><a href="{{ route('komiteExhibition') }}">Committee</a></div>
            <div class="ps-5 pt-3">
            @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class=""><div class="nav-menu d-lg-none d-block sign-button mt-3 text-center"> Log in </div></a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class=""><div class="nav-menu d-lg-none d-block sign-button mt-3 text-center">Register </div></a>
                @endif
            @else
                <div class="d-flex">
                    <div class="d-flex flex-column">
                        <p class="font-goudy font-yellow">{{ Auth::user()->name }}</p>
                        <p class="font-goudy font-yellow">Vote coin : {{ Auth::user()->vote }}</p>
                    </div>
                    @if(Auth::user()->role == 'admin')
                    <a href="{{ route('admin') }}">Admin Panel</a>
                    @endif
                    @if(Auth::user()->email_verified_at == NULL)
                    <a href="{{ url('email/verify') }}"><img class="ms-1" src="{{ asset('images/ObscuraExibition/warning.png') }}" width="20" height="20" alt="warning"></a>
                    @endif
                </div>
                <a class="mt-lg-0 mt-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
            </div>
        </div>
</div>

<nav class="nav-overlay">
    
</nav>

