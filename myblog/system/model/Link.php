<?php namespace system\model;

use hdphp\Model\Model;

class Link extends Model{

	//数据表
	protected $table = "link";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['lname','required','请填写链接名称',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['url','required','请填写链接地址',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['logo','required','请上传logo',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['sort','num:1,9999','链接排序必须为数字',self::MUST_VALIDATE,self::MODEL_BOTH],
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
    //添加链接
    public function store(){
        //自动验证
        if (!$this->create()) return false;
        $this->data['addtime'] = time();
        return $this->add();
    }
    public function edit(){
        if (!$this->create()) return false;
        return $this->save();
    }
}