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

class Pay{
    //动作
	public function index(){
	    $oid = q('get.oid');
//        p($oid);
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
	    $data = Db::table('order')->where('orid',$oid)->first();
        $data['options'] = explode(',',$data['options']);
//        p($data);
        $address = Db::table('address')->where('addid',$data['addid'])->first();
        $address['city'] = explode(',',$address['city']);
//        p($address);
        View::with('address',$address);
        View::with('data',$data);
		View::make();
	}
	//付款
    public function goToPay(){
//        p($_POST);
        $oid = intval($_POST['oid']);
        $glid = Db::table('order')->where('orid',$oid)->pluck('glid');
        $num = Db::table('order')->where('orid',$oid)->pluck('quantity');
        $inventory = Db::table('goods_list')->where('glid',$glid)->pluck('inventory')-$num;
        Db::table('goods_list')->where('glid',$glid)->update(['inventory'=>$inventory]);
        Db::table('order')->where('orid',$oid)->update(['orderstatus'=>2]);
        echo json_encode(['val'=>1]);exit;
    }
}
