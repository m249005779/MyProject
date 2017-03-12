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



class Webset extends Common {
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Webset();
    }

    public function index(){

        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功',u('index'),'success');
            }
            message('操作失败','back','error');
        }
		$data = $this->db->get();
        View::with('data',$data)->make();
	}
}
