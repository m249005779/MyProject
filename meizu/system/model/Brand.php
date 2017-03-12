<?php namespace system\model;

use hdphp\Model\Model;

class Brand extends Model{

	//数据表
	protected $table = "brand";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['bname','required','请输入品牌名称',3,3],
        ['logo','required','请上传品牌logo',3,3],
        ['sort','required','请输入品牌排序',3,3],
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
	//品牌添加
    public function store(){
        if (!$this->create()) return false;
        return $this->add();
    }
    //修改
    public function edit(){
        if (!$this->create()) return false;
        return $this->save();
    }
}