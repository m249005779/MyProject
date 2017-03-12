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


class Link extends Common {
    protected $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Link;
    }

    public function index(){
        $data = $this->db->get();
        View::with('data',$data)->make();
	}
	//添加链接
	public function add(){
	    if (IS_POST){
	        if ($this->db->store()){
	            message('添加成功','','success');
            }
            message($this->db->getError(),'','error');
        }
	    View::make();
    }
    //编辑链接
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        //获取旧数据
        $lid = q('get.lid',0,'intval');
        $oldData = $this->db->where('lid',$lid)->first();
        View::with('oldData',$oldData)->make();
    }
    //删除
    public function del(){
        $lid = q('get.lid',0,'intval');
        $this->db->where('lid',$lid)->delete();
        message('删除成功',u('index'),'success');
    }
}
