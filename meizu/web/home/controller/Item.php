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



class Item{
    private $db;
    public function __construct()
    {
        $this->db = new \system\model\Goods();
    }

    public function index(){
        //接收商品ID
        $gid= q('get.gid',0,'intval');
        $gids = $this->db->lists('gid');
        if (!in_array($gid,$gids)){
            go('Entry/index');
        }
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
        $tid = $this->db->where('gid',$gid)->pluck('tid');
        $specData = Db::table('type_attr')->where('class',2)->where('tid',$tid)->get();
        foreach($specData as $k=>$v) {
            $specData[$k]['tavalue'] = Db::table('goods_attr')->where('taid',$v['taid'])->where('gid',$gid)->get();
        }
//        p($specData);
        $detailData = Db::table('detail')->where('gid',$gid)->first();
        $detailData['small'] = explode(',',$detailData['small']);
        $detailData['medium'] = explode(',',$detailData['medium']);
        $detailData['big'] = explode(',',$detailData['big']);
//        p($detailData);
        $goodsData = Db::table('goods')->where('gid',$gid)->first();
//        p($goodsData);
        $data = Db::table('goods_attr')->join('type_attr','goods_attr.taid','=','type_attr.taid')->where('gid',$gid)->where('tid',$tid)->where('class',1)->get();
//        p($data);
        $tData = [];
        foreach ($data as $k=>$v){
            $tData[$v['taname']][] = $v['gtvalue'];
//            $tData[added] = $v['added'];
        }
//        p($tData);
//        p( $_SERVER['REQUEST_URI']);
        $_SESSION['home']['userurl'] = $_SERVER['REQUEST_URI'];
//        p($_SESSION);
        View::with('tData',$tData);
        View::with('goodsData',$goodsData);
        View::with('detailData',$detailData);
        View::with('specData',$specData);
		View::make();
	}
	public function ajaxGetTotal(){
        $data = $_POST;
        $data['combine'] = rtrim($data['combine'],',');
        $data = Db::table('goods_list')->where('combine',$data['combine'])->where('gid',$data['gid'])->first();
        //如果找不到数据
        if(!$data){echo json_encode(['valid'=>0]);exit;}
        //如果或存为0
        if($data['inventory']==0){echo json_encode(['valid'=>0]);exit;}
        //能走到这里，说明有数据存在并且货存不为0
        echo json_encode(['valid'=>1,'total'=>$data['inventory'],'glid'=>$data['glid']]);exit;
    }
    //添加收藏
    public function ajaxCollect(){
        $data = $_POST;
        if ($_SESSION['home']['uid']){
            Db::table('collect')->insert(['uid'=>$_SESSION['home']['uid'],'gid'=>$data['gid']]);
            echo json_encode(['val'=>1]);exit;
        }else{
            echo json_encode(['val'=>0]);exit;
        }
    }
    public function ajaxAddCart()
    {
        if ($_SESSION['home']['uid']){
            unset($_SESSION['cart']);
            $data = $_POST;
            $data['combine'] = rtrim($data['combine'],',');
//        p($data);die;
            $glid = Db::table('goods_list')->where('combine',$data['combine'])->where('gid',$data['gid'])->pluck('glid');
//            p($glid);
            //获取商品单一数据
            $onGoodsData = Db::table('goods')->where('gid',$data['gid'])->first();
            $data = [
                'id'        => $data['gid'], // 商品 ID
                'name'      =>$onGoodsData['gname'],// 商品名称
                'num'       => $data['num'], // 商品数量
                'price'     => $onGoodsData['shopprice'], // 商品价格
                'options'   => $data['options'],// 其他参数如价格、颜色、可以为数组或字符串
                'glid'      => $glid,
            ];
            Cart::add($data);
//            p($_SESSION);die;
            echo json_encode(['val'=>1]);exit;
        }else{
            echo json_encode(['val'=>0]);exit;
        }

    }
}
