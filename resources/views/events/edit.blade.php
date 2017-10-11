@extends('layouts.app')

@section('page-title', 'Add Event')

@section('breadcrumbs')

    <!-- Page header and breadcrumbs -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold"></span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
                <li class="active">Edit Event</li>
            </ul>

        </div>
    </div>
    <!-- /page header and breadcrumbs -->

@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">

            @include('partials._messages')

            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title text-semibold">Edit Event</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    @if($event->with_fights)
                        <p class="content-group">You can add or view fights by browsing through the tabs below.</p>
                    @endif
                    <div class="tabbable">
                        @if($event->with_fights)
                            <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                                <li class="active"><a href="#update-details" data-toggle="tab">Update Details</a></li>
                                <li><a href="#view-fights" data-toggle="tab">View Fights</a></li>
                                <li><a href="#add-fight" data-toggle="tab">Add Fight</a></li>
                            </ul>
                        @endif

                        <!-- Tab content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="update-details">
                                <!-- Form input -->
                                {!! Form::model($event, ['url' => 'events/' . $event->id, 'method' => 'patch', 'files' => true, 'class' => 'form-horizontal']) !!}
                                    <input type="hidden" name="with_fights" value="{{ $event->with_fights }}">

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label class="col-lg-3 control-label">Name:</label>
                                        <div class="col-lg-9">
                                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Event name']) }}
                                            <div class="form-control-feedback">
                                                <i class="icon-pushpin"></i>
                                            </div>
                                            <span class="help-block">(Required)</span>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label class="col-lg-3 control-label">Start Date:</label>
                                        <div class="col-lg-9">
                                            {{ Form::date('start_date', null, ['class' => 'form-control']) }}
                                            <div class="form-control-feedback">
                                                <i class=" icon-calendar"></i>
                                            </div>                               
                                            <span class="help-block">(Required)</span>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label class="col-lg-3 control-label">End Date</label>
                                        <div class="col-lg-9">
                                            {{ Form::date('end_date', null, ['class' => 'form-control']) }}
                                            <div class="form-control-feedback">
                                                <i class=" icon-calendar2"></i>
                                            </div>                                
                                            <span class="help-block">(Optional) - Leave blank for single day events</span>
                                        </div>
                                    </div>

                                    {{--<div class="form-group">
                                        <label class="col-lg-3 control-label">Photo:</label>
                                        <div class="col-lg-9">
                                            {{ Form::file('photo', ['class' => 'file-input']) }}  
                                            <span class="help-block">(Optional) - Accepted formats: gif, png, jpg. Max file size 4Mb</span>
                                        </div>
                                    </div>--}}

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Overview:</label>
                                        <div class="col-lg-9">
                                            {{ Form::textarea('overview', null, ['class' => 'form-control', 'placeholder' => 'Overview of the event', 'rows' => 10]) }}
                                            <span class="help-block">(Required)</span>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                         <button type="submit" class="btn btn-primary" >Save <i class="icon-arrow-right14 position-right"></i></button>
                                     </div>
                                </form>
                            </div>

                            {{-- If fights tied to this even then show two extra tabs (using fights partials) --}}
                            @if($event->with_fights)
                                <!-- Show current fights tied to event -->
                                <div class="tab-pane" id="view-fights">
                                    @include('fights._index')
                                </div>
                                <!-- Show form to add fight to event -->
                                <div class="tab-pane" id="add-fight">
                                   @include('fights._create')
                                </div>
                            @endif

                        </div>
                        <!-- /Tab content -->
                    </div>
                    <!-- /Tabable -->
                </div>
                <!-- /Panel body -->
            </div>
            <!-- /Panel flat -->
        </div>
        <!-- /Column -->
    </div>
    <!-- /Row -->

    @foreach($event->fights as $fight)

        <!-- Warning modal -->
        <div id="fightModal{{ $fight->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><i class="icon-warning"></i> Confirm Action</h6>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-semibold">Remove this fight?</h6>
                    </div>
                    <div class="modal-footer">
                        <form action="/fights/{{ $fight->id }}" method="post">
                            {{ method_field("DELETE") }}
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /warning modal -->
        
    @endforeach

@endsection

@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/pages/uploader_bootstrap.js') }}"></script>

@endsection