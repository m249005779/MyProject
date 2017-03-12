<?php namespace system\model;

use hdphp\Model\Model;

class Tag extends Model{

	//数据表
	protected $table = "tag";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['tname','required','请输入标签名称',self::MUST_VALIDATE,self::MODEL_BOTH],
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
    //获取标签数据
    public function getAll(){
        //分页
        $page = Page::row(5)->make($this->count());
        $data = $this->limit(Page::limit())->get();
        return ['page'=>$page,'data'=>$data];
    }
    //添加标签
    public function store(){
        if (empty($_POST['tname'])){
            $this->error = '请输入标签名称';
            return false;
        }
        //把接收过来的字符串转化为数组
        $tname = explode('*',$_POST['tname']);
        foreach ($tname as $v){
            //如果有重复的将重复的删除
            if ($this->where('tname',$v)->first()){
                $this->where('tname',$v)->delete();
            }
            //添加到数据库
            $this->add(['tname'=>$v]);
        }
        return true;
    }
    public function edit(){
        if (!$this->create()) return false;
        //修改
        return $this->save();
    }
}