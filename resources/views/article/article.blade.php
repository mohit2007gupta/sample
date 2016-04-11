@extends('layouts.master')
@section('pageLevelJs')

    <script src="<% asset('static/app/js/dashboard/app.min.js') %>"></script>

    <script src="<% asset('static/app/js/article/main.js') %>"></script>
    <script>
        var articleId = <% $articleId %>;
    </script>
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
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{user.name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li>
                                <a href="<% asset('user/{{user.id}}') %>" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>

                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div style="min-height:40px" class="pull-left image"></div>
                <div class="pull-left info">
                    <p>{{user.name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">

                <li class="header">Quick Actions</li>
                <!-- Optionally, you can add icons to the links -->
                <li>
                    <a href="<% asset('home') %>">
                        <i class="fa fa-link"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<% asset('user/{{user.id}}') %>">
                        <i class="fa fa-link"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li ng-if="user.level.can_publish">
                    <a href="<% asset('user/{{user.id}}') %>">
                        <i class="fa fa-link"></i>
                        <span>My Articles</span>
                    </a>
                </li>
                <li ng-if="user.contributions">
                    <a href="#">
                        <i class="fa fa-link"></i>
                        <span>My Contributions</span>
                    </a>
                </li>
                <li ng-if="user.level.can_publish">
                    <a href="<% asset('article/create')%>">
                        <i class="fa fa-link"></i>
                        <span>Create new Article</span>
                    </a>
                </li>
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page ContentHere -->
            <div class="col-md-4"></div>
            <div class="container col-md-4">
                <div class="blog-header">
                    <h1 class="blog-post-title">{{model.title}}</h1>
                    <p class="blog-post-meta">{{model.updated_at}} by <a href="<% asset('user') %>{{'/'+model.author.id}}">{{model.author.name}}</a></p>
                </div>
                <div class="row">
                    <div class="col-sm-12 blog-main">
                        <div class="blog-post">
                            <p>{{model.content}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->



</div>
@stop
