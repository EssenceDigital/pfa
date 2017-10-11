@extends('layouts.app')

@section('page-title', 'Edit Video')

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
                <li class="active">Edit Video</li>
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
            {!! Form::model($post, ['url' => 'posts/' . $post->id, 'method' => 'patch', 'files' => true, 'class' => 'form-horizontal']) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title text-semibold">Edit Video</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p class="content-group">You must visit the YouTube video in your browser and copy the URL from the address bar. Any other URL will not work with this app.</p>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Title:</label>
                            <div class="col-lg-9">
                                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Video title']) }}
                                <div class="form-control-feedback">
                                    <i class="  icon-text-height"></i>
                                </div>
                                <span class="help-block">(Required) - Use a descriptive title because this will also serve as the URL and help Google indexing</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Video URL:</label>
                            <div class="col-lg-9">
                                {{ Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'YouTube video link']) }} 
                                <div class="form-control-feedback">
                                    <i class="icon-youtube3"></i>
                                </div>
                                <span class="help-block">(Required) - Paste the raw YouTube URL (from the address bar) for the video</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Category:</label>
                            <div class="col-lg-9">
                                {{ Form::select('category', ['striking' => 'Striking', 'grappling' => 'Grappling', 'wrestling' => 'Wrestling', 'jiujitsu' => 'Jiu Jitsu'], null, ['class' => 'form-control']) }}
                                <div class="form-control-feedback">
                                    <i class="icon-strategy"></i>
                                </div>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Body:</label>
                            <div class="col-lg-9">
                                {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Short description', 'rows' => 15]) }}
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
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




