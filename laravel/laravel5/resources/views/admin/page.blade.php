<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('dist/css/bootstrap.css')}}">
</head>
<body>

<table width="400" align="center">
    <tr >
        <th>ID</th>
        <th>姓名</th>
        <th>地址</th>
        <th>手机号</th>
    </tr>
    @foreach ($adds as $add)
    <tr>
        <td>{{$add->id}}</td>
        <td>{{$add->username}}</td>
        <td>{{$add->address}}</td>
        <td>{{$add->phone}}</td>
    </tr>
    @endforeach;

</table>
<div align="center">
    {{$add->links()}}
</div>
</body>
</html>

