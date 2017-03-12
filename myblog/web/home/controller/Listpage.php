<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace web\home\controller;

class Listpage extends Common {
    //动作
	public function index(){
	    $conf = ['title'=>'孟令悦博客-列表'];
        View::with('conf',$conf);
        $cid = q('get.cid',0,'intval');
        $tid = q('get.tid',0,'intval');
        if($tid){
            $headData = [
                'type'=>'标签',
                'name'=>Db::table('tag')->where('tid',$tid)->pluck('tname'),
                'total'=>Db::table('article_tag')->join('article','article_aid','=','aid')->where('tag_tid',$tid)->where('is_recycle',1)->count(),
            ];
            $articleData = Db::table('article_tag')->join('article','article_aid','=','aid')->where('tag_tid',$tid)->where('is_recycle',1)->get();
            foreach ($articleData as $k=>$v){
                $articleData[$k]['tag'] = Db::table('article_tag')->join('tag','tag_tid','=','tid')->where('article_aid',$v['aid'])->field(['tid','tname'])->get();
            }
        }
//        p($articleData);
        if($cid){
            //递归找子集
            $categoryModel = new \system\model\Category();
            $cids=$categoryModel->getSon($categoryModel->get(),$cid);
            //追加自己
            $cids[] = $cid;
            $headData = [
                'type'=>'分类',
                'name'=>Db::table('category')->where('cid',$cid)->pluck('cname'),
                'total'=>Db::table('article')->whereIn('category_cid',$cids)->where('is_recycle',1)->count(),
            ];
            $articleData = Db::table('article')->join('category','category_cid','=','cid')->where('is_recycle',1)->whereIn('category_cid',$cids)->get();
            foreach ($articleData as $k=>$v){
                $articleData[$k]['tag'] = Db::table('article_tag')->join('tag','tag_tid','=','tid')->where('article_aid',$v['aid'])->field(['tid','tname'])->get();
            }
        }
//        p($articleData);
        View::with('headData',$headData);
        View::with('articleData',$articleData);
		View::make();

	}
}
