@extends('layouts.master')

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
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy; 2015 Company, Inc.</p>
        </footer>
    </div> <!-- /container -->
@stop
