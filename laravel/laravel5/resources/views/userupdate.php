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
<h2>修改用户信息</h2>

<form action="addUpda?id=<?php echo $row['id']?>" method="post">
    <?php echo csrf_field()?>
    <!--    <input type="hidden" name="_token" value="--><?php //echo csrf_token();?><!--">-->

    <p><input type="text" name="username"value="<?php echo $row['username']?>"></p>
    <p><input type="text" name="password" value="<?php echo $row['password']?>"></p>
    <p> <input type="text" name="phone" value="<?php echo $row['phone']?>"></p>

    <input type="submit" value="修改">
</form>

</body>
</html>