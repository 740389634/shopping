<?php
namespace app\admin\controller;
use think\Db;
use gmars\rbac\Rbac;
class Admin extends Common
{
    public function show()
    {
    	return view('show');
       
    }
    public function rbac(){
    	$rbac = new Rbac();
    	$rbac->createTable();
    }
}