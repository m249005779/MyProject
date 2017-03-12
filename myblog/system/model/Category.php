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
        ['cname','required','分类名称不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['ctitle','required','分类标题不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['cdes','required','分类描述不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['ckeywords','required','分类关键字不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['csort','num:1,100000','分类排序必须为数字且不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
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
	//添加分类
    public function store(){
        //执行自动验证
        if (!$this->create()) return false;
        //执行添加
        //add添加的是异步传递过来的数据
        //添加成功之后返回这条主键的ID
        //注意表单字段和数据库表明要一致
        return $this->add();
    }
    public function getCateData($cid){
        //找出所有的子集
        $cids = $this->getSon($this->get(),$cid);
        //把自己的cid追加进去
        $cids[] = $cid;
        //得到全部数据出了自己和自己的子集
        $data = $this->whereNotIn('cid',$cids)->get();
        //返回数据，把cname树状
        return Data::tree($data,'cname');
    }

    //用递归找子集
    public function getSon($data,$cid){
        static $temp = [];
        foreach ($data as $v){
            if ($v['pid'] == $cid){
                //如果相等就说明是$cid的子集
                $temp[] = $v['cid'];
                //递归调用
                $this->getSon($data,$v['cid']);
            }
        }
        return $temp;
    }
    //编辑
    public function edit(){
        if (!$this->create()) return false;
        //执行下面方法的时候表单的name必须要和数据库中的字段一样,cid是通过隐藏域提交post过来
//        p($this->save());exit;
        return $this->save();

    }
}