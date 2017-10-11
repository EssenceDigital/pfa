@extends('layouts.site')

@section('page-title', 'Gallery')

@section('upper-content')

    <!-- ABOUT US BANNER STARTS -->
    <div class="inner-banner parallax-1">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><span>Gallery</span></h1>
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

    <!-- ABOUT US -->
    <div class="about-us">
        <div class="container">
            {{-- If no gallery items found then show this alert --}}
            @if($gallery->isEmpty())
                <div class="row alert alert-info alert-styled-left alert-bordered" style="margin-top: 75px;">
                    <strong>No gallery images have been added to the site</strong>
                </div>
            @endif
        </div>

        <div class="container-fluid">
            <div id="mansory-effect">
                @foreach($gallery as $img)
                        
                    <a class="image-popup-vertical-fit" href="{{ asset('uploads/' . $img->photo) }}" title=""><img class="item" src="{{ asset('uploads/' . $img->photo) }}" alt=""></a>
                       
                @endforeach
            </div>
        </div>

        <!-- / PHOTOS -->
    
    </div>
    <!-- / ABOUT US -->

    {{-- Pagination links --}}
    <div class="text-center mt-75">
        {{ $gallery->links() }}
    </div

@endsection

@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('site-assets/js/isotope/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('site-assets/js/isotope/custom-isotope-mansory.js') }}"></script>

@endsection