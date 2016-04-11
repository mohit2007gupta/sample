@extends('layouts.master')
@section('pageLevelJs')
    <script src="<% asset('static/app/js/dashboard/app.min.js') %>"></script>

    <script src="<% asset('static/app/js/home/main.js') %>"></script>

@stop
@section('pageContent')
    <div class="wrapper">
        <!-- Left side column. contains the logo and sidebar -->
        <header class="main-header">
            <a href="<% asset('/') %>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S</b>C</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Source</b>Cheetah</span>
            </a>
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="<% asset('auth/register')%>" >
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Sign Up</span>
                            </a>

                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<% asset('auth/login')%>" >
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-4" ng-repeat="article in articles">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h2 class="text-center"> {{article.title}} </h2>
                                <h5 class="text-center"> {{ article.created_at }}</h5>
                            </div><!-- /.box-header -->
                            <div class="box-body" style="font-size:120%; min-height:150px">
                                {{article.content}}
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="<% asset('article') %>{{'/'+article.id}}" class="uppercase">Read More</a>
                            </div><!-- /.box-footer -->
                        </div>
                    </div>

                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->



    </div>
@stop