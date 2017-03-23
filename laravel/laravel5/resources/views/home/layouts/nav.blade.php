{{--<a href="">首页</a>
<a href="">家电</a>
<a href="">数码</a>--}}
@foreach ($navs as $na)
    <a href=" {{$navs['url']}}">{{$navs['name']}}</a>
    @endforeach
