<?php namespace system\model;

use hdphp\Model\Model;

class Order extends Model{

	//数据表
	protected $table = "order";

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
    //订单添加
    public function store(){
        $cartData = Cart::getGoods();
        foreach ($cartData as $k=>$v){
            $cartData = $v;
        }
        $options = implode(',',$cartData['options']);
        $data = [
            'ordernum'=>Cart::getOrderId(),
            'addid'=>$_POST['addid'],
            'price'=>$cartData['price'],
            'options'=>$options,
            'ordertime'=>time(),
            'totalprice'=>cart::getTotalPrice(),
            'remark'=>$_POST['remark'],
            'orderstatus'=>$_POST['orderstatus'],
            'gid'=>$cartData['id'],
            'uid'=>$_SESSION['home']['uid'],
            'gname'=>$cartData['name'],
            'glid'=>$cartData['glid'],
            'quantity'=>$cartData['num'],
        ];
        //修改货品库存
        //$inventory = Db::table('goods_list')->where('glid',$cartData['glid'])->pluck('inventory')-$cartData['num'];
        //Db::table('goods_list')->where('glid',$cartData['glid'])->update(['inventory'=>$inventory]);
        return $this->add($data);
    }
}