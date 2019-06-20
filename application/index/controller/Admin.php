<?php
namespace app\index\controller;

class Admin
{
    public function index()
    {
        echo "678";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
