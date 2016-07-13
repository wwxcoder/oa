<?php
namespace App\Http\Controllers;

class UserController extends Controller {
	public function index(){
		return __FUNCTION__;
	}

	

	public function test(){

		// $data=array(
		// 'name'=>'zhangsan',
		// 'age'=>20111,
		// );
		// return view("Public/demo",$data);

		// return view("Public/demo")->with("name","后台传的数据");

		$name=null;
		$people=[
		'语文',
		'历史',
		'数学'
		];
		// return view("Public/demo",compact('name'));
		return view("Public/demo",compact('people'));
		// return view("Public/demo")->with('name',"zhangsan");
	}
}
	
 ?>