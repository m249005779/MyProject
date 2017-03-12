<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace web\admin\controller;
use hdphp\route\Controller;


class Login extends Controller {
    private $db;
    public function __construct()
    {
        $this->db = new \system\model\User();
    }

    public function index(){
	    if (IS_POST){
	        if ($this->db->login()){
                //如果登陆成功
                message('操作成功',u('index.index'),'success');
            }
            //如果登陆失败
            message($this->db->getError(),'back','error');
        }
		View::make();
	}
	public function code(){
	    Code::num(1)->make();
    }
    public function out(){
        session_unset();
        session_destroy();
        go('index');
    }
    //修改密码
    public function changePass(){
        if (IS_POST){
            if ($this->db->changePass()){
                message('修改成功',u('index.php?s=admin/login/out'),'success');
            }
            //失败
            message($this->db->getError(),'back','error');
        }
        View::make();
    }
}
