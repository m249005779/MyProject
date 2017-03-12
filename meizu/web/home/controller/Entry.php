<?php namespace web\home\controller;
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

class Entry {
	//首页
	public function index() {
	    //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
        //$data = Data::channelLevel(Db::table('category')->get(), $pid = 0, $html = "&nbsp;", $fieldPri = 'cid', $fieldPid = 'pid');

        //foreach ($data as $k=>$v){
            //$cids = $this->getSon(Db::table('category')->get(),$v['cid']);
            //$data[$k]['goods'] = Db::table('goods')->join('category','category.cid','=','goods.cid')->whereIn('category.cid',$cids)->get();
            //$cids=[];
            //$data[$k]['cids'] = Db::table('category')
        //}
        $_SESSION['home']['userurl'] = $_SERVER['REQUEST_URI'];
        //分类数据
        $cateData = Db::table('category')->where('pid',0)->get();
        foreach ($cateData as $k=>$v){
            $cateData[$k]['cids'] = Db::table('category')->where('pid',$v['cid'])->lists('cid');
            $cateData[$k]['goods'] = Db::table('goods')->join('category','category.cid','=','goods.cid')->whereIn('category.cid',$cateData[$k]['cids'])->whereNotIn('click',[4])->limit(10)->get();
        }
//        p($cateData);
        View::with('cateData',$cateData);
        //类型数据
        $typeData = Db::table('type')->get();
        foreach ($typeData as $k=>$v){
            $typeData[$k]['data'] = Db::table('goods')->where('tid',$v['tid'])->whereNotIn('click',[4])->get();
            $typeData[$k]['hot'] = Db::table('goods')->where('tid',$v['tid'])->where('click',4)->first();
        }
//        p($typeData);
        //热品推荐数据
        $hotData = Db::table('goods')->orderBy('rand()')->whereNotIn('click',[4])->limit(5)->get();
        View::with('hotData',$hotData);
//        p($hotData);
        View::with('typeData',$typeData);
		View::make();
	}
    //用递归找子集
    public function getSon($data,$cid){
        static $temp = [];
        foreach ($data as $v){
            if ($v['pid'] == $cid){
                //如果相等就说明是$cid的子集
                $temp[] = $v['cid'];
                //递归调用
                $this->getSon($data,$v['cid']);
            }
        }
        return $temp;
    }
}