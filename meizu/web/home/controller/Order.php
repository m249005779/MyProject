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


class Order{
    private $db;
    public function __construct()
    {
        $this->db = new \system\model\Address();
    }

    //动作
	public function index(){
	    if (!$_SESSION['home']['uid']){
	        go('login.index');
        }
        //hover数据
        $proData = Db::table('goods')->where('cid',2)->get();
        View::with('proData',$proData);
        $blueData = Db::table('goods')->where('cid',3)->limit(3)->get();
//        p($blueData);
        View::with('blueData',$blueData);
	    $data = Cart::getGoods();
        foreach ($data as $k=>$v){
            $data = $v;
            $data['pic'] = Db::table('goods')->where('gid',$data['id'])->pluck('pic');
        }
        $addressDate = $this->db->where('uid',$_SESSION['home']['uid'])->get();
        foreach ($addressDate as $k=>$v){
            $addressDate[$k]['city'] = explode(',',$v['city']);
        }
//        p($data);
        View::with('addressDate',$addressDate);
        View::with('data',$data);
		View::make();
	}
    public function code(){
        Code::num(1)->make();
    }
    //检测收件人
    public function checkUsername(){
        $username = $_POST['username'];
        if($username == null){
            echo 0;exit;
        }
        echo 1;
    }
    //检测电话号码
    public function checkPhone(){
        $phone = $_POST['phone'];
        if ($phone == null){
            echo 0;exit;
        }
        echo 1;
    }
    //检测地址
    public function checkAddress(){
        $address = $_POST['address'];
        if ($address == null){
            echo 0;exit;
        }
        echo 1;
    }
    //添加地址
    public function addAddress(){
        if (IS_POST){
            if ($addid=$this->db->store()){
                echo json_encode(['val'=>1,'addid'=>$addid,'data'=>$_POST]);exit;
            }
            echo json_encode(['val'=>0]);exit;
        }

    }
    //获取地址旧数据
    public function addressOldData(){
        $addid = $_POST['addid'];
        $oldData = $this->db->where('addid',$addid)->first();
        $oldData['city'] = explode(',',$oldData['city']);
        echo json_encode(['val'=>1,'oldData'=>$oldData]);exit;
    }
    //修改地址
    public function addressEdit(){
//        $data = $_POST;
//        p($data);
        if (IS_POST){
            if($this->db->edit()){
                echo json_encode(['val'=>1,'data'=>$_POST]);exit;
            }
            echo json_encode(['val'=>0]);exit;
        }
    }
    //删除地址
    public function addressDel(){
        if (IS_POST){
            $addid=$_POST['addid'];
            $this->db->where('addid',$addid)->delete();
            echo json_encode(['val'=>1]);exit;
        }
    }
    //确认提交订单
    public function submitOrder(){
        $orderDb = new \system\model\Order();
        if (strtoupper($_POST['code']) != $_SESSION['code']){
            echo json_encode(['val'=>5]);exit;
        }
        if ($_POST['addid'] == null){
            echo json_encode(['val'=>3]);exit;
        }
        if ($oid = $orderDb->store()){
            echo json_encode(['val'=>2,'oid'=>$oid]);exit;
        }
    }
}
