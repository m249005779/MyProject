<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/common.css"/>
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/css/me.css" />
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
    <script src="{{__ROOT__}}/resource/home/js/jquery.min.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/index.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/me.js"></script>
</head>
<body>
<header>
    <div class="top">
        <div class="head">
            <div class="top-left">
<!--                <a href="">魅族官网</a>-->
<!--                <a href="">魅族商城</a>-->
<!--                <a href="">Flyme</a>-->
<!--                <a href="">专卖店</a>-->
<!--                <a href="">服务</a>-->
<!--                <a href="">社区</a>-->
            </div>
            <div class="top-right">
                <ul class="top-info">
                    <if value="!$_SESSION['home']['account']">
                        <li>
                            <a href="{{u('login.index')}}">我的收藏

                                <div class="top-new">
                                    new
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{u('login.index')}}">我的订单</a>
                        </li>

                        <li>
                            <a href="{{u('login.index')}}">登录</a>
                        </li>
                        <li>
                            <a href="{{u('login.register')}}">注册</a>
                        </li>
                        <else>
                            <li>
                                <a href="{{u('center.collect')}}">我的收藏

                                    <div class="top-new">
                                        new
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{u('login.index')}}">我的订单</a>
                            </li>
                            <li>
                                欢迎<a href="javascript:;">{{$_SESSION['home']['account']}}</a>
                                <a href="{{u('login.out')}}">退出</a>
                            </li>
                    </if>
                </ul>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav-mid">
            <div class="logo">
                <a href="{{u('entry.index')}}">
                    <img width="115" src="{{__ROOT__}}/resource/images/entry/888.png" alt="">
                </a>
            </div>
            <div class="head-nav">
                <ul>
                    <li class="hov"><a class="top-item" href="javascript:;">PRO手机</a></li>
                    <li class="hov"><a class="top-item" href="javascript:;">魅蓝手机</a></li>
                    <!--					<li class="hov"><a class="top-item" href="javascript:;">MX手机</a></li>-->
                    <!--					<li class="hov"><a class="top-item" href="javascript:;">精选配件</a></li>-->
                    <!--					<li class="hov"><a class="top-item" href="javascript:;">智能硬件</a></li>-->
                </ul>
                <div class="top-hide">
                    <div class="container">
                        <ul class="menu-list">
                            <foreach from="$proData" key="$k" value="$v">
                                <li class="">
                                    <a href="{{u('item.index',['gid'=>$v['gid']])}}">
                                        <div class="figure">
                                            <img width="126" height="126" src="{{$v['pic']}}" alt="">
                                        </div>
                                        <div class="pro-name">{{$v['gname']}}</div>
                                        <div class="price">￥{{$v['shopprice']}}</div>
                                    </a>
                                </li>
                            </foreach>
                        </ul>
                        <ul class="menu-list">
                            <foreach from="$blueData" key="$k" value="$v">
                                <li class="">
                                    <a href="{{u('item.index',['gid'=>$v['gid']])}}">
                                        <div class="figure">
                                            <img width="126" height="126" src="{{$v['pic']}}" alt="">
                                        </div>
                                        <div class="pro-name">{{$v['gname']}}</div>
                                        <div class="price">￥{{$v['shopprice']}}</div>
                                    </a>
                                </li>
                            </foreach>
                        </ul>
                        <!--						<ul class="menu-list">-->
                        <!--							<li class="">-->
                        <!--								<a href="">-->
                        <!--									<div class="figure">-->
                        <!--										<img src="{{__ROOT__}}/resource/images/entry/1.png" alt="">-->
                        <!--									</div>-->
                        <!--									<p class="pro-name">魅族PRO645</p>-->
                        <!--									<div class="price">￥2477</div>-->
                        <!--								</a>-->
                        <!--							</li>-->
                        <!--						</ul>-->
                        <!--						<ul class="menu-list">-->
                        <!--							<li class="">-->
                        <!--								<a href="">-->
                        <!--									<div class="figure">-->
                        <!--										<img src="{{__ROOT__}}/resource/images/entry/1.png" alt="">-->
                        <!--									</div>-->
                        <!--									<div class="pro-name">魅族PRO6</div>-->
                        <!--									<div class="price">￥2466</div>-->
                        <!--								</a>-->
                        <!--							</li>-->
                        <!--						</ul>-->
                        <!--						<ul class="menu-list">-->
                        <!--							<li class="">-->
                        <!--								<a href="">-->
                        <!--									<div class="figure">-->
                        <!--										<img src="{{__ROOT__}}/resource/images/entry/1.png" alt="">-->
                        <!--									</div>-->
                        <!--									<div class="pro-name">魅族PRO6</div>-->
                        <!--									<div class="price">￥2455</div>-->
                        <!--								</a>-->
                        <!--							</li>-->
                        <!--						</ul>-->
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="store-warp">
        <div class="crumbs">
            <a href="{{u('entry.index')}}">首页 > </a>
<!--            <a href="">我的商城 > </a>-->
            <a class="active" href="{{u('index')}}">我的订单</a>
        </div>
        <div class="main">
            <div class="left-nav">
                <div class="nav-main">
                    <a class="type-title" href="javascript:;">
                        <i class="icon-file-alt"></i>
                        订单中心
                    </a>
                    <a href="{{u('index')}}">我的订单</a>
                    <a class="type-title" href="javascript:;">
                        <i class="icon-user"></i>
                        个人中心
                    </a>
<!--                    <a href="">地址管理</a>-->
                    <a  class="active" href="javascript:;">我的收藏</a>
<!--                    <a href="javascript:;" class="type-title">-->
<!--                        <i class="icon-heart"></i>-->
<!--                        服务中心-->
<!--                    </a>-->
<!--                    <a href="">退款/退货跟踪</a>-->
                </div>
            </div>
            <div class="right-content">
                <div class="collect-main">
                    <div class="type-tab-btn">
                        <a class="active" href="javascript:;">已收藏商品</a>
                    </div>
                    <div id="table-list" class="type-cotain">
                        <div class="ui-load-content">
                            <div class="clearfix">
                                <foreach from="$goodsData" key="$k" value="$v">
                                <div class="item">
                                    <i gid="{{$v['gid']}}" id="" class="icon-trash trash"></i>
                                    <a href="">
                                        <img src="{{$v['pic']}}" alt="">
                                    </a>
                                    <a target="_blank" href="">
                                        <h3>{{$v['gname']}}</h3>
                                    </a>
                                </div>
                                </foreach>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
<!--        <div class="footer-servive">-->
<!--            <ul>-->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--                <li class="line">-->
<!--                    <span></span>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--                <li class="line">-->
<!--                    <span></span>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--                <li class="line">-->
<!--                    <span></span>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--                <li class="line">-->
<!--                    <span></span>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--                <li class="line">-->
<!--                    <span></span>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <span class="img"></span>-->
<!--                    <p>-->
<!--                        <span class="blod">7天</span>-->
<!--                        <span class="normal">无理由退货</span>-->
<!--                    </p>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="footer-nav">-->
<!--            <div class="nav-item">-->
<!--                <h4>帮助说明</h4>-->
<!--                <ul>-->
<!--                    <li><a href="">支付方式</a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="nav-item">-->
<!--                <h4>帮助说明</h4>-->
<!--                <ul>-->
<!--                    <li><a href="">支付方式</a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="nav-item">-->
<!--                <h4>帮助说明</h4>-->
<!--                <ul>-->
<!--                    <li><a href="">支付方式</a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="nav-item">-->
<!--                <h4>帮助说明</h4>-->
<!--                <ul>-->
<!--                    <li><a href="">支付方式</a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                    <li><a href=""></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--            <div class="nav-custom">-->
<!--                <h4>2小时后盾服务热线</h4>-->
<!--                <a class="" href="">-->
<!--                    <h3>18610684369</h3>-->
<!--                </a>-->
<!--                <a class="nav-btn" href="">-->
<!--                    <img width="20" height="21" src="{{__ROOT__}}/resource/images/entry/foot2.png" alt="">-->
<!--                    2小时不在线客服-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
        <div class="footer-end">
            <p>
                ©2016 Meng Lingyue. | 邮箱：249005779@qq.com | 后盾IT教育

            </p>
        </div>
    </div>
</footer>
</body>
</html>
<script>
    $(function () {
//        $('.trash').click(function () {
//            var gid = $(this).attr("gid");
//            $.post("u{{u('ajaxCollect')}}",{gid:gid},function (res) {
//                if(res.valid){
////                    $(this).parent(['.item']).remove();
//                }
//            },'json')
//        })
            $('.trash').click(function () {
                var gid = $(this).attr("gid");
                $.ajax({
                    type:"post",
                    url:'{{u('ajaxCollect')}}',
                    data:{gid:gid},
                })
                $(this).parent(['.item']).remove();
            })
    })
</script>