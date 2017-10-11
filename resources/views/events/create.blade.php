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
                <li class="active">Create Event</li>
            </ul>

        </div>
    </div>
    <!-- /page header and breadcrumbs -->

@endsection

@section('content')

    <div class='row'>
        <div class="col-md-6">

            @include('partials._messages')

            <!-- Form input -->
            {!! Form::open(['url' => 'events', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title text-semibold">Create Event</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                    <p class="content-group">After the Next button is clicked you will be asked if this event requires fights to be added. If fights are required you will then be able to add some to the event.</p>
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
                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_fights_question">Next <i class="icon-arrow-right14 position-right"></i></button>
                         </div>
     
                         <!-- interaction required modal -->
                         <div id="add_fights_question" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header bg-info">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h6 class="modal-title"><i class="icon-help"></i> Interaction Required</h6>
                                     </div>
     
                                     <div class="modal-body">
                                         <div class="form-group">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label>Do you need to add fights to this event?</label>
                                                     <select multiple="multiple" class="form-control" name="with_fights">
                                                         <option selected="selected" value=0>NO</option>      
                                                         <option value=1>YES</option>
                                                     </select>
                                                     <span class="help-block">* Required</span>
                                                 </div>
                                             </div>
                                         </div>
                                         <hr>
                                     </div>
     
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                                         <button type="submit" class="btn btn-info">Save event</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- /iteraction required modal -->
                    </div>
                    <!-- /panel body -->
                </div>
                <!-- /panel flat -->
            </form>
            <!-- /basic layout -->
        </div>
        <!-- /column -->
    </div>
    <!-- /row -->

@endsection

@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/pages/uploader_bootstrap.js') }}"></script>

@endsection


