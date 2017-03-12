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


class Goods extends Common {
    protected $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Goods();
    }

    //动作
	public function index(){
	    $data = $this->db->get();
//        p($data);
        View::with('data',$data);
		View::make();
	}
	//添加
    public function store(){
        if (IS_POST){
            if($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'back','error');
        }
        //获取所有分类数据
        $cateData = Data::tree(Db::table('category')->get(),'cname');
//        p($cateData);
        View::with('cateData',$cateData);
        $brandData = Db::table('brand')->get();
//        p($cateData);
        View::with('brandData',$brandData);
        View::make();

    }
    //异步获取规格和属性
    public function ajaxGetAttr(){
        $tid = $_POST['tid'];
        $_SESSION['tid'] = $tid;
        $data = Db::table('type_attr')->where('tid',$tid)->get();
//        p($data);
        foreach ($data as $k => $v){
            $data[$k]['tavalue'] = explode("*",$v['tavalue']);
        }
        echo json_encode($data);die;
//        p($data);
    }
    //商品编辑
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        $gid = q('get.gid',0,'intval');
//        p($gid);
        $oldData = $this->db->where('gid',$gid)->first();
//        p($oldData);
        //获取所有分类数据
        $cateData = Data::tree(Db::table('category')->get(),'cname');
//        p($cateData);
        View::with('cateData',$cateData);
        //获取品牌数据
        $brandData = Db::table('brand')->get();
//        p($cateData);
        //获取分类关联数据
        $toData = Db::table('goods_attr')->join('type_attr','goods_attr.taid','=','type_attr.taid')->where('gid',$gid)->where('class',1)->get();
        foreach ($toData as $k=>$v){
            $toData[$k]['tavalue'] = explode("*",$v['tavalue']);
        }
//        p($toData);
        $poData = Db::table('goods_attr')->join('type_attr','goods_attr.taid','=','type_attr.taid')->where('gid',$gid)->where('class',2)->get();
        foreach ($poData as $k=>$v){
            $poData[$k]['tavalue'] = explode("*",$v['tavalue']);
        }
//        p($poData);
        //获取商品详情数据
        $detailData = Db::table('detail')->where('gid',$gid)->first();
        $detailData['big'] = explode(',',$detailData['big']);
//        p($detailData);
        View::with('detailData',$detailData);
        View::with('poData',$poData);
        View::with('toData',$toData);
        View::with('brandData',$brandData);
        View::with('oldData',$oldData);
        View::make();
    }
    //商品删除
    public function del(){
        $gid = q('get.gid',0,'intval');
        //删除商品详情数据
        Db::table('detail')->where('gid',$gid)->delete();
        //删除商品属性数据
        Db::table('goods_attr')->where('gid',$gid)->delete();
        //删除商品数据
        $this->db->where('gid',$gid)->delete();
        message('删除成功',u('index'),'success');
    }
}
