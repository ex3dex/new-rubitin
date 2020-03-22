@extends('layouts.app')

@section('content')
    {{--// Showed for EVERYONE--}}
    <div class="frontpage">

        <div class="wrapper">
            <a href="{{ url('/') }}">
                <div class="logo"></div>
            </a>
            <section class="first-slide" data-stellar-background-ratio="0.5"
                     data-stellar-vertical-offset="">


                <div class="custom"
                     style="background-image: url( 'images/sampledata/blogging/halloween/03_LandingPageBackground_NG_TreasureOfTheNile_v2_MOBILE2.jpg' )">
                    <h1 style="text-align: center;"><strong>New Rubitin <br/> Online Casino</strong></h1>
                    <div style="text-align: center;"><strong></strong><strong>DEPOSIT 25 Chips</strong></div>
                    <div style="text-align: center;"><strong>PLAY WITH </strong><strong>125 Chips</strong></div>
                    <div style="text-align: center;"><strong>SIGN UP TODAY!</strong></div>
                    <p style="text-align: center;"><strong><a class="cta-button" href="{{url('/games')}}">
                                <button>PLAY NOW</button>
                            </a></strong></p>
                    <p style="text-align: center;">Receive 100 free on top of your 25 Chips deposit as a welcome
                        bonus at New Rubitin Online Casino!</p>
                    <p style="text-align: center;">Redeem FIRST100FREE!</p>
                    <p style="text-align: center;">This offer is for new customers, you can only use it on
                        your first deposit.</p>
                    <p style="text-align: center;"><strong></strong></p></div>

                <div class="image_down">
                    <a href="#second">
                        <img src="images/arrow_down.png" alt="arrow down"/>
                    </a>
                </div>
                <div style="clear:both;"></div>
            </section>
        </div>
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
                                <img src="images/logo.png" alt="Logo"/>
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

        <section class="second-fp-part" id="second">
            <div class="container">
                <div class="row">
                    <div class="scrollable">
                        <div class="items">

                            <div class="games-container col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="title-text">
                                    <h2>HOTTEST GAMES</h2>
                                    <p>Check out our newest and hottest games!</p>
                                </div>
                                @if (count($games) > 0)
                                    @foreach($games as $gameId => $game)
                                        <div class="fp-game col-lg-3 col-md-3 col-sm-3 col-xs-6" data-mobile="1525">
                                            {{--                                            <div class='corner-text-wrapper'>--}}
                                            {{--                                                <div class='corner-text'>--}}
                                            {{--                                                    <span>NEW</span>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <div class="frame">
                                                <a href="{{ route('view-game', ['gameId' => $gameId]) }}">
                                                    <img src="{{ $game['img'] }}" alt="">
                                                    <div class="overlay"><span>Play Now</span></div>
                                                </a>
                                                <span>{{ $game['title'] }}</span>
                                                <div class="mobile"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>There are no games</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="btn_wrapper">
                        <a class="instant-play" href="{{route('games')}}">MORE GAMES</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="fifth-fp-part">
            <div class="container">
                <div class="row">

                    <div class="fpsection ">
                        <div class="section_img col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                            <img src="images/fp-image1.png" alt="fp-image1"/></div>


                        <div class="section_container col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                            <h2>Why play at New Rubitin?</h2>
                            <div class="section_text">
                                <div class="main_text"><p>
                                    <h3>Best Online Casino </h3>
                                    <p>New Rubitin is an <a
                                            href="https://en.wikipedia.org/wiki/Online_casino"
                                            target="_blank" rel="noopener noreferrer">online casino</a>. You
                                        can play on the Mobile Casino or play on Your Desktop, you decide!
                                        New Rubitin offers the highest levels of excitement by bringing
                                        you our beautiful <a href="{{url('/games')}}">online casino games</a>! We
                                        also love to shower our players with high rewards and free bonuses!
                                        You will find a bonus at New Rubitin every single day! We do not
                                        go a day without offering a bonus!</p>
                                    <p><img src="images/tick.png" alt="visa" width="23" height="20"/> <a
                                            href="{{url('/games')}}">BEAUTIFUL GAMES</a></p>
                                    <p></p>
                                    <div>
                                        <p>The <a
                                                href="https://en.wikipedia.org/wiki/Online_casino#Web-based_online_casinos"
                                                target="_blank" rel="noopener noreferrer">web-based</a>
                                            New Rubitin Online Casino is mobile-friendly, meaning you just
                                            need an internet connection to play casino games available on
                                            iOS and Android. Both versions are smooth and well designed.</p>
                                        <p>You should have no problems playing online casino games on your
                                            mobile device no matter the size of your screen. </p>
                                        <div></div>
                                    </div>
                                    <div><a class="btn"
                                            href="{{route('games')}}">PLAY NOW</a></div>
                                    <div></div>
                                    <div></div>
                                    <div> </div>
                                    <p> </p></p></div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                    <div class="fpsection ">
                        <div class="section_img col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
                            <img src="images/payment/banking-safe-832x704.jpg" alt="banking-safe-832x704"/>
                        </div>


                        <div class="section_container col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
                            <h2>Banking Made Simple</h2>
                            <div class="section_text">
                                <div class="main_text"><p>
                                    <h3>The easiest ways to deposit and withdraw money</h3>
                                    <p>Do you like quick pay-ins and payouts? Search no further! Our Online
                                        Banking is as good as our Online Slot Games! Enjoy a high variety of banking methods with us
                                        and choose the best option for you! Our payouts are checked by our
                                        finance team, to make withdrawals as
                                        <g class="gr_ gr_8 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling"
                                           id="8" data-gr-id="8">quick
                                        </g>
                                        as possible! Payments are secured by the best financial technologies
                                        to keep your funds safe. We are as well available for your questions
                                        24 hours 365 days!
                                    </p>
                                    <h3>Some of the most popular payment methods:</h3>
                                    <p><a href="https://en.wikipedia.org/wiki/Visa_Inc." target="_blank"
                                          rel="noopener noreferrer"><img src="images/payment/2_visa.png"
                                                                         alt="visa" width="65" height="43"/></a> <a
                                            href="https://en.wikipedia.org/wiki/Mastercard" target="_blank"
                                            rel="noopener noreferrer"><img
                                                src="images/payment/2_mastercard.png" alt="mastercard"
                                                width="58" height="37"/></a><a
                                            href="https://en.wikipedia.org/wiki/Skrill" target="_blank"
                                            rel="noopener noreferrer"><img src="images/payment/2_skrill.png"
                                                                           alt="skrill" width="67"
                                                                           height="38"/></a><a
                                            href="https://en.wikipedia.org/wiki/Neteller" target="_blank"
                                            rel="noopener noreferrer"><img
                                                src="images/payment/2_neteller.png" alt="neteller"
                                                width="77" height="35"/></a><a
                                            href="https://www.ecopayz.com/en/about-us" target="_blank"
                                            rel="noopener noreferrer"><img
                                                src="images/payment/2_ecopayz.png" alt="ecopayz" width="85"
                                                height="38"/></a></p>
                                    <h3>Why New Rubitin is a trustable online casino?</h3>
                                    <p>New Rubitin goes to great lengths to guarantee that your personal
                                        and financial information remains 100% secure and confidential at
                                        all times. We employ industry-standard security protocols (including
                                        128 bit, SSL data encryption technology) to ensure that all
                                        transactions including deposits and withdrawals are executed in a
                                        totally secure manner. All financial transactions carried out at
                                        New Rubitin Casino are processed by the most advanced billing
                                        platforms available today. These technologies protect you from
                                        having your information intercepted by anyone while it is being
                                        transmitted between you and New Rubitin casino. And rest assured
                                        that under no circumstances will we pass on your details to any
                                        third parties.</p>
                                    <div></div>
                                    </p></div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                </div>
            </div>
        </section>
        <section class="sixth-fp-part" id="subscribeform">
            <div class="container">
                <div class="row">
                    <div class="support-text col-lg-6 col-md-6 col-sm-12 col-xs-12">


                        <div class="custom">
                            <h2>YOUR 24/7 SUPPORT</h2>
                            <table>
                                <tbody>
                                <tr>
                                    <td><img src="images/support1.png" alt="chat"/></td>
                                    <td>
                                        <div class="h3">CHAT WITH US</div>
                                        <p>In case you need some support never hesitate to contact us!</p>
                                        <a onclick="lh_inst.showStartWindow();" style="cursor: pointer;">LIVE CHAT</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/support2.png" alt="write"/></td>
                                    <td>
                                        <div class="h3">WRITE US</div>
                                        <p>Feel free to drop us an email any time!</p>
                                        <a href="mailto:info@newrubitin.com">info@newrubitin.com</a></td>
                                </tr>
                                <tr>
                                    <td><img src="images/support3.png" alt="call"/></td>
                                    <td>
                                        <div class="h3">CALL US</div>
                                        <p>We are happy to get a call from you!</p>
                                        <a href="tel: +1-888-482-0000">TEL: +1-888-482-0000</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <p></p></div>

                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-logos">

                    </div>
                    <div class="footerMenu row center" style="width: 100%;">
                        <div class="part middleMenu col-xs-12 col-sm-6">
                            <ul class="nav menu" style="display: block;">
                                <li class="item-459 " data-filter="the_casino"><span
                                        class="nav-header ">The Casino</span>
                                </li>
                                <li class="item-460 " data-filter="blog"><a href="{{url('/')}}">Home</a></li>
                                <li class="item-461 " data-filter="lotty’s_adventure"><a
                                        href="{{ route('games') }}">{{_('Games')}}</a></li>
                                <li class="item-462 " data-filter="banking"><a
                                        href="{{ route('about-us') }}">About Us</a></li>
                                <li class="item-463 " data-filter="download"><a href="{{ route('how-to-play') }}">How To
                                        Play</a>
                                </li>
                                <li class="item-464 " data-filter="instant_play"><a
                                        href="{{ route('faq') }}">FAQ</a></li>
                                <li class="item-464 " data-filter="instant_play"><a
                                        href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li class="item-464 " data-filter="instant_play"><a
                                        href="{{ route('cookie-policy') }}">Cookie policy</a></li>
                                <li class="item-464 " data-filter="instant_play"><a
                                        href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="part middleMenu col-xs-12 col-sm-6">
                            <p>
                                <img style="max-width: 100px;display: block;margin: 0 auto;" src="images/189.png" alt="">
                                The games do not offer "real money games" nor the opportunity to win real money or prizes. The games are intended for an adult audience. The practice or success of social gaming does not imply future success in "real money gaming".

                            </p>
                        </div>
                    </div>

                    <div style="width:100%" class="custom">
                        <p style="text-align: center;"></p>
                        <p style="text-align: center;">Copyright <span class="st">© </span>2020 New Rubitin</p>
                    </div>

                </div>
            </div>
        </footer>




    </div>
    {{--    @guest--}}
    {{--        --}}{{--// Showed only for GUESTS--}}
    {{--        <p class="text-center">User is logged out</p>--}}
    {{--    @else--}}
    {{--        --}}{{--// Showed only for LOGGED IN USERS--}}
    {{--        <p class="text-center">User is logged in</p>--}}
    {{--    @endguest--}}

@endsection
