<?php namespace system\model;

use hdphp\Model\Model;

class Address extends Model{

	//数据表
	protected $table = "address";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]

	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;


	//禁止插入的字段
	protected $denyInsertFields = [];

	//禁止更新的字段
	protected $denyUpdateFields = [];

	//前置方法 比如: _before_add 为添加前执行的方法
	protected function _before_add(){}
	protected function _before_delete(){}
	protected function _before_save(&$data){}

	protected function _after_add(){}
	protected function _after_delete(){}
	protected function _after_save(){}
    //地址添加
    public function store(){
        if (!$this->create()) return false;
        $city = implode(',',$_POST['citys']);
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $data = [
            'uid'=>$_SESSION['home']['uid'],
            'username'=>$username,
            'phone'=>$phone,
            'city'=>$city,
            'address'=>$address,
        ];
        return $this->add($data);
    }
    public function edit(){
        if (!$this->create()) return false;
        return $this->save();
    }
}