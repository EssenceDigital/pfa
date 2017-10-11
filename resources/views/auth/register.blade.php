@extends('layouts.app')

@section('page-title', 'Register User')

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
                <li class="active">Register User</li>
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
            {!! Form::open(['url' => 'register', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title text-semibold">Register User</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p class="content-group">All users will have the ability to add or delete sections from the website so only register trusted individuals. New users can change their password at the login page by clicking the "Forgot password" link.</p>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-9">
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ex. John Smith']) }}
                                <div class="form-control-feedback">
                                    <i class="icon-user"></i>
                                </div>
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-9">
                                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@email.ca']) }}
                                <div class="form-control-feedback">
                                    <i class="icon-mail5"></i>
                                </div>
                                <span class="help-block">(Required) - Will be used as login credential</span>
                            </div>
                        </div>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-9">
                                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                                <div class="form-control-feedback">
                                    <i class="icon-lock"></i>
                                </div>
                                <span class="help-block">(Required)</span>
                            </div>
                        </div>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="col-lg-3 control-label">Repeat Password</label>
                            <div class="col-lg-9">
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat password']) }}
                                <div class="form-control-feedback">
                                    <i class="icon-lock"></i>
                                </div>
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




