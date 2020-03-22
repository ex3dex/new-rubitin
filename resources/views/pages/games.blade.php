@extends('layouts.app')

@section('content')
    <section class="subpage-heading">


        <div class="custom">
            <p><img src="images/Header_Game.jpg" alt="about"/></p></div>

    </section>
    <section class="second-fp-part" id="second">
        <div class="container">
            <div class="row">
                <div class="games-container col-lg-8 col-md-8 col-sm-8 col-xs-12" style="width: 100%;">
                    <div class="title-text">
                        <h2>HOTTEST GAMES</h2>
                        <p>Check out our newest and hottest games!</p>
                    </div>
                    @if (count($games) > 0)
                        @foreach($games as $gameId => $game)
                            <div class="fp-game col-lg-3 col-md-3 col-sm-3 col-xs-6" data-mobile="1525">
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
@endsection
