<?php
namespace web\home\controller;

class Common{
    public function __construct()
    {
        //获取公共webset里面的数据
        $webSetDats = Db::table('webset')->lists('name,value');
        View::with('webSetDats',$webSetDats);
//        p($webSetDats);
        //获取公共头部的分类信息
        $headCateData = Db::table('category')->where('pid',0)->orderBy('cid','asc')->get();
        View::with('headCateData',$headCateData);
        //右侧所有分类
        $allCateData = Db::table('category')->get();
//        p($allCateData);
        foreach ($allCateData as $k=>$v){
            $allCateData[$k]['total'] = Db::table('article')->where('category_cid',$v['cid'])->count();
        }
//        p($allCateData);
        View::with('allCateData',$allCateData);
        //获得标签到标签云
        $tagData = Db::table('tag')->get();
        View::with('tagData',$tagData);
        //友情链接
        $linkData = Db::table('link')->get();
        View::with('linkData',$linkData);
//        p($linkData);
        //最新文章
        $newArticleData = Db::table('article')->orderBy('sendtime','desc')->limit(3)->get();
//        p($newArticleData);
        View::with('newArticleData',$newArticleData);
        //标签云
        $yunData = Db::table('tag')->orderBy('RAND()')->limit(3)->get();
//        p($yunData);
        View::with('yunData',$yunData);
        //点击排行
        $clickData = Db::table('article')->orderBy('click','desc')->limit(3)->get();
//        p($clickData);
        View::with('clickData',$clickData);
        //站长推荐
        $tuiData = Db::table('article')->orderBy('RAND()')->limit(3)->get();
        View::with('tuiData',$tuiData);
    }
}