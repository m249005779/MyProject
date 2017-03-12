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

class Category extends Common {
    private $db;
    private $typeDb;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Category();
        $this->typeDb = new \system\model\Type();
    }
    //首页
    public function index(){
        $data = Data::tree($this->db->get(),'cname');
//        p($data);
        View::with('data',$data);
		View::make();
	}
	//添加
    public function store(){
//        $typeData = $this->typeDb->get();
//        p($typeData);
//        View::with('typeData',$typeData);
        if (IS_POST){
            if ($this->db->store()){
                message('添加成功','','success');
            }
            message('添加失败','','error');
        }
        View::make();
    }
    //编辑
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        $cid = q('get.cid',0,'intval');
        //旧数据
        $oldData = $this->db->where('cid',$cid)->first();
//        p($oldData);
        $cateData = $this->db->getCateData($cid);
        $typeData = $this->typeDb->get();
        View::with('oldData',$oldData);
        View::with('cateData',$cateData);
        View::with('typeData',$typeData);
        View::make();
    }
    //添加子集
    public function addSon(){
        $cid = q('get.cid',0,'intval');
        $typeData = $this->typeDb->get();
//        p($typeData);
        if (IS_POST){
            if ($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'','success');
        }
        View::with('typeData',$typeData);
        View::make();
    }
    //删除
    public function del(){
        $cid = q('get.cid',0,'intval');
        //查询单条
        $pid = $this->db->where('cid',$cid)->pluck('pid');
        //让子集上位
        $this->db->where('pid',$cid)->update(['pid'=>$pid]);
        //删除当前cid的数据
        $this->db->where('cid',$cid)->delete();
        message('删除成功',u('index'),'success');
    }
}
