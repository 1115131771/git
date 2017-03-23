<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade模版</title>
</head>
<body>
<p><?php echo $name?></p>
<p><?php echo date('Y-m-d H:i:s',time())?></p>
<p>{!! $name !!}</p>
<p>@{{ $name }}</p>
<p>@{{ nam }}</p>
<p>@{{ $name }}</p>
@verbatim
<p>{{ $name }}</p>
<p>{{ nam }}</p>
<p>{{ $name }}</p>
<p>{{ $name }}</p>
<p>{{ nam }}</p>
<p>{{ $name }}</p>
@endverbatim
@if($score>80)
    <p>成绩优秀</p>
    @elseif($score>70)
    <p>成绩良好</p>
    @elseif($score>60)
    <p>及格</p>
    @else
    <p>不及格</p>
@endif
@for($i=1;$i<5;$i++)
    @continue($i==3)
    <p>这是{{$i}}</p>
    @endfor
@while ($i<10)
    @break($i==7)
    <p>这是{{$i++}}</p>
    @endwhile;
<?php
    $stus=array(
        array('name'=>'刘备','age'=>30,'sex'=>'男'),
        array('name'=>'关羽','age'=>30,'sex'=>'男'),
        array('name'=>'张飞','age'=>30,'sex'=>'男'),
    );
   // $stus=array();
?>
@foreach($stus as $stu)
    <p>{{$stu['name']}}--{{$stu['age']}}---{{$stu['sex']}}</p>
    @endforeach
@unless($score>90)
    <p>小于90</p>
    @endunless
@forelse($stus as $stu)
    <p>{{$stu['name']}}--{{$stu['age']}}---{{$stu['sex']}}</p>
    @empty()
    <h2>数据为空</h2>
    @endforelse
<?php
$num=array('one','two','three','four')
?>
@foreach($num as $v)
    <p>{{$loop->index}}--{{$loop->iteration}}</p>
    @endforeach
</body>
</html>