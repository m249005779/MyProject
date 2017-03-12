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
   public function __construct()
   {
       //验证是否登陆，没有登陆就跳转到登陆界面
       if (!isset($_SESSION['admin']['uid'])){
           //如果代码运行到这里说明没登陆，跳转页面
           go('admin.login.index');
       }
   }
}
