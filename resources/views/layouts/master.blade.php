<!doctype html>
<html>
<head>
    @yield('scriptHeader')
    <title>@yield('title')</title>
    @include('layouts._coreCss')
    @yield('pageLevelCss')
    @include('layouts._header')
    @include('layouts._coreJs')
    @yield('pageLevelJs')

</head>
<body ng-app="mainApp" ng-controller="mainController"  class="hold-transition skin-yellow sidebar-mini">

@include('layouts._navbar')
@yield('pageContent')
@include('layouts._footer')
</body>
</html>