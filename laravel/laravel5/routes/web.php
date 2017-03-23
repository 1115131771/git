<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('user',function (){
echo '用户列表';
});
Route::get('user/list',function (){
    return view('list');
});/*
Route::get('foo',function (){
   return 'foo-get';
});*/
/*Route::post('foo',function (){
    return 'foo-post';
});*/
/*Route::put('foo',function(){
    return 'foo-put';
});*/
/*Route::patch('foo',function (){
    return 'foo-path';
});*/
/*Route::options('foo',function(){
    return 'foo-option';
});*/
/*Route::match(['get','post'],'foo',function(){
    return csrf_field();
    return 'foo-match';
});*/
/*Route::any('foo',function (){
    return csrf_field();
   return 'foo';
});*/
/*Route::get('foo/{name}/id/{id}',function($name,$id){
    return 'id--'.$id.'name--'.$name;
})*/
/*Route::get('foo/{id?}',function ($id=null){
   return 'id='.$id;
});*/
/*Route::get('admin/user/del/10',function(){
    return '删除';
});
Route::get('del',function(){
    return redirect('admin/user/del/10');
});*/
/*Route::get('admin/user/del/10',function(){
   return '删除';
})->name('del');
Route::get('todel',function(){
    //$url=route('del');
    return redirect()->route('del');
});

Route::match (['get','post'],'userlist',function(){
    $link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'sh59_shop');
    mysqli_set_charset($link,'utf8');
    $sql="select * from user";
    $result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    //var_dump($rows);
    return view('./userlist',['rows'=>$rows]);
})->name('asd');
Route::get('user/addForm',function(){
   return view('useradd');
});*/
/*Route::post('userlist',function(){
    return $_POST;
//    return redirect()->route('asd');
});*/
/*Route::post('user/addData',function(){
    $name=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'sh59_shop');
    mysqli_set_charset($link,'utf8');
    $sql="insert into user(username,password,phone)values('{$name}','{$password}','{$phone}')";
//echo $sql;
    $result=mysqli_query($link,$sql);
    return  redirect('userlist');
});
Route::get('user/addDel',function(){
    $id=$_GET['id'];
    $link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'sh59_shop');
    mysqli_set_charset($link,'utf8');
    $sql="delete from user where id='{$id}'";
    $result=mysqli_query($link,$sql);
    return  redirect('\userlist');
});
Route::get('user/addUpdate',function(){
    $id=$_GET['id'];
    $link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'sh59_shop');
    mysqli_set_charset($link,'utf8');
    $sql="select * from user where id='{$id}' ";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);

   //var_dump($row);
   return view('userupdate',['row'=>$row]);
});
Route::post('user/addUpda',function(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $id=$_GET['id'];
    $link=mysqli_connect('localhost','root','');
    mysqli_select_db($link,'sh59_shop');
    mysqli_set_charset($link,'utf8');
    $sql="update  user set username='{$username}',password='{$password}',phone='{$phone}' where id='{$id}'";
    $result=mysqli_query($link,$sql);
  /*  echo $sql;die;*/
   //return redirect('userlist');
//});*/
/*Route::get('index',function(){
 if (view()->exists('login')){
     return view('login');
 } else{
     return 'login不存在';
 }
});*/
/*Route::get('index',function (){
    $name='刘备';

    $age=30;
   return view('home.index',['name'=>$name,'age'=>$age]);
});*/
Route::get('index',function(){
    $name='刘备';
    $age=30;
    $stus=(object)array(
        (object) array('name'=>'刘备','age'=>'30','sex'=>'男'),
        (object) array('name'=>'关羽','age'=>'29','sex'=>'男'),
        (object) array('name'=>'张飞','age'=>'28','sex'=>'男'),
    );
  return view('home.index',compact('name','age','stus'));
  //return view('home.index')->with('name',$name)->with('age',$age);
});
Route::get('order',function(){
    return view('order');
});
Route::get('cart',function (){
    return view('cart');
});
//请求blade模版
Route::get('web/index',function (){

    $name='hello <span style="color:red">wo</span>rld';
    return view('index')->with('name',$name)->with('score',50);
});
Route::get('master' ,function (){
   return  view('home.layouts.master');
});

Route::get('child',function (){
    return view('home.child');
});
Route::get('admin/index','IndexController@index');
Route::get('admin/goods/index',function (){
    return view('admin/goods/index');
});
Route::group(['prefix'=>'admin' ],function (){
    Route::get('useradd','IndexController@add');
    Route::post('userData','IndexController@data');
    Route::get('userdel','IndexController@del');
    Route::get('getsession','IndexController@getsession');
    Route::get('setsession','IndexController@setsession');
});
Route::group(['prefix'=>'admin' ],function () {
    Route::any('login','IndexController@login');
   Route::get('index','IndexController@index')->middleware('admin.log');

    });
Route::get('admin/sql','IndexController@sql');
Route::get('admin/page','IndexController@page');


