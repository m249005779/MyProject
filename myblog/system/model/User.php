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
        ["username","required","请输入用户名",self::MUST_VALIDATE,self::MODEL_BOTH],
        ["password","required","请输入密码",self::MUST_VALIDATE,self::MODEL_BOTH],
        ["code","required","请输入密码",self::MUST_VALIDATE,self::MODEL_BOTH],
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
    //登陆
    public function login(){
//        var_dump($this->create());die;
        //如果为空
        if (!$this->create()) return false;
        //判断验证码是否正确
        if (strtoupper($_POST['code']) != $_SESSION['code']){
            //错误信息存到error里就能被getError()接收
            $this->error = '验证码错误';return false;
        }
        //对比用户名是否正确
        if (!$data = $this->where('username',$_POST['username'])->first()){
            $this->error = '用户名或密码不正确';return false;
        }
        if (md5($_POST['password']) != $data['password']){
            $this->error = '用户名或密码不正确';return false;
        }
        //如果都正确
        $_SESSION['admin']['uid'] = $data['uid'];
        $_SESSION['admin']['username'] = $data['username'];
        return true;
    }
    //修改密码
    public function changePass(){
        //覆盖上面的属性
        $this->validate = [
            ['password','required','请输入旧密码',self::MUST_VALIDATE,self::MODEL_BOTH],
            ['new_password','required','请输入新密码',self::MUST_VALIDATE,self::MODEL_BOTH],
            ['confirm_password','required','两次输入不一致',self::MUST_VALIDATE,self::MODEL_BOTH],
        ];
        //执行自动验证
        //如果为空
        if (!$this->create()) return false;
        //判断原始密码是否正确
        $data = $this->where('uid',$_SESSION['admin']['uid'])->first();
//        p($data);
        if (md5($_POST['password']) != $data['password']){
            $this->error = '旧密码不正确';return false;
        }
        //判断两次输入的密码是否一致
//        p($_POST['new_password']);exit;
        if ($_POST['confirm_password']!=$_POST['new_password']){
            $this->error = '两次输入的密码不一致';return false;
        }
        //数据库密码的修改
        $data = $this->where('uid',$_SESSION['admin']['uid'])->update(['password'=>md5($_POST['new_password'])]);
        if (!$data){
            $this->error = '修改失败';return false;
        }

        return true;
    }
}