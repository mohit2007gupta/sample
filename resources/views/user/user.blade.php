@extends('layouts.master')
@section('pageLevelJs')
    <script>
        var userId = '<% $userId %>';
    </script>
    <script src="<% asset('static/app/js/dashboard/app.min.js') %>"></script>

    <script src="<% asset('static/app/js/user/main.js') %>"></script>

@stop
@section('pageContent')
    <div class="wrapper">
        <!-- Left side column. contains the logo and sidebar -->
        <header class="main-header">
            <a href="<% asset('home') %>" class="logo">
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
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
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
                    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Home</span></a></li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>Profile</span></a></li>
                    <li ng-if="user.level.can_publish"><a href="#"><i class="fa fa-link"></i>
                            <span>My Articles</span></a></li>
                    <li ng-if="user.contributions"><a href="#"><i class="fa fa-link"></i> <span>My Contributions</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>Statistics</span></a></li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>Logout</span></a></li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Link in level 2</a></li>
                            <li><a href="#">Link in level 2</a></li>
                        </ul>
                    </li>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="col-md-4"></div>
            <!-- Content Header (Page header) -->
            <section class="content-header col-md-4 text-center">
                <h1>
                    {{model.name}}
                </h1>
                <div>
                    {{model.level.name}}
                </div>
                <div>{{model.email}}</div>
                <div ng-if="user.level.id >= model.level.id">
                    <div ng-if="user.level.can_grant_revoke_admin_privilege"><span><button class="btn btn-primary" ng-if="model.level.id != 5">Make Admin</button> <button class="btn btn-danger" ng-if="model.level.id == 5">Revoke Admin</button></span></div>
                    <div ng-if="user.level.can_grant_revoke_editor_privilege"><button class="btn btn-primary" ng-if="model.level.id != 4">Make Editor</button> <button class="btn btn-danger" ng-if="model.level.id == 4">Revoke Editor</button></div>
                    <div ng-if="user.level.can_grant_revoke_moderator_privilege"><button class="btn btn-primary" ng-if="model.level.id != 3">Make Moderator</button> <button class="btn btn-danger" ng-if="model.level.id == 3">Revoke Moderator</button></div>
                    <div ng-if="user.level.can_grant_revoke_author_privilege"><button class="btn btn-primary" ng-if="model.level.id != 2">Make Author</button> <button class="btn btn-danger" ng-if="model.level.id == 2">Revoke Author</button></div>

                </div>

            </section>
            <div>

            </div>

            <!-- Main content -->
            <section class="content col-md-4">

                <!-- Your Page Content Here -->

            </section><!-- /.content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-4" ng-repeat="article in articles">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h2 class="text-center"> {{article.title}} </h2>
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


                <!-- Your Page Content Here -->

            </section>
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->




    </div>
@stop