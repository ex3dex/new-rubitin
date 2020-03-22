@extends('layouts.app')

@section('content')
    <section class="subpage-heading">


        <div class="custom">
            <p><img src="images/Banner-1.jpg" alt="about"/></p></div>

    </section>
    <div class="container contact-form" style="margin-top:100px">
        <div style="display: block; text-align: center">
            <img style="margin: 0 auto; width: 400px; max-width: 100%; border-radius: 100%;" src="/images/contact.jpeg" alt="">
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-warning">
                Failed to submit form
            </div>
        @endif

        <form method="post" action="{{ route('submit-contact-form') }}">
            {{ csrf_field() }}
            <h3>Contact Us</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *"/>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" name="email" class="form-control" placeholder="Your Email *"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                        <input type="text" name="subject" class="form-control" placeholder="Subject *"/>
                        @if ($errors->has('subject'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subject') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                        <textarea name="message" class="form-control" placeholder="Your Message *"
                                  style="width: 100%; height: 150px;"></textarea>
                        @if ($errors->has('message'))
                            <span class="help-block">
				                <strong>{{ $errors->first('message') }}</strong>
				            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm"
                               value="Send Message"/>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
