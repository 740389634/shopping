<?php
namespace app\index\controller;

class Index
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
