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


class Goodslist extends Common {
    protected $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Goodslist();
    }

    //动作
	public function index(){
        $gid = q('get.gid',0,'intval');
	    if (IS_POST){
	        if ($this->db->store()){
	            message('添加成功',u('index',['gid'=>$gid]),'success');
            }
            message($this->db->getError(),'back','error');
        }

        $tid = Db::table('goods')->where('gid',$gid)->pluck('tid');
//        p($tid);
        $data = Db::table('goods_attr')->join('type_attr','goods_attr.taid','=','type_attr.taid')->where('gid',$gid)->where('tid',$tid)->where('class',2)->get();
//        p($data);
        $tData = [];
        foreach ($data as $k=>$v){
            $tData[$v['taname']][$v['gtid']] = $v['gtvalue'];
        }
//        p($tData);
        $listData = $this->db->where('gid',$gid)->get();
        foreach ($listData as $k=>$v){
            $listData[$k]['gtvalue'] = explode(',',$listData[$k]['combine']);
//            $listData[$k]['combine'] = explode(',',$listData[$k]['combine']);
            foreach ($listData[$k]['gtvalue'] as $key=>$value){
                $listData[$k]['gtvalue'][$key] = Db::table('goods_attr')->where('gtid',$value)->pluck('gtvalue');
            }
        }
//        p($listData);
        View::with('listData',$listData);
        View::with('tData',$tData);
		View::make();
	}
	public function ajaxData(){

        $data1 =rtrim($_POST['data'],',');
        $gid = dirname($data1);
        $data2 = basename($data1);
        $data = $this->db->where('gid',$gid)->lists('combine');

//        p($data);
        if (in_array($data2,$data)){
            message('商品重复','','error');
        }
        return false;
    }
    public function del(){
        $glid = q('get.glid',0,'intval');
        $this->db->where('glid',$glid)->delete();
        message('删除成功',"",'success');
    }
}
