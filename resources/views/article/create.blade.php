@extends('layouts.master')
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
                <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
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
        <!-- Content Header (Page header) -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <section class="content-header">
            <h1>
                Create Article
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <input class="form-control" type="text" name="title"  placeholder="Title" required autofocus>

            <br>

            <textarea class="form-control" style="height: 300px;" name="content" placeholder="Content "></textarea>

            <br>

            <button class="btn"><i class=" icon-plus">Add Contributors</i></button>

            <br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>

            <br>
            <!-- Your Page Content Here -->

        </section><!-- /.content -->
        </div>
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->



</div>