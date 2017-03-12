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

class Brand extends Common {
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Brand();
    }

    //动作
	public function index(){
	    $data = $this->db->get();
//        p($data);
        View::with('data',$data);
		View::make();
	}
	public function store(){
        if (IS_POST){
            if ($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'','error');
        }
	    View::make();
    }
    public function edit(){
        if (IS_POST){
           if ($this->db->edit()){
               message('修改成功','','success');
           }
           message($this->db->getError(),'','error');
        }
        //旧数据
        $bid = q('get.bid',0,'intval');
        $oldData = $this->db->where('bid',$bid)->first();
//        p($oldData);
        View::with('oldData',$oldData);
        View::make();
    }
    public function del(){
        $bid = q('get.bid',0,'intval');
        $this->db->where('bid',$bid)->delete();
        message('删除成功','','success');
    }
}
