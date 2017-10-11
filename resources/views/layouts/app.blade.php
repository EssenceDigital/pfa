<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> PFA Admin Panel | @yield('page-title') </title>

        <!-- Stylesheets -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"> -->
        <link href="{{ url('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
        @yield('page-specific-styles')
        <!-- /global stylesheets -->

        <script type="text/javascript" src="{{ url('assets/js/plugins/loaders/pace.min.js') }}"></script>
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>

    <body>

        @include('partials._top-nav')

        <!-- Page container -->
        <div class="page-container">

            <!-- Page content wrap -->
            <div class="page-content">

                @include('partials._sidebar')

                <!-- Main content wrap -->
                <div class="content-wrapper">

                    @yield('breadcrumbs')

                    <!-- Content area -->
                    <div class="content">

                        @yield('content')

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content wrap -->

            </div>
            <!-- /page content wrap -->

        </div>
        <!-- /page container -->

            <!-- Core JS files -->
        <script type="text/javascript" src="{{ url('assets/js/core/libraries/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/core/libraries/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script type="text/javascript" src="{{ url('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/plugins/pickers/daterangepicker.js') }}"></script>

        <script type="text/javascript" src="{{ url('assets/js/core/app.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/js/pages/user_pages_profile.js') }}"></script>

        <script type="text/javascript" src="{{ url('assets/js/plugins/ui/ripple.min.js') }}"></script>
        <!-- /theme JS files -->
        
        @yield('page-specific-scripts')
        <script>
            // Logout 
            $('#app-logout').click(function(){
                $('#logout-form').submit();
            });
        </script>
    </body>
</html>
