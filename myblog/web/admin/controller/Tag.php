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

class Tag extends Common {
    protected $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Tag();
    }
    //标签页面
    public function index(){
		$data = $this->db->getAll();
        View::with('data',$data)->make();
	}
	//添加标签功能
    public function add(){
        if (IS_POST){
            if ($this->db->store()){
                message('标签添加成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        View::make();
    }
    //标签编辑功能
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功',u('index'),'success');
            }
            message($this->db->getError(),'back','error');
        }
        //取得旧数据显示在input value中
        $tid = q('get.tid',0,'intval');
        $oldData = $this->db->where('tid',$tid)->first();
        //将数据分配到页面并显示模板
        View::with('oldData',$oldData)->make();
    }
    //删除标签
    public function del(){
        $tid = q('get.tid',0,'intval');
        $this->db->where('tid',$tid)->delete();
        message('删除成功',u('index'),'success');
    }
}
