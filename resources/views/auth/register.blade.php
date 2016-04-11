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


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-4"></div>
            <div class="container col-md-4">
                <form class="form-signin" method="post" action="<% asset('auth/register') %>">
                    <%% csrf_field() %%>
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><% $error %></li>
                            @endforeach
                        </ul>
                    @endif
                    <h2 class="form-signin-heading">Sign Up</h2>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="confirmPassword" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                </form>
            </div>
            <div class="col-md-4"></div>

            <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->



</div>