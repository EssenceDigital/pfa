@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('breadcrumbs')

    <!-- Page header and breadcrumbs -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">Dashboard</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
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
                <h6 class="panel-title text-semibold">Dashboard</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Panel body -->
            <div class="panel-body">
         
                <h6 class="text-semibold">Add and update content</h6>
                <p class="content-group">This dashboard allows you to add small sections of content to your website. Only logged in users have access to this area and you control who is a user. The menu on the right showcases all the available sections that are editable. Once a section has been added it will be automatically styled to suit the website.</p>
                <p class="content-group">Each section has a few helpful notes to keep in mind when adding information to the forms.</p>

                <h6 class="text-semibold">Potential addons</h6>
                <p class="content-group">This dashboard can also be expanded to include additional editable sections or other useful administration features. Searchable (only to logged in users) membership lists that include relevant admin information is an example of a possible expansion. Another example is users who have different levels of access to dashboard features.</p>

                <h6 class="text-semibold">Please report any usage problems</h6>
                <p class="content-group">If any problem prevents usage please report it so it can be potentially fixed. By using this app you are also agreeing to <a href="/terms-of-use" target="_blank">these terms of use&mdash;The MIT License.</a></p>
            </div>
        </div>
    </div>

@endsection