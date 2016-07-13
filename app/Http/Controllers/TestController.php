<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Common\CommonController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{
	
	public function index(Request $request)
	{
		if(!session("name")){
			return view("Public.login");
		}else{
			return view("Index.index");
		}
	$user=$request->username;
	// $pass=Hash::make($request->pass);
	return $user;
 	 $res=  DB::insert('insert into oa_admin (name,pass) values (?,?)',$user,$pass);  //成功返回1
 	 return $res;
 	 if($res){
 	 	return view("/index");
 	 }else{
 	 	return view("/login");
 	 }
    // $user1 = DB::select('select * from oa_admin where inAdminId >= 1');
    // var_dump($user1);
	// $id=2;
	// // $user = DB::select('select * from user where id = :id', [':id'=>$id]);
	// // dd($user1); 
	// // $affected = DB::update('update tb_user set name="LaravelAcademy" where name = ?', ['Laravel']);
	// // echo $affected;   //返回受影响行数
	// $deleted = DB::delete('delete from tb_user where name=?',['10']);
	// echo $deleted;  //成功返回1
	// DB::statement('drop table tb_user');
		return view("Public.login");
	}

	public function test2(Request $request){
		// $pass=Request::input("pass");
		// $user=$request->user;
		// $pass=md5($request->pass);
		// $stime=date("Y-m-d H:i:s",time());
		// $utime=date("Y-m-d H:i:s",time());

		 // $res=  DB::insert('insert into oa_admin (strAdminName,strPassword,tAddTime,tUpdateTime) values (?,?,?,?)',[$user,$pass,$stime,$utime]);  //成功返回1
		// echo "表单提交成功".$res;
		$user1 = DB::select('select * from oa_admin');
		// dd($user1);
		// var_dump($user1);
		// exit;

		// $user1=[
		// 		'name'=>'zhangsan',
		// 		'age'=>20
		// 		];
		$a=[
		'语文',
		'历史',
		'数学'
		];
		return view("Public.test1",compact('user1'));

	}
}
?>