<?php
namespace app\index\controller;
use think\Db;
class Index
{
    public function index()
    {
        $sql=Db::table('user')->select();
        var_dump($sql);
    }

    
}
