<?php 

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
use Hash;
use Session;



class LoginController extends Controller
{
	public function login(Request $request){
		 
		
		// $tAddTime=date("Y-m-d H:i:s",time());
		// $tUpdateTime=date("Y-m-d H:i:s",time());

		// if($users){
		
		return view("Public.login");
		
	}


	// 用户登录
public function login_form(Request $request){
	//   $value = $request->session()->get('username');
	// 	   echo $value;
	// exit;
 return  $request->session()->get('username');

		$username= $request->username;
		$pass= $request->strPassword;
		$pass=md5("oa_cd".$pass);


		dump($username);
		dump($pass);
		exit;
		// $tAddTime=date("Y-m-d H:i:s",time());
		// $tUpdateTime=date("Y-m-d H:i:s",time());


		$username= $request->username;
		$pass= $request->pass;
		$pass=md5("oa_cd".$pass);


 // $users = DB::select('select * from oa_admin where strAdminName = ?', [$username,$pass]);

		 // $goodsShow = Login::where(['strAdminName'=>$username,'name'=>$pass])->first();

		 // DB::table('oa_admin')
   //          ->where('id', 1)
   //          ->update(['votes' => 1]);

		
			$user1 = DB::select('select * from oa_admin where strAdminName = '.$username." strPassword =".$pass);
			var_dump($user1);
	}

	public function reg(Request $request){
		$username= $request->username;
		$pass= $request->pass;
		$pass=md5("oa_cd".$pass);

		if(empty($pass)||empty($username)){
			return "用户名和密码不能为空";
			exit;
		}	

		$pass=md5("oa_cd".$pass);
		$tAddTime=date("Y-m-d H:i:s",time());
		$tUpdateTime=date("Y-m-d H:i:s",time());
		 $users = DB::select('select * from oa_admin where strAdminName = ?', [$username]);
		if($users){
			echo "用户名存在";
			exit;
		}else{
			// $user1 = DB::select('select * from oa_admin where strAdminName >= '.$name." ");
				 $res=  DB::insert('insert into oa_admin (strAdminName,strPassword,tAddTime,tUpdateTime) values (?,?,?,?)',[$username,$pass,$tAddTime,$tUpdateTime]);  //成功返回1
				 Session::put('username', $username);  
				 echo $username."用户注册成功";
				return redirect('login');

				 // return $res;
				 // if($res){
				 // }
		}
		
	}
}
 ?>