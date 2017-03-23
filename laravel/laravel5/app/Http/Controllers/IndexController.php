<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller{
    //public function index(){
      //  return  view('admin.index');
   // }
    public function add(Request $request){
        return view ('admin.useradd');

    }
    public function data(Request $request){
       //dump($_POST);
      // $name=$request->input('team','sh59');
       //name=$request->input('hobby.*.name');
       //dump($request->all());
        //dd($request->pic->storeAs('images','123.jpg'));
        dd($request->hasFile('pic'));

    }
    public function del(Request $request){
        return view ('admin.userdel');
    }
    public function getsession(Request $request){
        $request->session()->put(['team'=>['name','sex']]);
        $request->session()->push('team','age');
        session(['name'=>'刘备','age'=>30,'sex'=>'男']);
        return '设置';
    }
    public function setsession(Request $request){

        //$request->session()->get('user','关于');
        //dd($request->session()->get('user'));
        $request->session()->forget('name');
        dd($request->session()->all());
    }
    public function login(Request $request){
        if ($request->isMethod('post')){
            //获取数据
            $username=$request->input('username');
            $password=$request->input('password');
           // dump($username);
            $link=mysqli_connect('localhost','root','');
            mysqli_select_db($link,'sh59_shop');
            mysqli_set_charset($link,'utf8');
            $sql="select * from user where username='{$username}'and password='{$password}'";
           // echo $sql;
            $result=mysqli_query($link,$sql);
            $user=mysqli_fetch_assoc($result);
            //dump($user);
            $request->session()->put('user',$user);

        }
        return view('admin.login');
    }
    public function index(Request $request){
      /* if (!$request->session()->get('user')){
           return redirect('admin/login');
       }
       else{
            return view('admin.index');
       }*/

       //if ($request->session()->user())
    return view('admin.index');
    }
   public  function userlist(){
       return view('admin.userlist');
    }
    public function sql(){
       //$restule=DB::select('select * from user where id=?',[3]);
      // $data=['zzz','123'];
       // $restule=DB::insert("insert into user(username,password)values(?,?)",$data);
       $data=[
         'name'=>'z12345',
        'id'=>50
       ];
       //$restule=DB::update("update user set username=:name where id=:id",$data);
        //$result=DB::delete("delete from user where id=?",[50]);
        //dd($result);
        //$result=DB::table('user')->where('id',1)->value('username');
        //$result=DB::table('user')->pluck('username','id');
       // foreach ($result as $stu)
       // $result=DB::table('user')->count();
       // $result=DB::table('user')->max('id');
        //$result=DB::table('user')->min('id');
       // $result=DB::table('user')->avg('id');
       // $result=DB::table('user')->select('username','phone')->get();
       // $result=DB::table('user')->select('username as name','phone')->get();
        //$result=DB::table('user')->select(DB::Raw("count (*) as num,phone"))->groupBy('phone')->get();
           // var_dump($stu->username);
      /*  $result=DB::table('user')
            ->where('id','<>','1')
            ->get();*/
       /* $result=DB::table('user')
            ->where('id','>','11')
            ->where('jifen','>','2')
            ->get();*/
    /*   $result=DB::table('user')
           ->when(false,function (){
               return  $query->whereIn('id',[1,2,3]);
           })->get();*/
 /*   $result=DB::table('user')
        ->insertGetId([
            'username'=>'111',
            'password'=>'222',
            'email'=>'333'
        ]);*/
/* $result=DB::table('user')
     ->where('id','1')
     ->update([
             'username'=>'菲菲'
     ]

     );*/
/*$result=DB::table('user')
    ->where('id',1)
    //->increment('jifen',10)
->decrement('jifen',20);*/
/*$result=DB::table('user')
    ->where ('id','>','50')
    ->delete();
        dd($result);*/
$result=DB::table('address')->paginate(4);
return view('admin.page',['add'=>$result]);
    }
    public function page(){
        $result=DB::table('address')->paginate(4);
        return view('admin.page',['add'=>$result]);
        //dd($result);
    }


}