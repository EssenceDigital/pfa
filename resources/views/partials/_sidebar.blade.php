<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="{{ asset('assets/images/placeholder.jpg') }}" class="img-circle img-responsive" alt=""></a>
                    <h6>{{ Auth::user()->name }}</h6>
                    <span class="text-size-small"></span>
                </div>
                                            
                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>Options</span> <i class="caret"></i></a>
                </div>
            </div>
            
            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li>
                        {!! Form::open(['url' => 'logout', 'method' => 'post', 'id' => 'logout-form', 'style' => 'display: none;']) !!}
                        {!! Form::close() !!}
                        <a href="#" id='app-logout'><i class="icon-switch2"></i> <span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                             <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="/home"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li>
                        <a href="#"><i class="icon-users"></i> <span>Users</span></a>
                        <ul>
                            <li><a href="/register">Add user</a></li>
                            <li><a href="/users">View users</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-calendar3"></i> <span>Class Schedule</span></a>
                        <ul>
                            <li><a href='/schedule'>View schedule</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-trophy2"></i> <span>Team Members</span></a>
                        <ul>
                            <li><a href='/team/create'>Add member</a></li>
                            <li><a href='/team'>View team</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-youtube"></i> <span>Videos</span></a>
                        <ul>
                            <li><a href='/posts/create'>Add video</a></li>
                            <li><a href='/posts'>View videos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-podium"></i> <span>Events / News</span></a>
                        <ul>
                            <li><a href='/events/create'>Add event</a></li>
                            <li><a href='/events'>View events</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-image3"></i> <span>Image Gallery</span></a>
                        <ul>
                            <li><a href='/gallery'>View images</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->