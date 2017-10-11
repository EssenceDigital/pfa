@extends('layouts.site')

@section('page-title', 'Events')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>News &amp; Events</span></h1>
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

    <!-- EVENTS CONTENTS STARTS
        ========================================================================= -->
    <div class="events">

        <!-- INTRO STARTS
            ========================================================================= -->
        <div class="container intro">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1>News &amp; Events</h1>
                    <h2>Current news and happenings</h2>
                </div>
            </div>
        </div>
        <!-- /. INTRO ENDS
            ========================================================================= -->
        <!-- EVENTS TABLE ENDS
            ========================================================================= -->  
        <div class="container events-table">
            {{-- If no event items found then show this alert --}}
            @if($events->isEmpty())
                <div class="row alert alert-info alert-styled-left alert-bordered" style="margin-top: 45px;">
                    <strong>No events have been added to the site</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="media-list">

                        @foreach($events as $event)
                            <!-- Media Start with nested Comments Starts -->
                            <li class="media mt-75">
                                <div class="media-left">
                                    <a href="#">
                                    <img src="{{ asset('site-assets/images/glove-icon.png') }}" class="media-object" alt="" >
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $event->name }}</h4>
                                    <div class="time" style="margin-top: 7px; margin-bottom: 7px;">{{ date("F j, Y", strtotime($event->start_date)) . (($event->end_date != $event->start_date) ? ' to ' .date("F j, Y", strtotime($event->end_date)) : '' ) }}</div>
                                    <p>{{ $event->overview }}
                                    </p>
                                    <!-- Nested media object -->

                                    @if($event->fights)
                                        @foreach($event->fights as $fight)
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="time"><strong>{{ $fight->fighter_a }}</strong> ({{ $fight->fighter_a_record }}, {{ $fight->fighter_a_gym }}) <strong> vs. {{ $fight->fighter_b }} </strong> ({{ $fight->fighter_b_record }}, {{ $fight->fighter_b_gym }}) - <strong>{{ $fight->note }}</strong></p> </div>
                                                    <p>{{ $fight->result }}</p> 


                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </li>
                            <!-- Media Start with nested Comments Ends -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- / EVENTS -->    

        {{-- Pagination links --}}
        <div class="text-center">
            {{ $events->links() }}
        </div>

    </div>
    <!-- /. EVENTS CONTENTS ENDS
        ========================================================================= -->

@endsection


