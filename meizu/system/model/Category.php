<?php namespace system\model;

use hdphp\Model\Model;

class Category extends Model{

	//数据表
	protected $table = "category";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['cname','required','请输入分类名称',3,3],
        ['sort','num:1,99999','分类排序必须为数字并且不能为空',3,3],
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
    //添加
    public function store(){
        if (!$this->create()) return false;
        return $this->add();
    }

    public function getCateData($cid){
        //找出所有子集
        $cids = $this->getSon($this->get(),$cid);
        //把自己的cid追加进去
        $cids[] = $cid;
        //得到除了自己和子集所有的数据
        $data = $this->whereNotIn('cid',$cids)->get();
        //返回树状数据
        return Data::tree($data,'cname');
    }

    //递归找子集
    public function getSon($data,$cid){
        static $temp = [];
        foreach($data as $v){
            if ($v['pid'] == $cid){
                $temp[] = $v['cid'];
                //递归调用
                $this->getSon($data,$v['cid']);
            }
        }
        return $temp;
    }
    public function edit(){
        if (!$this->create()) return false;
        return $this->save();
    }
    //获取所有数据
//    public function getAll(){
//        $page = Page::row(5)->make($this->count());
//        $data = Data::tree($this->limit(Page::limit())->orderBy('cid','asc')->get(),'cname');
//
//    }
}