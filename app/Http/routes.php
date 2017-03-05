<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});



//註冊
Route::get('/register', function () {
    return view('pages.register');
});
//處理註冊請求
Route::post('/register',[
	"uses"=>"MemberController@doRegister",
	"as"=>"register"
	]);

//登入

Route::group(['prefix'=>'login'],function(){
	Route::get('/',function(){
    	return view('pages.login');
	});

	//處理註冊請求
	Route::post('/login',[
		"uses"=>"MemberController@doLogin",
		"as"=>"login"
		]);
});

//登入
Route::get('/login', function () {
    return view('pages.login');
});


