@extends('layouts.site')

@section('page-title', 'Contact Us')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>Contact Us</span></h1>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="box blue-bg">
                            <h2><strong>Join</strong> the team and achieve your goals</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US BANNER ENDS -->

@endsection

@section('content')

    <!-- CONTACTS CONTENTS STARTS
        ========================================================================= -->
    <div class="contacts">
        <div class="container">
            <div class="row">
                <!-- Left Column Starts -->
                <div class="col-lg-8 col-md-8 form">
                    <h1>Give us a shout</h1>
                    <div class="description">We love to hear from perspective memebers. Send us a message or give us a call for all enquiries.
                    </div>
                    <!-- Form Starts -->
                    {!! Form::open(['url' => 'send-contact', 'method' => 'post', 'id' => 'ContactForm']) !!}
                        @include('partials._messages')
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Full Name *']) }}   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email *']) }}    
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Your Message *', 'rows' => 5, 'style' => "height:175px;"]) }}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group"> 
                                    {{ Form::text('captcha', null, ['class' => 'form-control', 'placeholder' => session('antibotquestion')]) }}   
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div id='message_post'></div>
                                <input class="btn btn-default" type='submit' value='SUBMIT' name='submitf' id="submitf">
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- Form Ends -->                  
                </div>
                <!-- Left Column Ends -->
                <!-- Rights Column Starts -->
                <div class="col-lg-4 col-md-4">
                    <div class="postal-address">
                        <h1>The Gym</h1>
                        <div class="description">Come down and see us anytime.</div>
                        <ul>
                            <li class="clearfix">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="text"><strong>Progressive Fighting Academy</strong><br>1007 3 Ave N - Upstairs in the Lethbridge Fitness Club</div>
                            </li>
                            <li class="clearfix">
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <div class="text"><strong>+ 403 327 3744</strong></div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Rights Column Ends -->
                <!-- Rights Column Starts -->
                <div class="col-lg-4 col-md-4 text-center">
                    <img class="image-responsive" src="{{ asset('site-assets/images/contact-glove.png') }}" alt="">
                </div>
                <!-- Rights Column Ends -->
            </div>
        </div>
    </div>
    <!-- /. CONTACTS CONTENTS ENDS
        ========================================================================= -->
    <!-- GOOGLE MAP STARTS
        ========================================================================= -->     
    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row no-gutter-12">
            <div class="col-lg-12 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2580.4001332226585!2d-112.83493178394754!3d49.70326827937922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24c14e65664c7982!2sProgressive+Fighting+Academy+The!5e0!3m2!1sen!2sca!4v1483128895246" height="400" allowfullscreen></iframe>
            </div>
        </div>
    </div>

@endsection