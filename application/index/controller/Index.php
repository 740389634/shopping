<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    //首页
    public function index()
    {
        return view('index');
    }
    //生活
    public function life(){
        return view('life');
    }
    //个人中心
    public function Submission(){
        return view('Submission');
    }
    //分类
    public function classtype(){
        return view('class_type');
    }
    //购物车
    public function choppingCat(){
        return view('shopping_cat');
    }
    //结算
    public function Settlement(){
        return view('Settlement');
    }
    //收货地址
    public function address(){
        return view('address');
    }
    //编辑地址
    public function editaddress(){
        return view('editaddress');
    }
    //钱包
    public function wallet(){
        return view('wallet');
    }
    //收藏
    public function Collection(){
        return view('Collection');
    }
    //待付款
    public function payment(){
        return view('payment');
    }
    //待收货
    public function received(){
        return view('received');
    }
    //全部订单
    public function Order(){
        return view('Order');
    }
}
