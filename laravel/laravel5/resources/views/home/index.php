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
<h1>视图渲染</h1>
<h2>这是前台首<?php echo $name?></h2>
<h2>年龄---<?php echo $age?></h2>
<?php foreach($stus as $stu):?>
<p>姓名<?php echo $stu->name?>年龄<?php echo $stu->age?>性别<?php echo $stu->sex?></p>
<?php endforeach;?>
<p>数据共享</p>
<p><?php echo $admin;?></>
<h2>视图</h2>
<?php foreach($nav as $n):?>
    <a href="<?php echo $n['url'];?>"><?php echo $n['name']?></a>
<?php endforeach;?>
</body>
</html>