<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>    <title>博客系统</title>
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
                    <h4 class="panel-title">分类管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="http://localhost/meizu/index.php?s=admin/type/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/type/store" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类添加
                    </a>
                </ul>
                <!--学员管理菜单 end-->

                <!--课程管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">标签管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="http://localhost/meizu/index.php?s=admin/tag/index" class="list-group-item" >
                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        标签列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/tag/add" class="list-group-item" >
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        标签添加
                    </a>
                </ul>
                <!--课程管理菜单 end-->

                <!--网站配置管理菜单-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">文章管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample3">
                    <a href="http://localhost/meizu/index.php?s=admin/article/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        文章列表
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/article/add" class="list-group-item" >
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        文章添加
                    </a>
                    <a href="http://localhost/meizu/index.php?s=admin/article/recycle" class="list-group-item" >
                        <i class="fa fa-bitbucket" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        回收站
                    </a>
                </ul>
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                    <h4 class="panel-title">站点配置</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample4" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample4">
                    <a href="http://localhost/meizu/index.php?s=admin/webset/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        站点配置
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
            
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="">分类管理</a></li>
        <li class="active"><a href="">添加分类</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">分类管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="cate_title" required class="form-control" placeholder="请填写分类名称">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">是否显示</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" value="1" name="cate_isshow" checked="checked"><i></i> 显示
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="2" name="cate_isshow"><i></i> 不显示
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">下拉菜单</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="goods_cate_cid">
                            <option value="0">请选择分类</option>
                                <option value="">下拉1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">海报图</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="goods_poster" readonly="" value="<?php echo $field['thumb']?>">
                            <div class="input-group-btn">
                                <button onclick="upImage1(this)" class="btn btn-default" type="button" onclick="upImage1(this)">选择图片
                                </button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="<?php echo $field['thumb']?:'resource/images/nopic.jpg'?>" class="img-responsive img-thumbnail haibao"
                                 width="150">
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">多图上传</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="goods_poster" readonly="" value="<?php echo $field['thumb']?>">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <div id="box"></div>
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">商品详情</label>
                    <div class="col-sm-9">
                        <textarea id="container" name="goods_describe" style="height:300px;width:100%;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">城市选择</label>
                    <div class="col-sm-9">
                        <select name="address[province]"></select>
                        <select name="address[city]"></select>
                        <select name="address[area]"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">列表日期选择</label>
                    <div class="col-sm-9">
                        <select name="birthyear" ></select>
                        <select name="birthmonth"></select>
                        <select name="birthday" ></select>
                    </div>
                </div>

            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    <input type='hidden' name='__TOKEN__' value='5ff9b20d0a36061cd7571484594c6ef5'/></form>


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
    //上传
    function upImage1(obj) {
        require(['util'], function (util) {
            util.image(function (images) {
                $("[name='goods_poster']").val(images[0]);
                $(".haibao").attr('src', images[0]);
            }, {})
        })
    }
    //百度编辑器
    require(['util'], function (util) {
    util.ueditor('container', {}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
    })
</script>
<script>
    //上传图片
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                //上传多图
                multiple: true,
            };
            util.image(function (images) {
                $(images).each(function(k,v){
                    $("<img src='"+v+"'/>").appendTo('#box');
                })
            }, options)
        });
    }
</script>
<script>
    require(['address'], function (a) {
        a.render({
            //省份标签
            province: document.querySelector('[name="address[province]"]'),
            //城市标签
            city: document.querySelector('[name="address[city]"]'),
            //地区标签
            area: document.querySelector('[name="address[area]"]'),
        }, {
            //默认省
            province: '福建省',
            //默认市
            city:'厦门市',
            //默认地区
            area:'海沧区',
        });
    })
</script>
<script>
    util.date_picker(
        {
            year: document.querySelector('[name="birthyear"]'),//年select表单
            month: document.querySelector('[name="birthmonth"]'),//月表单
            day: document.querySelector('[name="birthday"]'),//日表单
        },
        {
            year: 1998,//初始年
            month:7,//初始月
            day:20,//初始日
        }
    );
</script>