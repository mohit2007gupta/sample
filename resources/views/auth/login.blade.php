@extends('layouts.master')
@section('pageLevelCss')
    <link src="<% asset('static/app/css/auth/main.css') %>" rel="stylesheet">
@stop
@section('pageLevelJs')
    <script type="text/javascript" src="<% asset('static/app/js/auth/main.js') %>"></script>@stop
@section('title')
    Source Cheetah
@stop

@section('pageContent')
    <div class="container">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">About</a></li>
                <li role="presentation"><a href="#">Contact</a></li>
                <a class="navbar-brand" href="#">Source Cheetah</a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <form class="form-signin" method="post" action="<% asset('auth/login')%>">
            <%% csrf_field() %%>
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
@stop
