
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
<caption><h2 align="center">用户信息</h2></caption>
<caption ><h2  align="center"><a href="user/addForm" >添加用户</a></h2></caption>
<table width="500" cellspacing="0" cellpadding="0" border="1" align="center">

    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>密码</th>
        <th>手机号</th>
        <th>操作</th>
    </tr>
    <?php foreach($rows as $v): ?>
    <tr>
        <td><?php echo $v['id'];?></td>
        <td><?php echo $v['username'];?></td>
        <td><?php echo $v['password'];?></td>
        <td><?php echo $v['phone'];?></td>
        <td><a href="user/addUpdate?id=<?php echo $v['id']?>"> 修改</a>｜<a href="user/addDel?id=<?php echo $v['id']?>">删除</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>