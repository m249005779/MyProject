<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/home/css/common.css"/>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/css/address.css" />
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
    <script src="<?php echo __ROOT__?>/resource/home/js/jquery.min.js"></script>
    <script src="<?php echo __ROOT__?>/resource/home/js/index.js"></script>
</head>
<body>
<header>
    <div class="top">
        <div class="head">
            <div class="top-left">
                <a href="">魅族官网</a>
                <a href="">魅族商城</a>
                <a href="">Flyme</a>
                <a href="">专卖店</a>
                <a href="">服务</a>
                <a href="">社区</a>
            </div>
            <div class="top-right">
                <ul class="top-info">
                    <li>
                        <a href="">我的收藏

                            <div class="top-new">
                                new
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">我的订单</a>
                    </li>
                    <li>
                        <a href="">登录</a>
                    </li>
                    <li>
                        <a href="">注册</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav-mid">
            <div class="logo">
                <a href="">
                    <img src="<?php echo __ROOT__?>/resource/images/entry/logo-header.png" alt="">
                </a>
            </div>
            <div class="head-nav">
                <ul>
                    <li><a class="top-item" href="">PRO手机</a></li>
                    <li><a class="top-item" href="">魅蓝手机</a></li>
                    <li><a class="top-item" href="">MX手机</a></li>
                    <li><a class="top-item" href="">精选配件</a></li>
                    <li><a class="top-item" href="">智能硬件</a></li>
                </ul>
                <div class="top-hide">
                    <div class="container">
                        <ul class="menu-list">
                            <li class="">
                                <a href="">
                                    <div class="figure">
                                        <img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">
                                    </div>
                                    <div class="pro-name">魅族PRO6</div>
                                    <div class="price">￥2499</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-list">
                            <li class="">
                                <a href="">
                                    <div class="figure">
                                        <img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">
                                    </div>
                                    <div class="pro-name">魅族PRO6</div>
                                    <div class="price">￥2488</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-list">
                            <li class="">
                                <a href="">
                                    <div class="figure">
                                        <img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">
                                    </div>
                                    <p class="pro-name">魅族PRO645</p>
                                    <div class="price">￥2477</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-list">
                            <li class="">
                                <a href="">
                                    <div class="figure">
                                        <img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">
                                    </div>
                                    <div class="pro-name">魅族PRO6</div>
                                    <div class="price">￥2466</div>
                                </a>
                            </li>
                        </ul>
                        <ul class="menu-list">
                            <li class="">
                                <a href="">
                                    <div class="figure">
                                        <img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">
                                    </div>
                                    <div class="pro-name">魅族PRO6</div>
                                    <div class="price">￥2455</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="store-warp">
        <div class="crumbs">
            <a href="">首页 > </a>
            <a href="">我的商城 > </a>
            <a class="active" href="">我的订单</a>
        </div>
        <div class="main">
            <div class="left-nav">
                <div class="nav-main">
                    <a class="type-title" href="javascript:;">
                        <i class="icon-file-alt"></i>
                        订单中心
                    </a>
                    <a href="">我的订单</a>
                    <a class="type-title" href="javascript:;">
                        <i class="icon-user"></i>
                        个人中心
                    </a>
                    <a class="active" href="">地址管理</a>
                    <a href="">我的收藏</a>
                    <a href="javascript:;" class="type-title">
                        <i class="icon-heart"></i>
                        服务中心
                    </a>
                    <a href="">退款/退货跟踪</a>
                </div>
            </div>
            <div class="right-content">
                <div class="address-main">
                    <div class="main">
                        <div class="row">
                            <span class="title">新增收货地址</span>
                            <span class="gray">
                                (您目前已有地址
                                <i class="already">1</i>
                                个)
                            </span>
                        </div>
                        <form id="valid-form" action="" method="post">
                            <div class="content">
                                <div class="row name-phone">
                                    <div class="address-name">
                                        <span class="">
                                            收货人姓名
                                            <i class="mark">*</i>
                                        </span>
                                        <input id="name" class="varify" type="text" maxlength="12" placeholder="长度不能超过12个字">
                                    </div>
                                    <div class="address-phone">
                                        <span>
                                            收货人手机号
                                            <i class="mark">*</i>
                                        </span>
                                        <input id="phone" class="varify" type="text" maxlength="11" placeholder="请输入11位手机号">
                                    </div>
                                </div>
                                <div class="row receverAddress">
                                    <span>
                                        收货人地址
                                        <i class="mark">*</i>
                                        <input id="fullAddress" class="varify" type="text" maxlength="50" placeholder="请输入不超过50个字的详细地址">
                                    </span>
                                </div>
                                <div class="opreat">
                                    <label for="default">
                                        <input class="setDefault" type="checkbox" id="default">
                                        设为默认
                                    </label>
                                    <a class="saveAddress" href="javascript:;">保存</a>
                                </div>
                            </div>
                        <input type='hidden' name='__TOKEN__' value='d64cb36d21fcc2767f9886d561626474'/></form>
                        <div class="list">
                            <div class="row">
                                <div class="title">
                                    <div class="c1">已有地址</div>
                                </div>
                            </div>
                            <div class="listHead">
                                <span class="center w15">收货人姓名</span>
                                <span class="center w35">收货人地址</span>
                                <span class="center w25">收货人手机号</span>
                                <span class="center w10">操作</span>
                            </div>
                            <ul id="table-list">
                                <li>
                                    <span class="center w15">liuchaoqun</span>
                                    <span class="w35">北京北京市朝阳区崔各庄地区顺白路12号后盾IT教育</span>
                                    <span class="w25">18610684369</span>
                                    <span class="w10">
                                        <a class="edit" href="javascript:;">修改</a>
                                        <a class="delete" href="javascript:;">删除</a>
                                    </span>
                                    <span class="left w15">
                                        <a class="beDefault" href="">设为默认</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="footer-servive">
            <ul>
                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
                <li class="line">
                    <span></span>
                </li>

                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
                <li class="line">
                    <span></span>
                </li>

                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
                <li class="line">
                    <span></span>
                </li>

                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
                <li class="line">
                    <span></span>
                </li>

                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
                <li class="line">
                    <span></span>
                </li>

                <li class="item">
                    <span class="img"></span>
                    <p>
                        <span class="blod">7天</span>
                        <span class="normal">无理由退货</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="footer-nav">
            <div class="nav-item">
                <h4>帮助说明</h4>
                <ul>
                    <li><a href="">支付方式</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="nav-item">
                <h4>帮助说明</h4>
                <ul>
                    <li><a href="">支付方式</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="nav-item">
                <h4>帮助说明</h4>
                <ul>
                    <li><a href="">支付方式</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="nav-item">
                <h4>帮助说明</h4>
                <ul>
                    <li><a href="">支付方式</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div class="nav-custom">
                <h4>2小时后盾服务热线</h4>
                <a class="" href="">
                    <h3>18610684369</h3>
                </a>
                <a class="nav-btn" href="">
                    <img width="20" height="21" src="<?php echo __ROOT__?>/resource/images/entry/foot2.png" alt="">
                    2小时不在线客服
                </a>
            </div>
        </div>
        <div class="footer-end">
            <p>
                ©2016 Meng Lingyue. | 邮箱：249005779@qq.com | 后盾IT教育

            </p>
        </div>
    </div>
</footer>
</body>
</html>