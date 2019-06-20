<?php
namespace app\index\controller;
use think\Db;
class Index
{
    public function index()
    {
    	echo "123";
        $sql=Db::table('user')->select();
        
        var_dump($sql);
    }

    
}
