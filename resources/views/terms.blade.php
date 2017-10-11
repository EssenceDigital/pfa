@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('breadcrumbs')

    <!-- Page header and breadcrumbs -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">Terms of Use/span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Terms of Use</a></li>
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
                <h6 class="panel-title text-semibold">Terms of Use</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Panel body -->
            <div class="panel-body">
         
                <h6 class="text-semibold">The MIT License</h6>
                <p class="content-group">Copyright © 2016 Essence Digital</p>

                <p class="content-group">Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>

                <p class="content-group">The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>

                <p class="content-group"> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>

                <p class="content-group">More in formation on <a href="https://opensource.org/licenses/MIT" target="_blank">The MIT License can be found here</a></p>

            </div>
        </div>
    </div>

@endsection