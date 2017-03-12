<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace web\home\controller;

use hdphp\route\Controller;

class Login extends Controller {
    private $db;
    public function __construct()
    {
        $this->db = new \system\model\User();
    }

    //动作
	public function index(){
	    if (IS_POST){
	        if ($this->db->login()){
	            message('登陆成功',u('entry.index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        View::make();
	}
	public function register(){
	    if (IS_POST){
            if($this->db->register()){
                message('注册成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
	    View::make();
    }
    public function code(){
        Code::num(1)->make();
    }
    //退出
    public function out(){
        session_unset();
        session_destroy();
        go('entry.index');
    }
}
