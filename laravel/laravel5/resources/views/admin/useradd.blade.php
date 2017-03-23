<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>添加用户</h2>
<form action="userData" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="username" value="">
    <input type="text" name="password" value="">
    <input type="radio" name="sex"value="0" id="se">男
    <input type="radio" name="sex" value="1" id="se">女
    <input type="file" name="pic">
    <hr>
    <input type="text" name="hobby[][name]" value="">
    <input type="text" name="hobby[][name]" value="">
    <input type="text" name="hobby[][name]" value="">
    <input type="submit" value="注册">
</form>
</body>
</html>