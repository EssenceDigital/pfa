<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('site-assets/images/logos/footer-logo.png') }}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <div class="navbar-right">
            <p class="navbar-text">Welcome, {{ Auth::user()->name }}</p>
            <p class="navbar-text"><span class="label bg-success-400">Loged In</span></p>
            
            <ul class="nav navbar-nav">  
                <li>
                    <a href="/">
                        <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
                    </a>
                </li>                           
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->