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


class Article extends Common {
    protected $db;
    public function __construct()
    {
        $this->db = new \system\model\Article();
    }
    //文章首页
    public function index(){
        //请求模型中的getAll方法
        $data = $this->db->getAll(1);
		View::with('data',$data)->make();
	}
	//文章添加功能
    public function add(){
        if (IS_POST){
            if ($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        //所属分类数据
        $cateData = Data::tree(Db::table('category')->get(),'cname');
        //标签数据
        $tagData = Db::table('tag')->get();
        View::with('cateData',$cateData)->with('tagData',$tagData)->make();
    }
    //文章编辑功能
    public function edit(){
        $aid = q('get.aid',0,'intval');
        if (IS_POST){
            if ($this->db->edit()){
                message('编辑成功','','success');
            }
            message($this->db->getError(),'','error');

        }
        //获取旧数据
        //通过文章表和文章数据表进行关联
        $oldData = $this->db->join('article_data','aid','=','article_aid')->where('aid',$aid)->first();
//        p($oldData);
        //分配到页面
        View::with('oldData',$oldData);

        //获取所有分类数据
        //得到分类全部数据
        $cateData = Db::table('category')->get();
        //吧分类中的cname树状
        $cateData = Data::tree($cateData,'cname');
//        p($cateData);
        View::with('cateData',$cateData);
        //获取所有标签数据
        $tagData = Db::table('tag')->get();
        View::with('tagData',$tagData);
        //获取这篇文章所对应的标签
        $arcTag = Db::table('article_tag')->where('article_aid',$aid)->lists('tag_tid');
//        p($arcTag);p($tagData);
        View::with('arcTag',$arcTag);
        View::make();
    }
    //回收站
    public function recycle(){
        $data = $this->db->getAll(2);
        View::with('data',$data);
        View::make();
    }
    //删除到回收站
    public function delRecycle(){
        $aid = q('get.aid',0,'intval');
        //把is_recycle改为2就会在回收站显示
        $this->db->where('aid',$aid)->update(['is_recycle'=>2]);
        //成功提示
        message('文章删除后进入回收站，如果要彻底删除请进入回收站删除',u('index'),'success');
    }
    //从回收站删除
    public function realDel(){
        if ($this->db->del()){
            message('删除成功','','success');
        }else{
            message($this->db->getError(),'','error');
        }
    }
    //从回收站还原
    public function reduction(){
        $aid = q('get.aid',0,'intval');
        $this->db->where('aid',$aid)->update(['is_recycle'=>1]);
        message('还原成功',u('index'),'success');
    }
}
