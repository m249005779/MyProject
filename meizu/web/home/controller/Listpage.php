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


class Listpage{
    //动作
	public function index(){
        $_SESSION['home']['userurl'] = $_SERVER['REQUEST_URI'];
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
        //分类所有商品数据
        //接受cid参数
        $cid = q('get.cid',0,'intval');
        $sid = q('get.sid',0,'intval');
        $cateData = Db::table('category')->get();
        //处理面包屑,找父级
        $fatherData = $this->getFather($cateData,$cid);
        $fatherData = array_reverse($fatherData);//数组反转
//        p($fatherData);
        View::with('fatherData',$fatherData);
        $cids = $this->getSon($cateData,$cid);
        $cids[] = $cid;//把自己追加进去
        //获取二级分类数据
        $categoryData = Db::table('category')->where('pid',$cid)->get();
//        p($categoryData);
        View::with('categoryData',$categoryData);
        //根据分类id获取全部的商品id
        $gids = Db::table('goods')->whereIn('cid',$cids)->lists('gid');
//        p($gids);
        if ($sid){
            $goodsData = Db::table('goods')->where('cid',$sid)->get();
        }else{
            if ($gids){
                $goodsData = Db::table('goods')->whereIn('gid',$gids)->get();
            }else{
                $goodsData = [];
            }
        }
//        p($goodsData);
        View::with('goodsData',$goodsData);
        //为你推荐数据
        if ($cids){
            $forYouData = Db::table('goods')->whereIn('cid',$cids)->orderBy('rand()')->limit(10)->get();
        }
        View::with('forYouData',$forYouData);
//        p($forYouData);
        View::make();
	}
    public function getSon($data,$cid)
    {
        foreach($data as $k=>$v)
        {
            if($v['pid']==$cid){
                $this->temp[] = $v['cid'];
                $this->getSon($data,$v['cid']);
            }
        }
        return $this->temp;
    }
    /**
     * 找父级
     * @param $data
     * @param $cid
     * @return array
     */
    public function getFather($data,$cid)
    {
        static $temp = [];
        foreach($data as $k=>$v)
        {
            if($v['cid']==$cid)
            {
                $temp[] = $v;
                $this->getFather($data,$v['pid']);
            }
        }
        return $temp;
    }
}
