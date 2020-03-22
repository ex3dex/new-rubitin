<nav class="navbar navbar-inverse" id="navbar-main">
    <div class="container">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                data-target="#mainmenu" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="mainmenu" class="navbar-collapse collapse navbar-left" aria-expanded="false"
             style="height: 1px;">
            <ul class="nav menu">
                <li class="item-108 " data-filter="logo">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{url('/')}}/images/logo.png" alt="Logo"/>
                    </a>
                </li>
                <li class="item-101 default current active " data-filter="home">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="item-103 default" data-filter="games">
                    <a href="{{ route('games') }}">Games</a>
                </li>
                <li class="item-104 default" data-filter="about_us">
                    <a href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="item-106 default" data-filter="how_to_play">
                    <a href="{{ route('how-to-play') }}">How To Play</a>
                </li>
                <li class="item-119 default" data-filter="how_to_play">
                    <a href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="item-120 default" data-filter="how_to_play">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <div class="header-buttons">
                    @guest
                        <a class="instant-play cta-button" href="{{ route('contact') }}">Contact Us</a>
                        <a href="{{ route('login') }}" class="download login">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="download register" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a class="download logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>

            </ul>

        </div>
        <div style="clear: both;"></div>
    </div>
</nav>
