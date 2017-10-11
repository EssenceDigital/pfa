@extends('layouts.site')

@section('page-title', 'The Team')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>PFA Team</span></h1>
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

    <!-- TEAM -->
    <div class="trainer">
        <div class="container">
            <div class="row intro">
                <div class="col-lg-12">
                    <h1>The PFA Team</h1>
                    <h2>Our dedicated and talented people</h2>
                </div>
            </div>

            {{-- If no team members found then show this alert --}}
            @if($team->isEmpty())
                <div class="row alert alert-info alert-styled-left alert-bordered" style="margin-top: 75px;">
                    <strong>No team members have been added to the site</strong>
                </div>
            @endif

            @foreach($team as $member)
                <!-- Trainer Block -->
                <div class="row block">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                        <div class="picture"><img src="{{ asset('uploads/' . $member->avatar) }}" class="img-responsive" alt="" ></div>
                    </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="info">
                                <div class="dept">{{ $member->first . ' ' . $member->last }} <!--<span class="name">Head Instructor</span>--></div> 
                                <div class="description">{{ $member->description }}</div>
                                <ul class="awards">
                                    @if(! empty($member->accolades[0]))
                                        @foreach(explode('-,-', $member->accolades) as $accolade)
                                            <li><i class="fa fa-star-half-o"></i> {{ $accolade }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                                <ul class="social-icons">
                                    @if($member->twitter != null)
                                        <li><a href="{{ $member->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if($member->instagram != null)
                                        <li><a href="{{ $member->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                </div>
                <!-- / Trainer Block -->
            @endforeach

        </div>
    </div>
    <!-- / TEAM-->

@endsection