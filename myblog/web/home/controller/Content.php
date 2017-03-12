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

class Content extends Common {
    //动作
	public function index(){
	    //点击次数加1
        $aid = q('get.aid',0,'intval');
        Db::table('article')->where('aid',$aid)->increment('click',1);
        $articleData = Db::table('article')->join('article_data','aid','=','article_aid')->where('aid',$aid)->first();
        $articleData['tag'] = Db::table('article_tag')->join('tag','tag_tid','=','tid')->where('article_aid',$aid)->field(['tid','tname'])->get();
        p($articleData);
        $conf = ['title'=>$articleData['title']];
		View::with('conf',$conf)->with('articleData',$articleData)->make();
	}
}
