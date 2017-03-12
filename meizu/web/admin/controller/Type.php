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

class Type extends Common{
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Type();
    }

    //动作
	public function index(){
	    $re = $this->db->getAll();
        View::with('re',$re);
		View::make();
	}
	public function store(){
	    if (IS_POST){
	        if (!$this->db->store()){
	            message($this->db->getError(),'back','error');
            }
            message('添加成功',u('index'),'success');
        }
	    View::make();
    }
    //类型编辑
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功',u('index'),'success');
            }
            message($this->db->getError(),'back','error');
        }
        //获得旧数据
        $tid = q('get.tid',0,'intval');
        $oldData = $this->db->where('tid',$tid)->first();
        //分配数据
        View::with('oldData',$oldData);
        View::make();
    }
    //删除
    public function del(){
        $tid = q('get.tid',0,'intval');
        $this->db->where('tid',$tid)->delete();
        message('删除成功',u('index'),'success');
    }
}
