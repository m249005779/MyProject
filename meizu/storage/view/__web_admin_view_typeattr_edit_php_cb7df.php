<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>    <title>商城系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://localhost/meizu/resource/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/meizu/resource/css/site.css" rel="stylesheet">
    <link href="http://localhost/meizu/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://localhost/meizu/resource/hdjs/js/jquery.min.js"></script>
    <script src="http://localhost/meizu/resource/hdjs/app/util.js"></script>
    <script src="http://localhost/meizu/resource/hdjs/require.js"></script>
    <script src="http://localhost/meizu/resource/hdjs/app/config.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="" style="color: white;margin-left: -14px">Dream后台管理</a></h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">

                        <li>
                            <a href="http://doc.hdphp.com" target="_blank"><i class="fa fa-w fa-file-code-o"></i> 在线文档</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i class="fa fa-w fa-hand-o-right"></i>   图标库</a>
                        </li>
                        <li>
                            <a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 论坛讨论</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            管理员                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/meizu/index.php?s=admin/Login/changePass">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://localhost/meizu/index.php?s=admin/login/out">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus" >
                <!--分类管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">类型管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="http://localhost/meizu/index.php?s=admin/type/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        类型列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/type/store" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        类型添加
                    </a>
                </ul>
                <!--学员管理菜单 end-->

                <!--课程管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">分类管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="http://localhost/meizu/index.php?s=admin/category/index" class="list-group-item" >
                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/category/store" class="list-group-item" >
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类添加
                    </a>
                </ul>
                <!--课程管理菜单 end-->

                <!--网站配置管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">品牌管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="http://localhost/meizu/index.php?s=admin/brand/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        品牌列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/brand/store" class="list-group-item" >
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        品牌添加
                    </a>
                </ul>
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">商品管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample4" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample4">
                    <a href="http://localhost/meizu/index.php?s=admin/goods/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        商品列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/goods/store" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        商品添加
                    </a>
                </ul>
                <!--网站配置管理菜单 end-->
                <!--友情链接-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">友情链接</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample6" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample6">
                    <a href="http://localhost/meizu/index.php?s=admin/link/index" class="list-group-item" >
                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        链接列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/link/add" class="list-group-item" >
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        链接添加
                    </a>
                </ul>
                <!--友情链接 end-->
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="javascript:;"><i class="fa fa-cogs"></i>
                类型属性管理</a>
        </li>
        <li class="active">
            <a href="">修改属性类型</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="<?php echo u('index',['tid'=>q('get.tid')])?>">类型属性管理</a></li>
        <li class="active"><a href="javascript:;">修改属性类型</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return edit()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">类型属性修改</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">属性名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="taname" value="<?php echo $oldData['taname']?>" required class="form-control" placeholder="请填写属性名称">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">属性类别</label>
                    <div class="col-sm-10">
                        <?php if($oldData['class']==1){?>
                
                        <label class="radio-inline">
                            <input type="radio" value="1" name="class" checked="checked"><i></i> 属性
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="2" name="class"><i></i> 规格
                        </label>
                        
               <?php }?>
                        <?php if($oldData['class']==2){?>
                
                            <label class="radio-inline">
                                <input type="radio" value="1" name="class"><i></i> 属性
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="2" checked="checked" name="class"><i></i> 规格
                            </label>
                        
               <?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">属性值</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="container" name="tavalue" placeholder="多个用*号隔开" style="height:100px;width:100%;"><?php echo $oldData['tavalue']?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo q('get.taid')?>" name="taid">
        <input type="hidden" value="<?php echo q('get.tid')?>" name="tid">
        <button class="btn btn-primary" type="submit">确定</button>
    <input type='hidden' name='__TOKEN__' value='64a96c6bf21f9a8d21a7859065f8049c'/></form>

        </div>
    </div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <a href="http://www.houdunwang.com">高端培训</a>
    <a href="http://www.hdphp.com">开源框架</a>
    <a href="http://bbs.houdunwang.com">后盾论坛</a>
    <br>
    Powered by hdphp v2.0 © 2016-2022 www.hdphp.com
</div>
</body>
</html>
<script>
    require(['bootstrap'],function($){})
</script>

<script>
    function edit()
    {
        var data = $('#form').serialize();
        //res返回的数据：{valid:0,message:'提示信息'}
        $.post("<?php echo u('edit')?>",data,function(res){
            if(res.valid)
            {//成功
                //参数：提示消息，跳转地址，成功/失败
                util.message(res.message,"<?php echo u('index',['tid'=>q('get.tid')])?>",'success');
            }else{
                util.message(res.message,"",'error');
            }
        },"json")
        return false;
    }
</script>