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
<form action="addData" method="post">
    <?php echo csrf_field()?>
<!--    <input type="hidden" name="_token" value="--><?php //echo csrf_token();?><!--">-->
   <p><input type="text" name="username"value=""></p>
    <p><input type="password" name="password" value=""></p>
    <p> <input type="text" name="phone" value=""></p>
    <input type="submit" value="添加">
</form>
</body>
</html>