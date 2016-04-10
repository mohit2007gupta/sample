@extends('layouts.master')
@section('pageLevelCss')
    <link src="static/app/css/article/main.css" rel="stylesheet">
@stop
@section('pageLevelJs')
    <script type="text/javascript" src="static/app/js/articles/main.js"></script>@stop
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
        <div class="blog-header">
            <h1 class="blog-post-title">The Bootstrap Blog</h1>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
        </div>
        <div class="row">
            <div class="col-sm-12 blog-main">
                <div class="blog-post">
                    {{content}}
                </div>
            </div>
        </div>
    </div>
@stop
