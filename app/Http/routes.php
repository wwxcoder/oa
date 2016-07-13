<?php


use App\Demo;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{id}', 'TestController@index') ;
// Route::get('/Test', 'TestController@test1') ;
// Route::get('/', 'DemoController@test') ;


// Route::get("get",function(){
// 	return "get请求";
// });

// Route::post("post",function(){
// 	return "post请求";
// });
// Route::any("any",function(){
// 	return "any请求,不敏感";
// });


// Route::get('{number}',function($number){
// 	return view("home".$number);
// });

// Route::get("/",function(){
// 	$name=DB::connection()->getDatabaseName();
// 	echo $name;
// });



Route::get('user1/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('test12', function () {
    return Demo::all();
});




// Route::any('test', function () {
// 	// return Request::input('user').md5(Request::input('pass'));

// 	// return Request::has("user1");
// 	// return Request::exists("user1");
// 	// return Request::query("user1","默认值");
// 	// return Request::only("user,age");
// 	// return Request::except("user,age");

// 	// return Request::url();
// 	$res=Request::file();
// 	dump(Request::input("user"));
// 	dump(Request::input("pass"));
// 	$res1=get_object_vars($res['file']);
// 	var_dump($res1);
// 	// var_dump($res['file']->get()->toArray());

// 	// return Request::all();
// });

Route::any('test', 'TestController@test2');


Route::get('form', function () {
	return view("Public.form");
	// return Request::all();
});
Route::any('index', 'IndexController@index');

Route::get('reg', function () {
	return view("Public.reg");
	// return Request::all();
});


Route::any('login', 'Common\LoginController@login'); 
Route::any('reg_sent', 'Common\LoginController@reg');
Route::any('login_form', 'Common\LoginController@login_form'); //用户登录


// URL::action('HomeController@index');

Route::group(['middleware' => ['web']], function () {
    //
});
