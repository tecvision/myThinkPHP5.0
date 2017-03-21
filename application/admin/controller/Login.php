<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/3/21
 * Time: 17:13
 * 登录控制器
 */

namespace app\admin\controller;


use think\Session;

class Login
{
    /**
     * 后台登录首页
     * @return \think\response\View
     */
    public function index(){
        if(Session::has('userinfo', 'admin')) {
            $this->redirect( url('admin/index/index') );
        }
        return view();
    }

}