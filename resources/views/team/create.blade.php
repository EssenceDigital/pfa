@extends('layouts.app')

@section('page-title', 'Create Team Member')

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
                <li><a href="/dashboard"><i class="icon-home2 position-left"></i> Dashboard</a></li>
                <li class="active">Create Team Member</li>
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
            {!! Form::open(['url' => 'team', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title text-semibold">Create Team Member</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p class="content-group">The social media inputs can be filled by visiting that persons social account and copying the URL from the address bar. Accolades will be appear on the website as a nice list under the team member description.</p>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">First Name:</label>
                            <div class="col-lg-9">
                                {{ Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'First']) }}
                                <div class="form-control-feedback">
                                    <i class=" icon-user"></i>
                                </div>
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Last Name:</label>
                            <div class="col-lg-9">
                                {{ Form::text('last', null, ['class' => 'form-control', 'placeholder' => 'Last']) }}
                                <div class="form-control-feedback">
                                    <i class=" icon-users2"></i>
                                </div>                               
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>

                        {{--<div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Facebook:</label>
                            <div class="col-lg-9">
                                {{ Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Facebook link']) }}
                                <div class="form-control-feedback">
                                    <i class=" icon-facebook2"></i>
                                </div>                                
                                <span class="help-block">(Optional) - Paste the Facebook profile URL</span>
                            </div>
                        </div>--}}

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Instagram:</label>
                            <div class="col-lg-9">
                                {{ Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Instagram handle']) }}
                                <div class="form-control-feedback">
                                    <i class=" icon-instagram"></i>
                                </div>  
                                <span class="help-block">(Optional) - Type the Instagram handle (@examplehandle)</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Twitter:</label>
                            <div class="col-lg-9">
                                {{ Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Twitter handle']) }}
                                <div class="form-control-feedback">
                                    <i class=" icon-twitter2"></i>
                                </div>  
                                <span class="help-block">(Optional) - Type the Twitter handle (@examplehandle)</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Avatar Image:</label>
                            <div class="col-lg-9">
                                {{ Form::file('avatar', ['class' => 'file-input']) }}  
                                <span class="help-block">(Required) - Accepted formats: gif, png, jpg. Max file size 4Mb</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label col-sm-12">Accolades</label>
                            <div class="col-lg-7 col-sm-9">
                                <input type="text" name="accolades[]" class="form-control" placeholder="Enter accolade">
                                <div class="form-control-feedback">
                                    <i class=" icon-trophy2"></i>
                                </div>  
                                <span class="help-block">(Optional) - For multiple accolades click the add button on the right</span>
                            </div>
                            <div class="col-lg-2 col-sm-3" style="margin-top: 0;">
                                <button type="button" id="add-accolade-input" class="btn btn-primary btn-sm"><i class=" icon-trophy2"></i> Add</button>
                            </div>
                            
                            <div id="additional-accolades">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description for website', 'rows' => 5]) }}
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create <i class="icon-arrow-right14 position-right"></i></button>
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
    

@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/pages/uploader_bootstrap.js') }}"></script>
    <script>
        
        $('#add-accolade-input').click(function(){
            $('#additional-accolades').append('<div class="additional-accolade row"><br> <label class="col-lg-3 control-label col-sm-12">&nbsp;</label> <div class="col-lg-7 col-sm-9"> <input name="accolades[]" type="text" class="form-control" placeholder="Enter accolade"> <div class="form-control-feedback"> <i class=" icon-trophy2"></i> </div> </div> <div class="col-lg-2 col-sm-3" style="margin-top: 0;"> <button type="button" class="btn btn-danger btn-sm remove-accolade-input"><i class=" icon-cancel-circle2"></i></button> </div> </div>');
        }); 

        $('body').on('click', '.remove-accolade-input', function(){
            var input = $(this).parents('.additional-accolade');
            input.remove();
        });

    </script>
@endsection
