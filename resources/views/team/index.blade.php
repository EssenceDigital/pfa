@extends('layouts.app')

@section('page-title', 'View Team Members')

@section('breadcrumbs')

    <!-- Page header and breadcrumbs -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">View Team</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
                <li class="active">View Team Members</li>
            </ul>

        </div>
    </div>
    <!-- /page header and breadcrumbs -->

@endsection

@section('content')

    <div class="col-md-6">

        @include('partials._messages')

        <!-- Latest posts -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">View Team Members</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Panel body -->
            <div class="panel-body">
            <p class="content-group">Click the icon to the right of each item for actions.</p>
                <div class="row">
                    <ul class="media-list">

                            {{-- If team members exist then iterate through them --}}
                            @foreach($members as $member)

                                <li class="media">

                                    <!-- Avatar for member -->
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            @if($member->avatar != null)
                                                <img src="{{ asset('uploads/' . $member->avatar) }}" class="img-circle" alt="">
                                            @else
                                                <img src="{{ asset('assets/images/placeholder.jpg') }}" class="img-circle" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <!-- /Avatar for member -->

                                    <!-- Title for member -->
                                    <div class="media-body">
                                        <div class="media-heading text-semibold">{{ $member->first . ' ' . $member->last }}</div>
                                    </div>
                                    <!-- /Title for member -->

                                    <!-- Actions for member -->
                                    <div class="media-right media-middle">
                                        <ul class="icons-list text-nowrap">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="/team/{{ $member->id }}/edit"><i class="icon-user"></i> Edit</a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#teamModal{{ $member->id }}"><i class="icon-trash"></i> Remove</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Actions for member -->
                                </li>

                            @endforeach

                        </ul>

                        {{-- Pagination links --}}
                        <div class="text-center">
                            {{ $members->links() }}
                        </div>

                        {{-- If no team members found then show this alert --}}
                        @if($members->isEmpty())
                            <div class="alert alert-info alert-styled-left alert-bordered">
                                <strong>Heads up!</strong> There is currently no team members saved. <a href="/team/create" class="alert-link"><strong>Click here to add some</strong></a>
                            </div>
                        @endif

                </div>
            </div>
        </div>
        <!-- /latest posts -->
    </div>

    @foreach($members as $member)

        <!-- Warning modal -->
        <div id="teamModal{{ $member->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title"><i class="icon-warning"></i> Confirm Action</h6>
                    </div>
                    <div class="modal-body">
                        <h6 class="text-semibold">Remove this user?</h6>
                    </div>
                    <div class="modal-footer">
                        <form action="/team/{{ $member->id }}" method="post">
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