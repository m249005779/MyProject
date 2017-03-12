<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace web\admin\controller;
use hdphp\route\Controller;
class Common extends Controller{
    //动作
	public function __construct(){
		//验证是否登录，否则转跳登录页面
		if (!isset($_SESSION['admin']['aid']))
		{
			//走到判断里面，说明没有登陆
			go('admin/login.index');
		}
	}
}
