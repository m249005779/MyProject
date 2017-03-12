<?php namespace system\model;

use hdphp\Model\Model;

class Goods extends Model{

	//数据表
	protected $table = "goods";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['gname','required','请输入商品名称',3,3],
        ['gnumber','required','请输入货号',3,3],
        ['unit','required','请输入货号',3,3],
        ['shopprice','required','请输入商城价',3,3],
        ['marketprice','required','请输入市场价',3,3],
        ['pic','required','请上传列表图',3,3],

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
        //自动验证
        if(!$this->create()) return false;
        //商品详情表的验证
        $goodsDetailModel = new \system\model\Detail();
        if (!$goodsDetailModel->create()){
            $this->error = $goodsDetailModel->getError();
            return false;
        }
        //商品属性表的验证
        $goodsAttrModel = new \system\model\GoodsAttr();
        if (!$goodsAttrModel->create()){
            $this->error = $goodsAttrModel->getError();
        }
        //执行商品表的添加
        $this->data['time'] = time();
        $this->data['aid'] = $_SESSION['admin']['aid'];
//        $this->data['tid'] = $_SESSION['tid'];
//        p($_POST['tid']);
//        p($_SESSION);
        $gid = $this->add();
        //执行商品详情表的添加
        $small = '';
        $medium = "";
        $big = '';
        foreach ($_POST['logo'] as $k => $v){
            $small .= Image::thumb($v,dirname($v) . '/small_' . basename($v), 75,75,5) . ",";
            $medium .= Image::thumb($v,dirname($v) . '/medium_' . basename($v), 375,375,5) . ",";
            $big .= Image::thumb($v,dirname($v) . '/big_' . basename($v), 375,375,5) . ",";
        }
        $small = rtrim($small,',');
        $big = rtrim($big,',');
        $medium = rtrim($medium,',');
        $data = [
            'small'=>$small,
            'medium'=>$medium,
            'big'=>$big,
            'intro'=>$_POST['intro'],
            'service'=>$_POST['service'],
            'gid'=>$gid,
        ];
        $goodsDetailModel->add($data);
        //商品属性表的添加
        //添加属性
        foreach ($_POST['attr'] as $k => $v){
            if ($v){
                $data = [
                    'gtvalue'=>$v,
                    'added'=>0,
                    'taid'=>$k,
                    'gid'=>$gid,
                ];
                $goodsAttrModel->add($data);
            }
        }
        //添加商品规格
        foreach ($_POST['spec'] as $k =>$v){
            foreach ($v['color'] as $key => $value){
                $data = [
                    'gtvalue'=>$value,
                    'added'=>$v['added'][$key],
                    'taid'=>$k,
                    'gid'=>$gid,
                ];
                $goodsAttrModel->add($data);
            }
        }
        return true;
    }
    //编辑
    public function edit(){
        $gid = $_POST['gid'];
        //自动验证
        if(!$this->create()) return false;
        //商品详情表的验证
        $goodsDetailModel = new \system\model\Detail();
        if (!$goodsDetailModel->create()){
            $this->error = $goodsDetailModel->getError();
            return false;
        }
        //商品属性表的验证
        $goodsAttrModel = new \system\model\GoodsAttr();
        if (!$goodsAttrModel->create()){
            $this->error = $goodsAttrModel->getError();
            return false;
        }
        //执行商品表的修改
//        $this->data['time'] = time();
//        $this->data['aid'] = $_SESSION['admin']['aid'];
//        $this->data['tid'] = $_SESSION['tid'];
        $this->save();

        //执行商品详情表的编辑
        $small = '';
        $medium = "";
        $big = '';
        $logo = $_POST['logo'];
        foreach($logo as $k=>$v){
            if (substr(basename($v),0,3) == 'big'){
                $logo[$k] = dirname($v) . '/' . ltrim(basename($v),'big_');
            }
        }
        foreach ($logo as $k => $v){
            $small .= Image::thumb($v,dirname($v) . '/small_' . basename($v), 75,75,5) . ",";
            $medium .= Image::thumb($v,dirname($v) . '/medium_' . basename($v), 375,375,5) . ",";
            $big .= Image::thumb($v,dirname($v) . '/big_' . basename($v), 375,375,5) . ",";
        }
        $small = rtrim($small,',');
        $big = rtrim($big,',');
        $medium = rtrim($medium,',');
        $data = [
            'small'=>$small,
            'medium'=>$medium,
            'big'=>$big,
            'intro'=>$_POST['intro'],
            'service'=>$_POST['service'],
            'gid'=>$gid,
        ];
        $detailData = $goodsDetailModel->where('gid',$gid)->first();
        //把大图字符串转换成数组
        $detailData['big'] = explode(',',$detailData['big']);
        $detailData['small'] = explode(',',$detailData['small']);
        $detailData['medium'] = explode(',',$detailData['medium']);
//        p($detailData);die;
        foreach ($detailData['big'] as $k=>$v){
            if (file_exists($v) && !in_array($v,$_POST['logo'])){
                unlink($v);
                unlink($detailData['medium'][$k]);
                unlink($detailData['small'][$k]);
                unlink(dirname($v) . '/' . ltrim(basename($v),'big_'));
            }
        }
        $goodsDetailModel->where('gid',$gid)->update($data);
//        $goodsDetailModel->add($data);
        //商品属性表的编辑
        //先删除原来的属性和规格
        $goodsAttrModel->where('gid',$gid)->delete();
        //添加属性
        foreach ($_POST['attr'] as $k => $v){
            if ($v){
                $data = [
                    'gtvalue'=>$v,
                    'added'=>0,
                    'taid'=>$k,
                    'gid'=>$gid,
                ];
                $goodsAttrModel->add($data);
            }
        }
        //编辑商品规格
        foreach ($_POST['spec'] as $k =>$v){
            foreach ($v['color'] as $key => $value){
                $data = [
                    'gtvalue'=>$value,
                    'added'=>$v['added'][$key],
                    'taid'=>$k,
                    'gid'=>$gid,
                ];
                $goodsAttrModel->add($data);
            }
        }
        return true;
    }
}