<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    //註冊
    public function doRegister(Request $request){


    	//驗證資料
    	$validateConditions = [
    			'name'=>'required|max:20',
    			'account'=>'required|unique:members,account',
    			'password'=>'required'
    		];
    	$this->validate($request,$validateConditions);


    	//登陸資料庫
    	$member = new Member();
    	$member->name = $request->name;
    	$member->account = $request->account;
    	$member->password = Hash::make($request->password);
    	$member->save();

    	//回傳處理
    	return response()->json(['message'=>'註冊成功'],200);

    }

    //登入
    public function doLogin(Request $request){

    	//驗證資料
    	$validateConditions = [
    			'account'=>'required',
    			'password'=>'required'
    		];
    	$this->validate($request,$validateConditions);


    	//作登入的動作
    	$userData = array(
				'account'=> $request['account'],
    			'password'=>$request['password']
    		);

    	if(Auth::attempt($userData)){
    		return response()->json(['message'=>'登入成功'],200);
    	}else{
    		return response()->json(['message'=>'帳號密碼不正確！'.$request['account'].":".$request['password']],422);

    	}
    	//回傳處理
    	return response()->json(['message'=>'登入成功'],200);

    }
}
