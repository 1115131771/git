@extends('home.layouts.master')
@section('title','我是字模板')
@section('content')

    <?php
    $navs=array(
        array('name'=>'家电',url=>'1.html'),
        array('name'=>'数码',url=>'2.html'),
        array('name'=>'衣服',url=>'3.html')
    );
    ?>
    @include('layouts.nav')
 {{--   @include('nav')--}}
    <p>我是子模板</p>
@endsection
@section('main')
    @parent
    <p>main</p>
    @endsection

