<?php namespace web\home\controller;


/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

class Entry extends Common {
	//首页
	public function index() {
	    $conf = ['title'=>'孟令悦个人博客'];
        View::with('conf',$conf);
        //文章数据
        $page = Page::row(7)->make(Db::table('article')->where('is_recycle',1)->count());
        $articleData = Db::table('article')->join('category','category_cid','=','cid')->where('is_recycle',1)->limit(Page::limit())->get();
        foreach ($articleData as $k=>$v){
            $articleData[$k]['tag'] = Db::table('article_tag')->join('tag','tag_tid','=','tid')->where('article_aid',$v['aid'])->field(['tid','tname'])->get();
        }
        //轮播图数据
        $lunDate = Db::table('article')->OrderBy('sendtime','desc')->where('is_recycle',1)->limit(4)->get(['aid','thumb','digest','title']);

//        p($lunDate);
        View::with('lunDate',$lunDate);
        View::with('page',$page);
        View::with('articleData',$articleData);
        View::make();
	}
}