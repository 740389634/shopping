<?php
namespace app\admin\controller;

class admin
{
    public function index()
    {
        echo "456";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
