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

class Center{
    //动作
	public function index(){
	    if(!$_SESSION['home']['uid']){
	        go("entry.index");
        }
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
        //获得全部订单数据
        $allOrderData = Db::table('order')->where('uid',$_SESSION['home']['uid'])->get();
        foreach ($allOrderData as $k => $v){
            $allOrderData[$k]['goods'] = Db::table('goods')->where('gid',$v['gid'])->pluck('pic');
            $allOrderData[$k]['options']=explode(',',$allOrderData[$k]['options']);
        }
//        p($allOrderData);
        //待发货数据
        View::with('allOrderData',$allOrderData);
		View::make();
	}
	public function address(){
        if(!$_SESSION['home']['uid']){
            go("entry.index");
        }
	    View::make();
    }
    public function collect(){
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
        $gids = Db::table('collect')->where('uid',$_SESSION['home']['uid'])->lists('gid');
        if ($gids){
            $goodsData = Db::table('goods')->whereIn('gid',$gids)->get();
        }else{
            $goodsData = [];
        }
//        p($goodsData);
        View::with('goodsData',$goodsData);
        View::make();
    }
    public function ajaxCollect(){
        $gid = $_POST['gid'];
//        p($gid);
        Db::table('collect')->where('uid',$_SESSION['home']['uid'])->where('gid',$gid)->delete();
//        p($data);
        echo json_encode(['val'=>1]);exit;
    }
    //取消订单
    public function cancel(){
        $orid = q('get.orid',0,'intval');
        Db::table('order')->where('orid',$orid)->update(['orderstatus'=>4]);
        go('center.index');
    }
    //删除订单
    public function del(){
//        p($_POST);
        $orid = $_POST['orid'];
        Db::table('order')->where('orid',$orid)->delete();
        echo json_encode(['val'=>1]);exit;
    }
}
