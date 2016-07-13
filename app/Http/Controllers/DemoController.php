<?php
namespace App\Http\Controllers;

class DemoController extends Controller {
public function test(){
		return ("demo控制器test方法");
	}

	public function __construct(){
		$this->middleware("guest");
	}	
}
	
 ?>