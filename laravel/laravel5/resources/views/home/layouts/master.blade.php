<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','主模版')</title>
</head>
<body>
<h1>头部</h1>
@yield('content')
@section('main')
    <h1>我是中间部分</h1>
    @show
<h1>底部</h1>
</body>
</html>