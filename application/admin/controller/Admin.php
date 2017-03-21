<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/20
 * Time: 17:13
 */
namespace app\admin\controller;

use think\Config;

class Admin
{
    public function index(){
        echo Config::get('value');
    }


}