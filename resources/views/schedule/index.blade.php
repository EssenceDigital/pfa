@extends('layouts.app')

@section('page-title', 'View Posts')

@section('page-specific-styles')
    <link href="{{ url('assets/css/extras/animate.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumbs')

    <!-- Page header and breadcrumbs -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">View Schedule</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
                <li class="active">View Schedule</li>
            </ul>

        </div>
    </div>
    <!-- /page header and breadcrumbs -->

@endsection

@section('content')
    <div id="main-column" class="col-md-12">

        @include('partials._messages')

        <!-- View posts -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">View Schedule</h6>
                <br>
                <ul class="list list-icons no-margin-bottom">
                    <li>
                        <i class="icon-plus-circle2"></i> To add a class just click the desired time.
                    </li>
                    <li>
                        <i class="icon-pen"></i> To change the name or color of a class just click that class and adjust the information.
                    </li>
                    <li>
                        <i class="icon-question4"></i> To adjust the end time of a class just drag the bottom to suit your needs.
                    </li>
                    <li>
                        <i class="icon-loop3"></i> To adjust the starting time of a class just drag it to the desired location.
                    </li>
                    <li>
                         <i class="icon-minus-circle2"></i> To delete a class just give it a click and then click the remove button.
                    </li>
                </ul>

            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- FullCalendar container -->
                    <div id="schedule"></div>
                </div>
            </div>
        </div>
        <!-- /latest posts -->
    </div>


    <!-- Create class form (Triggered by clicking a day and time) -->
    <div id="add-class-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Add Class</h5>
                    <p class="text-muted">Starting time will be input automatically</p>
                </div>

                <form action="/schedule" id="add-class-form" method="post" class="form-horizontal">
                    {{ method_field("POST") }}
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div id="new-class-form-group" class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Class Name</label>
                                {{ Form::text('class', null, ['id' =>'new-class-input', 'class' => 'form-control', 'placeholder' => 'Class name', 'required' => 'required']) }}
                                <div class="row text-center" style="margin-top:20px;">
                                    <strong>Or select an existing name...</strong>
                                </div>

                            </div>
                        </div>
                        <div id="form-group" class="form-group">
                            <div class="col-md-12">
                                {{ Form::select('class', $classNames, null, ['id' => 'class-name-select', 'class' => 'form-control', 'placeholder' => 'Pick a class name...', 'required' => 'required']) }}
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div id="form-group" class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Start Time</label>
                                <select name="start_time" id="start-time-select" class="form-control"></select>
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div id="form-group" class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">End Time</label>
                                <select name="end_time" id="end-time-select" class="form-control"></select>
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div id="select-color-form-group" class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Display Color</label>
                                {{ Form::select('color', $possibleColors, null, ['id' => 'color-input', 'class' => 'form-control', 'placeholder' => 'Pick a color...', 'required' => 'required']) }}
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <div class='button-wrap'>
                            <button type="button" class="btn btn-link button-fade-out" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary button-fade-out">Save class</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /add class to day modal -->

    <!-- Confirm time change modal -->
    <div id="confirm-time-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title"><i class="icon-help"></i> Interaction Required</h6>
                </div>
                <div class="modal-body">
                    <h6 class="text-semibold">Are you sure you want to change the time of this class?</h6>
                </div>
                <hr>

                <div class="modal-footer">
                    <form id="confirm-time-form" action="/schedule/" method="post">
                        {{ method_field("PATCH") }}
                        {{ csrf_field() }}
                        <input type="hidden" class="start-time-input" name="start_time" value="">
                        <input type="hidden" class="end-time-input" name="end_time" value="">
                        <input type="hidden"  id="class-name" name="class" value="">
                        <input type="hidden" id="color-input" name="color" value="">
                        <div id="loading" style="display: none; padding-bottom: 16px;">
                            <i class="icon-spinner3 spinner"></i>
                        </div>
                        <div class='button-wrap'>
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-info">Save time</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
    <!-- /confirm endtime change modal -->

    <!-- Edit class details modal -->
    <div id="edit-class-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title"><i class="icon-question4"></i> Update Class</h6>
                </div>
                <form id="update-class-form" class="form-group" action="/schedule" method="post">
                    {{ method_field("PATCH") }}
                    {{ csrf_field() }}
                    <input type="hidden" class="start-time-input" name="start_time" value="">
                    <input type="hidden" class="end-time-input" name="end_time" value="">
                    <div class="modal-body">
                        <div id="form-group" class="form-group">
                            <div class="col-md-12">
                                <label class="control-label">Class Name</label>
                                {{ Form::text('class', null, ['id' =>'update-class-input', 'class' => 'form-control', 'placeholder' => 'Class name', 'required' => 'required']) }}
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div id="select-color-form-group" class="form-group">
                            <div class="col-md-12" style="margin-bottom: 35px;">
                                <label class="control-label">Display Color</label>
                                {{ Form::select('color', $possibleColors, null, ['id' => 'update-color-input', 'class' => 'form-control', 'placeholder' => 'Pick a color...', 'required' => 'required']) }}
                                <span id="new-class-help-block" class="help-block">(Required)</span>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="modal-footer">       
                        <div class="button-wrap">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                        </form>
                        <form id="confirm-remove-form" action="/schedule/" method="post" class="pull-left" style="margin-top: -40px;">
                            {{ method_field("DELETE") }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-warning">Remove</button>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
    <!-- /Edit class details modal -->

@endsection

{{-- Specific scripts that control the FullCalendar functionality
 --}}
@section('page-specific-scripts')
    <script type="text/javascript" src="{{ url('assets/js/pages/animations_css3.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/plugins/ui/fullcalendar/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/plugins/moment/moment.js') }}"></script>
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

            var classColors = {
                @foreach($classColors as $class => $color)
                    
                    '{{ $class }}': '{{ $color }}',
                    
                @endforeach
            };

            // For use in the FullCalendar callbacks
            var baseFormAction = '/schedule/';

            /* Sets up the #confirm-time-form for submission based on user interaction. 
               Used by the calendar eventResize() and eventDrop() methods
            */
            var setConfirmTimeForm = function setConfirmTimeForm(calEvent, delta, revertFunc){
                // Cache form
                var form = $('#confirm-time-form');
                // Set the proper id in the action of the update endtime
                form.attr("action", baseFormAction + calEvent.id);

                if(calEvent.end != null){
                    // Set the proper end time hidden input value
                    form.find('.end-time-input').attr("value", calEvent.end.format());   
                }

                // Set the proper start time hidden input value
                form.find('.start-time-input').attr("value", function(){
                    return calEvent.start.format();
                });
                
                form.find('#class-name').attr("value", function(){
                    return calEvent.title;
                });
                // Set the proper color hidden input value
                form.find('#color-input').attr("value", function(){
                    return calEvent.color;
                });

                // Toggle the change time form
                $('#confirm-time-modal').modal('toggle');
                // Listen for the modal to close and revert the time change visual
                $('#confirm-time-modal').on('hidden.bs.modal', function () {
                    revertFunc();
                });    
            };

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
                height: 'auto',
                defaultView: 'agendaWeek',
                defaultDate: '2014-11-15',
                columnFormat: 'dddd',
                editable: true,
                allDaySlot: false,
                slotLabelInterval: '01:00:00',
                slotDuration: '00:15:00',
                snapDuration: '00:05:00',
                minTime: '07:00:00',
                maxTime: '21:45:00',
                slotEventOverlap: false,
                defaultTimedEventDuration: '00:55:00',
                forceEventDuration: true,


                /* Callback for when an empty space is clicked (Add class (event) form)
                */
                dayClick: function(date, jsEvent, view) {
                   
                    var time = moment(date.format()).format('hh:mm A'),
                        dateprefix = date.format().substring(0, 11);

                    $("#start-time-select > option, #end-time-select > option").each(function() {
                        var hour = parseInt(this.value.substring(0, 2)),
                            mins = this.value.substring(3, 5),
                            ampm = this.value.substring(6, 8);

                        if(ampm == 'PM'){
                            if(hour != 12){
                                hour +=12;
                            } 
                        }

                        if(hour < 10){
                            hour = '0' + hour;
                        }

                        this.value = dateprefix + hour + ':' + mins + ':00';
                    });

                    $('#start-time-select').val(date.format());

                    var endHour = parseInt(date.format().substring(11, 13)) + 1;

                    if(endHour < 10){
                        endHour = '0' + endHour;
                    }

                    var endTime = dateprefix + endHour +  ':' + date.format().substring(14, 16) + ':00';
                    
                    console.log(endHour);
                    console.log(endTime);

                    $('#end-time-select').val(endTime);

                    //console.log(date.format().substring(14, 16));
                    // Toggle the add class to day modal form
                    $('#add-class-modal').modal('toggle');
                },
                /* Callback for when an existing event is clicked (Remove class (event) form)
                */
                eventClick: function(calEvent, jsEvent, view) {
                    // Set the proper id in the action of the destroy form
                    $('#confirm-remove-form').attr("action", baseFormAction + calEvent.id);

                    // Set the proper id in the action of the update form
                    $('#update-class-form').attr("action", baseFormAction + calEvent.id);
                    if(calEvent.end != null){
                        // Set the proper end time hidden input value
                        $('#update-class-form').find('.end-time-input').attr("value", calEvent.end.format());  
                    }

                    // Set the proper start time hidden input value
                    $('#update-class-form').find('.start-time-input').attr("value", calEvent.start.format());

                    $('#update-class-input').val(calEvent.title);
                    $('#update-color-input').val(calEvent.color);
                    console.log(calEvent.color);
                    // Toggle the destroy form
                    $('#edit-class-modal').modal('toggle');
                },
                /* Callback for when an existing event is resized (Confirm time form)
                */
                eventResize: function(calEvent, delta, revertFunc) {
                    setConfirmTimeForm(calEvent, delta, revertFunc);
                },
                /* Callback for when an existing event is droped somwhere (Confirm time form)
                */
                 eventDrop: function(calEvent, delta, revertFunc) {
                    setConfirmTimeForm(calEvent, delta, revertFunc);
                }

            });
            // FullCalendar init

            // Render if inside hidden element
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('.schedule').fullCalendar('render');
            });   


            /* New class input focus and focusout
            */
            $('#new-class-input').focus(function(){
                $('#class-name-select').prop('disabled', true);
                $(this).attr('name', 'class');
                $('#class-name-select').attr('name', '');
            });
            $('#new-class-input').focusout(function(){
                if($(this).val() == ''){
                    $('#class-name-select').prop('disabled', false);
                    $(this).attr('name', '');
                }
            });
            /* Class name select input focus and focusout
            */
            $('#class-name-select').focus(function(){
                $('#new-class-input').prop('disabled', true);
                $(this).attr('name', 'class');
            });
            $('#class-name-select').focusout(function(){
                if($(this).val() == ''){
                    $('#new-class-input').prop('disabled', false);
                    $(this).attr('name', '');
                    $('#color-input').val('');
                } else{
                    $('#color-input').val(classColors[$(this).val()]);
                }
            });

            /* Populate select inputs with time increments
            */
            function populate(selector) {
                var select = $(selector);
                var hours, minutes, ampm;
                for(var i = 420; i <= 1320; i += 5){
                    hours = Math.floor(i / 60);

                    minutes = i % 60;
                    if (minutes < 10){
                        minutes = '0' + minutes; // adding leading zero
                    }
                    ampm = hours % 24 < 12 ? 'AM' : 'PM';
                    hours = hours % 12;

                    if (hours === 0){
                        hours = 12;
                    }
                   if (hours < 10){
                        hours = '0' + hours; // adding leading zero
                    }
                    select.append($('<option></option>')
                        .attr('value', hours + ':' + minutes + ' ' + ampm)
                        .text(hours + ':' + minutes + ' ' + ampm)); 
                }
            }
            // Populate start time select
            populate('#start-time-select');
            populate('#end-time-select');

            // Listen for the remove class modal to close
            $('#add-class-modal').on('hidden.bs.modal', function () {
                $('#start-time-select').empty();
                $('#end-time-select').empty();
                $('#new-class-input').val('');
                $('#class-name-select').val('');
                $('#color-input').val('');

                // Populate start time select
                populate('#start-time-select');
                populate('#end-time-select');
            }); 


        })();
        // / Self executing scope

    </script>

@endsection