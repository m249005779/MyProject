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

class Typeattr extends Common {
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Typeattr();
    }

    //动作
	public function index(){
	    $tid = q('get.tid',0,'intval');
//        p($tid);
        $res = $this->db->getAll($tid);
//        p($res);
        View::with('res',$res);
        View::make();
	}
	//添加属性
	public function store(){
        if (IS_POST){
            if ($this->db->store()){
                message('添加成功','','success');
            }
            message('添加失败','','error');
        }
	    View::make();
    }
    //修改属性
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功','success');
            }
            message('修改失败','error');
        }
        $taid = q('get.taid',0,'intval');
//        p($taid);
        //获得旧数据
        $oldData = $this->db->where('taid',$taid)->first();
//        p($oldData);
        View::with('oldData',$oldData);
        View::make();
    }
    //删除
    public function del(){
        $taid = q('get.taid',0,'intval');
        $tid = q('get.tid',0,'intval');
        $this->db->where('taid',$taid)->delete();
        message('删除成功','','success');
    }
}
