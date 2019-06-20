<?php
namespace app\index\controller;
use think\Db;
class Admin
{
    public function index()
    {
        $sql=Db::table('user')->select();
        var_dump($sql);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
