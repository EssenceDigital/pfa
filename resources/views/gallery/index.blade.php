@extends('layouts.app')

@section('page-title', 'View Gallery')

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
                <li class="active">View Images</li>
            </ul>

        </div>
    </div>
    <!-- /page header and breadcrumbs -->

@endsection

@section('content')

  <div class='row'>
        <div class="col-md-6">

            <!-- Form input -->
            {!! Form::open(['url' => 'gallery', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) !!}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title text-semibold">Add Images</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-md-2 control-label">Image:</label>
                            <div class="col-md-10">
                                {{ Form::file('photo[]', ['class' => 'file-input', 'multiple' => 'multiple']) }}  
                                <span class="help-block">Accepted formats: gif, png, jpg. Max 4Mb per image</span>
                            </div>
                        </div>
                        <div class="col-md-7 pull-right alert alert-info alert-styled-left alert-bordered">
                            <strong>You should select multiple images at once</strong></a>
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

    <div class="col-md-6">

        @include('partials._messages')
    
        <!-- Latest posts -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h6 class="panel-title">View Images</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                {{-- If no images found then show this alert --}}
                @if($images->isEmpty())
                    <div class="alert alert-info alert-styled-left alert-bordered">
                        <strong>Heads up!</strong> There are currently no images saved. <a href="/events/create" class="alert-link"><strong>Add some above</strong></a>
                    </div>
                @else
                    <div class="row">
                        <form action="/gallery/ }}" method="post" id="images-form">
                            {{ method_field("DELETE") }}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" id="remove-selected" class="btn btn-warning pull-right disabled" style="margin-right: 10px;">Remove Selected</button>
                                </div>
                            </div>
                            <table class="table table-striped table-lg" style="margin-top: 50px;">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Preview</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($images as $image)
                                        <tr>
                                            <td><input type="checkbox" name="id[]" value="{{ $image->id }}" class="styled photo-checkbox"></td>
                                            <td>
                                                <a href="{{ asset('uploads/' . $image->photo) }}" data-popup="lightbox">
                                                    <img src="{{ asset('uploads/' . $image->photo) }}" alt="" class="img-rounded img-preview">
                                                </a>
                                            </td>
                                            <td><a href="#">{{ $image->created_at }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>

                        {{-- Pagination links --}}
                        <div class="text-center">
                            {{ $images->links() }}
                        </div>

                    </div>
                @endif
            </div>
        </div>
        <!-- /latest posts -->
    </div>

@endsection

@section('page-specific-scripts')

    <script type="text/javascript" src="{{ url('assets/js/plugins/uploaders/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/pages/uploader_bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/plugins/media/fancybox.min.js') }}"></script>
    <script>

        $(function() {

            // Toggle success / checked class
            $('.photo-checkbox').on('change', function () {
                        var checked = [],
                        unchecked = [];
                if($('#remove-selected').hasClass('disabled')){
                    $('#remove-selected').removeClass('disabled');
                }
                if ($(this).parent('span').hasClass('checked')) {
                    $(this).parents('tr').addClass('success');
                    $.uniform.update();
                } else {


                    $(this).parents('tr').siblings().each(function() {
                      if($(this).hasClass('success')){
                        checked.push(true);
                      } else{
                        unchecked.push(true);
                      }
                    });
                    console.log(checked);
                    if(checked.length == 0){
                        $('#remove-selected').addClass('disabled');
                    }

                    $(this).parents('tr').removeClass('success');
                    $.uniform.update();
                }
            });


            $('#images-form').submit(function(e){
                e.preventDefault();
                // Cache form
                var form = $(this);
                // Array of id's to delete
                var deleteArray = [];
                // Populate deleteArray
                form.find('.success').each(function(){
                    deleteArray.push($(this).find('input[type=checkbox]').val())
                });
                // Implode into string for form action 'spoofing'
                var deleteString = deleteArray.join('&');

                form.attr('action', '/gallery/' + deleteString);
                form[0].submit();
            });


            
        });

    </script>


@endsection


