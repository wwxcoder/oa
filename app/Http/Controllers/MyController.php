<?php
namespace App\Http\Controllers;

class MyController extends Controller {
public function index(){
		return view("welcome");
	}

	public function __construct(){
		$this->middleware("guest");
	}	
}
	
 ?>