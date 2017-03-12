<?php namespace system\model;

use hdphp\Model\Model;

class Goodslist extends Model{

	//数据表
	protected $table = "goods_list";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['number','required','请输入货号',3,3],
        ['inventory','required','请输入库存',3,3],
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
    public function store(){
        $gid = $_POST['gid'];
        if (!$this->create()) return false;
//        p($_POST);die;
        foreach ($_POST['spec'] as $k=>$v){
            if ($v == 0){
                $this->error = '请选择规格';
                return false;
            }

        }
        $this->data['combine'] = implode(',',$_POST['spec']);
//        p($this->data);die;
//        $oldData = $this->where('gid',$gid)->lists('combine');
//        p($oldData);die;
        $this->add();
        return true;
    }
}