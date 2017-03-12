<?php namespace system\model;

use hdphp\Model\Model;

class User extends Model{

	//数据表
	protected $table = "user";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['account','regexp:/^[a-zA-Z0-9_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]+$/','账号必须为两位以上的字母,数字,或者下划线',3,3],
        ['password','required','请输入密码',3,3],
        ['code','required','请输入验证码',3,3]
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
    //注册
    public function register(){
        if (!$this->create()) return false;
        if (strtoupper($_POST['code']) != $_SESSION['code']){
            //错误信息存到error里就能被getError()接收
            $this->error = '验证码错误';return false;
        }
        //判断用户名是否重复
        $userData = $this->lists('account');
//        p($_POST);exit;
        foreach ($userData as $k=>$v){
            if ($_POST['account'] == $v){
                $this->error = '用户名重复';return false;
            }
        }
        $preg = '/^[\w\_]{6,20}$/u';
        if (!preg_match($preg,$_POST['password'])){
            $this->error = '密码必须为6—20位,由字母、数字组成';return false;
        }
        $this->data['password'] = md5($_POST['password']);
//        $data = [
//            'account'=>$_POST['account'],
//            'password'=>md5($_POST['password']),
//        ];
        $this->add();
        return true;
    }
    //登陆
    public function login(){
        if (!$this->create()) return false;
        if (strtoupper($_POST['code']) != $_SESSION['code']){
            //错误信息存到error里就能被getError()接收
            $this->error = '验证码错误';return false;
        }
        //对比用户名和密码是否正确
        if (!$data = $this->where('account',$_POST['account'])->where('password',md5($_POST['password']))->first()){
            $this->error = '用户名或密码不正确';return false;
        }
        $_SESSION['home']['uid'] = $data['uid'];
        $_SESSION['home']['account'] = $data['account'];
        return true;
    }
}