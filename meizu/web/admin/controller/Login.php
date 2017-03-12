<?php	namespace web\admin\controller;
use hdphp\route\Controller;

/**
 * Class Login 登录控制器
 * 创建于2016年9月26日 20:29:58
 * @package web\admin\controller
 */
class Login extends Controller
{
	private $db;
	public function __construct()
	{
		$this->db = new \system\model\Admin();
	}
	//登陆页面
	public function index()
	{
		if(IS_POST)
		{
			if($this->db->login())
			{
				//如果登陆成功
				message('操作成功',u('index.index'),"success");
			}
			//message( $content, $redirect = 'back', $type = 'success', $timeout = 2 )
			//如果登陆失败
			//getError()获取模型的错误信息
			message($this->db->getError(),'back',"error");
		}
		View::make();
	}
	//验证码
	public function code()
	{
		Code::num(2)->make();
	}
	//修改密码
	public function changePass()
	{
		if(IS_POST)
		{
			if($this->db->changePass())
			{
				//如果成功
				message('操作成功',u('index.index'),"success");
			}
			//message( $content, $redirect = 'back', $type = 'success', $timeout = 2 )
			//如果失败
			//getError()获取模型的错误信息
			message($this->db->getError(),'back',"error");
		}
		//修改密码
		View::make();
	}
	//退出
	public function out()
	{
		session_unset();
		session_destroy();
		go('index');
	}
}
