@extends('layouts.site')

@section('page-title', 'Videos')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>Videos</span></h1>
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
    <!-- VIDEO / POSTS -->
    <div class="blog">
        <div class="container">
            {{-- If no posts found then show this alert --}}
            @if($posts->isEmpty())
                <div class="row alert alert-info alert-styled-left alert-bordered" style="margin-top: 75px;">
                    <strong>No videos have been added to the site</strong>
                </div>
            @else
                <div class="row" style="margin-bottom: 35px;">
                    <div class="sidebar">
                        <!-- Categories Starts -->
                        <div class="categories text-center">
                            <h1>Categories</h1>
                            <ul class="list-inline">
                                <li><a href="/videos">All</a></li>
                                <li><a href="/videos/striking">Kickboxing / MMA Striking</a></li>
                                <li><a href="/videos/grappling">Grappling</a></li>
                                <li><a href="/videos/wrestling">Wrestling</a></li>
                                <li><a href="/videos/jiujitsu">Jiu Jitsu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @foreach($posts as $post)
                    <!-- Post Starts -->
                    <div class="row no-gutter-8 no-gutter-4 post fitvid">
                        <div class="col-lg-8 col-md-8{{ (($loop->index % 2 == 0) ? '' : ' right pull-right' ) }}" style="margin-bottom:15px;">
                            <div class="picture" style="padding-left:15px; padding-right: 15px;">
                                <iframe width="560" height="315" src="{{ $post->video }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="details">
                                <h1>{{ $post->title }}</h1>
                                <div class="description">{{ $post->body }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Ends -->
                @endforeach
            @endif


        </div>
    </div>
    <!-- / VIDEO / POSTS-->

    {{-- Pagination links --}}
    <div class="text-center">
        {{ $posts->links() }}
    </div>

@endsection