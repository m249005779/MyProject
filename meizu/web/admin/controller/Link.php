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

class Link extends Common{
    //动作
	protected $db;
	public function __construct()
	{
		parent::__construct();
		$this->db = new \system\model\Link();
	}

	public function index(){
		//此处书写代码...
		$data = $this->db->getAll();
		View::with('data',$data)->make();
	}
	//添加
	public function add()
	{
		if (IS_POST)
		{
			if ($this->db->store())
			{
				message('操作成功',u('index'),'success');
			}
			message($this->db->getError(),'back','error');
		}
		View::make();

	}
	//编辑
	public function edit()
	{
		$lid = q('get.lid',0,'intval');
		if(IS_POST)
		{
			if($this->db->edit())
			{
				message('编辑成功','','success');
			}
			message($this->db->getError(),'','error');
		}
		//1.获取旧数据
		$oldData = $this->db->where('lid',$lid)->first();
		View::with('oldData',$oldData);
		View::make();
	}
	public function del()
	{
		$lid = q('get.lid',0,'intval');
		$this->db->where('lid',$lid)->delete();
		message('操作成功',u('index'),'success');
	}
}
