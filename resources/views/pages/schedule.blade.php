@extends('layouts.site')

@section('page-title', 'Class Schedule')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>Class Schedule</span></h1>
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

    <!-- SCHEDULE CONTENT -->
    <div class="schedule">
        <!-- INTRO STARTS
            ========================================================================= -->
        <div class="container intro">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Class Schedule</h1>
                    <h2>Our current class roatation</h2>
                </div>
            </div>
        </div>
        <!-- /. INTRO ENDS
            ========================================================================= -->
        <div class="container schedule-table">
            <div class="row">
                <div class="col-lg-12">

                    <!-- FullCalendar container -->
                    <div id="schedule"></div>

                </div>
            </div>
        </div>

        <!---->
        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h1>How can I get started?</h1>
                        <div class="description">Come try a FREE class during any of our evening beginner or daytime mixed level classes. You'll need to sign a FREE class form, so come 5 minutes before class begins. Bring athletic clothing and a water bottle.</div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-25">
                        <div id="free-class" class="blue-bg">
                            <h2>try a <strong>FREE</strong> class</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.  -->
    </div>
    <!-- /. SCHEDULE CONTENTS ENDS-->

@endsection


@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/pages/animations_css3.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/plugins/ui/fullcalendar/fullcalendar.min.js') }}"></script>
    <script>

        /* FullCalendar related functionality contained in scope of self executing function 
        */
        (function(){

            {{-- Add event objects to js array dynamically with Laravel on page load --}}
            var events = [
                {{-- Iterate through all schedule items and create javascript object --}}
                @foreach($schedule as $time_spot)
                    {
                        id: {{ $time_spot->id }},
                        title: "{{ new Illuminate\Support\HtmlString($time_spot->class) }}",
                        start: "{{ $time_spot->start_time }}",
                        @if($time_spot->end_time != null)
                            end: "{{ $time_spot->end_time }}",
                        @endif 
                        color: "{{ $time_spot->color }}"
                    },
                @endforeach
            ];

            /* Initialize FullCalendar with custom options
            */
            $('#schedule').fullCalendar({
                // Options
                events: events,
                header: {
                    left: '',
                    center: '',
                    right: ''
                },
                height: "auto",
                //contentHeight: 'auto',
                defaultView: 'listWeek',
                listDayAltFormat: false,
                defaultDate: '2014-11-15',
                editable: false,
                handleWindowResize: false,

            });
            // FullCalendar init

            // Render if inside hidden element
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('.schedule').fullCalendar('render');
            });   

            $('.fc-list-view .fc-scroller').css('height', 'auto');

            $(window).resize(function(){
                $('.fc-list-view .fc-scroller').css('height', 'auto');
            });

        })();
        // / Self executing scope

    </script>

@endsection