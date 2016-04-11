@extends('layouts.master')
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

            <!-- Your Page Content<div class="col-md-4"></div>
    <div class="container col-md-4">
        <div class="blog-header">
            <h1 class="blog-post-title">The Bootstrap Blog</h1>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        </div>
        <div class="row">
            <div class="col-sm-12 blog-main">
                <div class="blog-post">
                    <p>Blog goes here</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div> Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->



</div>