<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Progressive Fighting Academy | @yield('page-title')</title>
        <!-- All Stylesheets -->
        <link href="{{ url('site-assets/css/all-stylesheets.css') }}" rel="stylesheet">

        @yield('page-specific-styles')

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        @yield('upper-content')

        <!-- NAVIGATION -->
        <nav id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('site-assets/images/logos/logo-1.png') }}" width="195" height="70" alt="" ></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="{{ ((Request::is('/')) ? 'active' : '' ) }}"><a href="/" class="external">Home</a></li>
                        <li class="{{ ((Request::is('about-us')) ? 'active' : '' ) }}"><a href="/about-us" class="external">About</a></li>
                        <li class="{{ ((Request::is('classes')) ? 'active' : '' ) }}"><a href="/classes" class="external">Classes</a></li>
                        <li class="{{ ((Request::is('class-schedule')) ? 'active' : '' ) }}"><a href="/class-schedule" class="external">Schedule</a></li>
                        <li class="{{ ((Request::is('the-team')) ? 'active' : '' ) }}"><a href="/the-team" class="external">Team</a></li>
                        <li class="{{ ((Request::is('videos')) ? 'active' : '' ) }}"><a href="/videos" class="external">Video</a></li>
                        <li class="{{ ((Request::is('the-gallery')) ? 'active' : '' ) }}"><a href="/the-gallery" class="external">Gallery</a></li>
                        <li class="{{ ((Request::is('news-and-events')) ? 'active' : '' ) }}"><a href="/news-and-events" class="external">News &amp; Events</a></li>
                        <li class="{{ ((Request::is('contact-us')) ? 'active' : '' ) }}"><a href="/contact-us" class="external">Contact</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!-- / NAVIGATION -->

        @yield('content')

        <!-- STRIP STARTS -->
        <div class="totop-strip blue-bg mt-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"><img src="{{ asset('site-assets/images/logos/footer-logo.png') }}" alt="" ></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="scrollup"><a href="#"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / STRIP -->

        <!-- FOOTER -->
        <footer class="dark-grey-bg">
            <div class="container">
                <div class="row">

                    <!-- Links Starts -->
                    <div class="col-lg-5 links">
                        <div class="block">
                            <h1>Site Map</h1>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <ul class="links">
                                        <li><a href="/" class="external">Home</a></li>
                                        <li><a href="/about-us" class="external">About</a></li>
                                        <li><a href="/classes" class="external">Classes</a></li>
                                        <li><a href="/class-schedule" class="external">Schedule</a></li>
                                        <li><a href="/the-team" class="external">Team</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <ul class="links">
                                        <li><a href="/videos" class="external">Video</a></li>
                                        <li><a href="/the-gallery" class="external">Gallery</a></li>
                                        <li><a href="/news-and-events" class="external">News &amp; Events</a></li>
                                        <li><a href="/contact-us" class="external">Contact</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Links Ends -->
                    <!-- Contact Starts -->
                    <div class="col-lg-3 contact">
                        <div class="block">
                            <h1>Contact</h1>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <div class="text">Telephone:  403-327-3744</div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="text">Address: AB Lethbridge 1007 3 Ave N<br>Upstairs in the Lethbridge Fitness Club</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Ends -->
                </div>
            </div>
        </footer>
        <!-- / FOOTER -->

        <!-- COPYRIGHT -->
        <div class="copyright medium-grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">Copyright © 2016 | <a href="/login" style="color: #757575;">Admin Login</a></div>
                    <div class="col-lg-6">
                        <ul class="social-icons">
                            <li>Social Links:</li>
                            <li><a href="https://www.youtube.com/channel/UCAEY_OywixHMTwAEk2A5Y_Q" target='_blank'><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.facebook.com/ProgressiveFightingAcademy/" target='_blank'><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/pfadaily" target='_blank'><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/progressive_fighting_academy/" target="_blank"><i class="fa fa-instagram" target='_blank'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- / COPYRIGHT -->

        <script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>

        <!-- Magnific Popup core JS file -->
        <script type="text/javascript" src="{{ url('site-assets/js/magnific-popup/jquery.magnific-popup.js') }}"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ url('site-assets/js/owl-carousel/owl.carousel.js') }}"></script>
        <!-- FitVids -->
        <script type="text/javascript" src="{{ url('site-assets/js/fitvids/jquery.fitvids.js') }}"></script>
        <!-- ScrollTo -->
        <script type="text/javascript" src="{{ url('site-assets/js/nav/jquery.scrollTo.js') }}"></script>
        <script type="text/javascript" src="{{ url('site-assets/js/nav/jquery.nav.js') }}"></script>
        <!-- Sticky -->
        <script type="text/javascript" src="{{ url('site-assets/js/sticky/jquery.sticky.js') }}"></script>

        <script type="text/javascript" src="{{ url('site-assets/js/waiver.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ url('site-assets/js/custom/custom.js') }}"></script>

        @yield('page-specific-scripts')
    </body>
</html>
