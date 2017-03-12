<?php namespace system\model;

use hdphp\Model\Model;

class Type extends Model{

	//数据表
	protected $table = "type";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['tname','required','请输入类型名称',self::MUST_VALIDATE,self::MODEL_BOTH],
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
    //获得分类数据
    public function getAll(){
        //Page::row(每页显示几条)->make(数据总数)
        $page = Page::row(5)->make($this->count());
        //获取所有数据Page::limit()---->0,4|5-9
        $data = $this->limit(Page::limit())->orderBy('tid','desc')->get();
        return ['page'=>$page,'data'=>$data];
    }
    //分类添加
    public function store(){
        if(!$this->create()) return false;
        //执行添加
        return $this->add();
    }
    //分类修改
    public function edit(){
        if (!$this->create()) return false;
        //执行修改
        return $this->save();
    }
}