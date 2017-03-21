<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/20
 * Time: 17:13
 */
namespace app\admin\controller;


use think\Controller;
use think\Session;


class Admin extends Controller
{
    function _initialize(){
        if( !Session::has('userinfo', 'admin') ) {
            $this->error('请先登录！', url('admin/Login/index'));
        }
        $userRow = Session::get('userinfo', 'admin');
    }

}