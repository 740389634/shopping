<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Login extends Controller
{
	//登录
    public function index()
    {

        return view('login');
    }
   	//注册
    public function register(){
    	return view('register');
    }
    //忘记密码
    public function forgetPassword(){
    	return view('forgetPassword');
    }
}
