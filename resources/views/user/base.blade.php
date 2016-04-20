<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>{!! $title !!}</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {!! HTML::style('/css/style.css') !!}
</head>
<body>
<div class="loaded">
    <div class="loaded-text">正在加载中...</div>
</div>
<nav class="nav-bar">
    <div class="nav-wrap">
        <a href="/" style="margin-left:10px;" class="nav-heading">
            {!! HTML::image('/img/icon.jpg' , null , ['style'=>'height:78%;margin-right:5px;']) !!}微课堂
        </a>
        <a href="/login" style="color:#999;" class="pull-right"><span aria-hidden="true"
                                                                      class="glyphicon glyphicon-user nav-icon"></span></a><span
                aria-hidden="true" class="glyphicon glyphicon-search pull-right nav-icon"></span></div>
</nav>
<div id="div-search" style="display:none;">
    <form class="search-form">
        <input type="text" name="keyword">
        <input type="submit" value="搜索">
    </form>
</div>
<div class="wrapper">
    @yield('content')
</div>
<footer class="container-fluid text-center footer text-muted">
    <p>底部</p>
</footer>
<script src="//cdn.bootcss.com/jquery/3.0.0-beta1/jquery.js"></script>
{!! HTML::script('/js/loaded.js') !!}
<script type="text/javascript">
    $(".glyphicon-search").click(function (event) {
        /* Act on the event */
        $("#div-search").toggle(300);
    });
</script>
@yield('script')
</body>
</html>