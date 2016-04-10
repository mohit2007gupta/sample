@extends('layouts.master')
@section('pageLevelCss')
    <link src="<% asset('static/app/css/article/main.css') %>" rel="stylesheet">
@stop
@section('pageLevelJs')
    <script type="text/javascript" src="<% asset('static/app/js/articles/main.js') %>"></script>@stop
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
    <div class="col-md-4"></div>

@stop
