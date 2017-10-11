<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PFA | Login</title>

    <!-- Global stylesheets -->
    <link href="{{ url('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <!-- /core JS files -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body class="login-container">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse bg-indigo">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="{{ asset('site-assets/images/logos/footer-logo.png') }}" alt=""></a>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">
                        <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">
        
        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->
                    {!! Form::open(['url' => '/login', 'method' => 'post']) !!}
                        <div class="panel panel-body login-form">
                            @include('partials._messages')
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" placeholder="Email" name='email'>
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" placeholder="Password" name='password'>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
                            </div>

                            <div class="form-group text-center">
                                <label class="checkbox-inline checkbox-right">
                                    <input type="checkbox" name="remember" class="checkbox"> Remember me?
                                </label>
                            </div>

                            <div class="text-center">
                                <a href="/password/reset">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2017 Essence Digital
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="assets/js/core/app.js"></script>
</body>
</html>