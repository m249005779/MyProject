<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>    <title>商城系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://c70_menglingyue.houdunphp.com/meizu/resource/css/site.css" rel="stylesheet">
    <link href="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/js/jquery.min.js"></script>
    <script src="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/app/util.js"></script>
    <script src="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/require.js"></script>
    <script src="http://c70_menglingyue.houdunphp.com/meizu/resource/hdjs/app/config.js"></script>
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
                            <li><a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/Login/changePass">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/login/out">退出</a></li>
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
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/type/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        类型列表
                    </a>
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/type/store" class="list-group-item" >
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
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/category/index" class="list-group-item" >
                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类列表
                    </a>
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/category/store" class="list-group-item" >
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
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/brand/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        品牌列表
                    </a>
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/brand/store" class="list-group-item" >
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
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/goods/index" class="list-group-item" >
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        商品列表
                    </a>
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/goods/store" class="list-group-item" >
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
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/link/index" class="list-group-item" >
                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        链接列表
                    </a>
                    <a href="http://c70_menglingyue.houdunphp.com/meizu/index.php?s=admin/link/add" class="list-group-item" >
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
        <li><a href="<?php echo u('index')?>">商品管理</a></li>
        <li class="active"><a href="">商品添加</a></li>
    </ul>
    <form class="form-horizontal" onsubmit="return goodsAdd()" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">商品管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="gname"  class="form-control" placeholder="请填写商品名称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属分类</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="cid">
                            <option value="0">请选择分类</option>
                            <?php foreach ((array)$cateData as $k=>$v){?>
                            <option value="<?php echo $v['cid']?>" tid="<?php echo $v['tid']?>" ><?php echo $v['_cname']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <script>
                    $(function () {
                        $('select[name=cid]').change(function () {
                            //获取select选中的元素
                            var tid = $(":selected").attr('tid');
                            $('input[name=tid]').val(tid);
                            if(tid == 0){
                                alert('顶级分类不允许添加商品');
                                $(this).val(0);
                                return false;
                            }
                            //异步
                            $.post("<?php echo u('ajaxGetAttr')?>",{tid:tid},function (res) {
                                var attr = '';
                                var spec = '';
                                attr += '<table class="table table-striped">';
                                spec += '<table class="table table-striped">';
                                $.each(res,function (k,v) {
                                    //如果是属性
                                    if (v.class == 1){
                                        attr += '<tr><td>'+ v.taname +'</td><td>';
                                        attr += '<select name="attr['+ v.taid +']"><option value="0">请选择</option>';
                                        $.each(v.tavalue,function (kk,vv) {
                                            attr += '<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        attr += '</select></td></tr>';
                                    }else{//如果是规格
                                        spec += '<tr><td>'+ v.taname +'</td><td>';
                                        spec += '<select name="spec['+ v.taid +'][color][]"><option value="0">请选择</option>'
                                        $.each(v.tavalue,function (kk,vv) {
                                            spec += '<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        spec += '</select></td><td>附加价格</td>';
                                        spec += '<td><input type="text" name="spec['+ v.taid+'][added][]"></td>';
                                        spec += '<td><button type="button" class="btn btn-primary btn-xs addspec">添加</button></td></tr>';
                                    }
                                })
                                attr += '</table>';
                                spec += '</table>';
                                $('#attr').html(attr);
                                $('#spec').html(spec);
                            },'json')
                        })
                    })
                </script>
<!--                //添加按钮-->
                <script>
                    $(function () {
                        $('#spec').delegate('.addspec','click',function () {
                            //复制父级tr
                            var tr = $(this).parents('tr').clone();
                            //移除原有的添加按钮
                            tr.find('.addspec').remove();
                            var del = '<button type="button" class="btn btn-danger btn-xs delspec">删除</button>';
                            //在原来删除的位置添加一个删除按钮
                            tr.find('td').eq(4).append(del);
                            $(this).parents('tr').after(tr);
                        })
                        $('#spec').delegate('.delspec','click',function () {
                            $(this).parents('tr').remove();
                        })
                    })
                </script>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属品牌</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="bid">
                            <option value="0">请选择品牌</option>
                            <?php foreach ((array)$brandData as $k=>$v){?>
                            <option value="<?php echo $v['bid']?>"><?php echo $v['bname']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品属性</label>
                    <div class="col-sm-9" id="attr">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品规格</label>
                    <div class="col-sm-9" id="spec"></div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品货号</label>
                    <div class="col-sm-9">
                        <input type="text" name="gnumber"  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">单位</label>
                    <div class="col-sm-9">
                        <input type="text" name="unit"  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">市场价</label>
                    <div class="col-sm-9">
                        <input type="text" name="marketprice"  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商城价</label>
                    <div class="col-sm-9">
                        <input type="text" name="shopprice"  class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">总库存</label>
                    <div class="col-sm-9">
                        <input type="text" name="total"  class="form-control" placeholder="请输入库存量">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">列表图</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="pic" readonly="" value="">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button" >选择图片
                                </button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img  src="<?php echo $field['thumb']?:'resource/images/nopic.jpg'?>" class="img-responsive img-thumbnail liebiaotu"
                                 width="150" height="100">
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品图册</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button onclick="manyupImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" id="box" style="margin-top:5px;">
                            <img src="<?php echo $field['thumb']?:'resource/images/nopic.jpg'?>" class="img-responsive cha img-thumbnail"
                                 width="150">
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点击次数</label>
                    <div class="col-sm-9">
                        <input type="text" name="click"  class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">商品详情</label>
                    <div class="col-sm-9">
                        <textarea id="intro" name="intro" style="height:300px;width:100%;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">售后服务</label>
                    <div class="col-sm-9">
                        <textarea id="service" name="service" style="height:300px;width:100%;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="tid" value="">
        <button class="btn btn-primary" type="submit">确定</button>
    <input type='hidden' name='__TOKEN__' value='118ba79292aeca8adab19d0041bb8d3b'/></form>


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
    function upImage(obj) {
        require(['util'], function (util) {
            util.image(function (images) {
                $("[name='pic']").val(images[0]);
                $(".liebiaotu").attr('src', images[0]);
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
    function manyupImage(obj) {
        require(['util'], function (util) {
            options = {
                //上传多图
                multiple: true,
            };
            util.image(function (images) {
                $(images).each(function(k,v){
                    $('<li style="float: left;list-style: none"> <img src="'+v+'" class="img-responsive img-thumbnail" height="100" width="150"><input type="hidden" name="logo[]" value="'+v+'"></li>').appendTo('#box');
                })
                $('.cha').remove();
            }, options)
        });
    }
</script>
<script>
    util.ueditor('service', {hash:2,data:'hd'}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
    util.ueditor('intro', {hash:2,data:'hd'}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
</script>
<script>
    function goodsAdd()
    {
        var data = $('#form').serialize();
        $.post("<?php echo u('store')?>",data,function (res) {
            if(res.valid)
            {//成功
                //参数：提示消息，跳转地址，成功
                util.message(res.message,"<?php echo u('index')?>",'success');
            }else{//失败
                util.message(res.message,"",'error');
            }
    },'json')
        return false;
    }
</script>