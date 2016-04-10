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
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Source Cheetah</a>
            </div>
        </div>
    </nav>
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

@stop
