<?php
namespace app\index\controller;
use think\Db;
use think\captcha\Captcha;
class Login
{
    public function index()
    {

       return view('login');
    }
    public function actionLogin(){

    	$name=input('get.name');
    	$password=input('get.password');
    	$code=input('get.code');
    	$captcha = new \think\captcha\Captcha();
    	if( !$captcha->check($code)){
    		$arr=['code'=>'1','status'=>'error','message'=>'验证码错误'];
    	}else{
    		$where=['name'=>$name,'password'=>$password];
    		$sql=Db::table('user')->where($where)->find();
    		if (empty($sql)) {
    			$arr=['code'=>'2','status'=>'error','message'=>'账号或密码错误'];
    		}else{
    			$arr=['code'=>'0','status'=>'ok','message'=>'登录成功'];
    		}
    	}
    	$json=json_encode($arr);
    	echo $json;
		
    }
    
}
