<html>
<head>
    <title>{{trans('page.title')}} |
        @yield('title')
    </title>
</head>
<bod>
    <h3>{{trans('page.area.header')}}</h3>
    <hr>
    @yield('contain')
    <hr>
    <h3>{{trans('page.area.footer')}}</h3>
</bod>
</html>
