<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/common.css"/>
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/css/mycenter.css" />
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
    <script src="{{__ROOT__}}/resource/home/js/jquery.min.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/index.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/mycenter.js"></script>
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
            <a class="active" href="">我的订单</a>
        </div>
        <div class="main">
            <div class="left-nav">
                <div class="nav-main">
                    <a class="type-title" href="javascript:;">
                        <i class="icon-file-alt"></i>
                        订单中心
                    </a>
                    <a class="active" href="">我的订单</a>
                    <a class="type-title" href="javascript:;">
                        <i class="icon-user"></i>
                        个人中心
                    </a>
                    <!--                    <a href="">地址管理</a>-->
                    <a href="{{u('collect')}}">我的收藏</a>
<!--                    <a href="javascript:;" class="type-title">-->
<!--                        <i class="icon-heart"></i>-->
<!--                        服务中心-->
<!--                    </a>-->
<!--                    <a href="">退款/退货跟踪</a>-->
                </div>
            </div>
            <div class="right-content">
                <div class="order-main">
                    <div id="tab-btn" class="type-tab-btn">
                        <a class="active" href="javascript:;">全部订单</a>
                        <!--<i class="line">|</i>-->
                        <a href="javascript:;">待付款</a>
                        <!--<i class="line">|</i>-->
                        <a  href="javascript:;">待发货</a>
                        <!--<i class="line">|</i>-->
                        <!--                        <a  href="javascript:;">已发货</a>-->
                        <!--<i class="line">|</i>-->
                        <!--                        <a  href="javascript:;">其他</a>-->
                    </div>
                    <div class="list-head">
                        <ul>
                            <li class="w50">订单明细</li>
                            <li class="w125">商品物流</li>
                            <li class="w125">实付金额</li>
                            <li class="w125">状态</li>
                            <li class="w125">操作</li>
                        </ul>
                    </div>
                    <div class="table-list">
                        <div class="load-content" >
                            <foreach from="$allOrderData" key="$k" value="$v">
                                <table orid="{{$v['orid']}}" class="order-item">
                                    <tbody>
                                    <tr class="tr-head">
                                        <td class="title">
                                            <div class="f-f1">
                                                下单时间:
                                                <span class="time">{{date('Y-m-d H:i:s',$v['ordertime'])}}</span>
                                                订单号:
                                                <span class="order-num">{{$v['ordernum']}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="list-box bl br bb">
                                        <td class="list br">
                                            <div class="item">
                                                <a class="pruduct" href="{{u('item.index',['gid'=>$v['gid']])}}">
                                                    <img class="f" width="100" height="100" src="{{$v['goods']}}" alt="">
                                                </a>
                                                <div class="desc">
                                                    <div class="vertic">
                                                        <span>
                                                            <a class="nameWidth" href="{{u('item.index',['gid'=>$v['gid']])}}">{{$v['gname']}} {{$v['options'][0]}} {{$v['options'][1]}} {{$v['options'][2]}}</a>
                                                            <p>￥{{$v['price']}} ×{{$v['quantity']}}</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="center br">
                                            <div class="priceDiv  weight">
                                                ￥{{$v['totalprice']}}
                                            </div>
                                        </td>
                                        <td class="center br">
                                            <div class="priceDiv">
                                                <if value="$v['orderstatus'] == 1">待付款</if>
                                                <if value="$v['orderstatus'] == 2">待发货</if>
                                                <if value="$v['orderstatus'] == 3">已发货</if>
                                                <if value="$v['orderstatus'] == 4">订单已取消</if>
                                            </div>
                                        </td>
                                        <td class="center br">
                                            <ul orid="{{$v['orid']}}">
                                                <if value="$v['orderstatus'] == 1">
                                                    <li class="gopay">
                                                        <a href="{{u('pay.index',['oid'=>$v['orid']])}}">立即付款</a>
                                                    </li>
                                                    <li class="cancel"><a href="{{u('cancel',['orid'=>$v['orid']])}}">取消订单</a></li>
                                                    <li class="more">删除订单</li>
                                                </if>
                                                <if value="$v['orderstatus'] == 2">
                                                    <li class="more">删除订单</li>
                                                    <!--                                                <li class="more">删除订单</li>-->
                                                </if>
                                                <if value="$v['orderstatus'] == 3">
                                                    <li class="cancel"><a href="{{u('cancel')}}">取消订单</a></li>
                                                </if>
                                                <if value="$v['orderstatus'] == 4">
                                                    <li class="more">删除订单</li>
                                                </if>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </foreach>
                        </div>
                    </div>
                    <script>
                        $(function () {
                            $('.more').click(function () {
                                var orid = $(this).parents('ul').attr('orid');
//                                alert(orid);
                                if(confirm('确定删除？')){
                                    $.post("{{u('del')}}",{orid:orid},function (res) {
                                        if (res.val){
                                            $("table[orid='"+orid+"']").remove();
//                                            alert(1);
                                        }
                                    },'json')
                                }
                            })
                        })
                    </script>
                    <div class="table-list hide" >
                        <div class="load-content" >
                            <foreach from="$allOrderData" key="$k" value="$v">
                                <if value="$allOrderData[$k]['orderstatus'] == 1">
                                    <table orid="{{$v['orid']}}" class="order-item">
                                        <tbody>
                                        <tr class="tr-head">
                                            <td class="title">
                                                <div class="f-f1">
                                                    下单时间:
                                                    <span class="time">{{date('Y-m-d H:i:s',$v['ordertime'])}}</span>
                                                    订单号:
                                                    <span class="order-num">{{$v['ordernum']}}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="list-box bl br bb">
                                            <td class="list br">
                                                <div class="item">
                                                    <a class="pruduct" href="{{u('item.index',['gid'=>$v['gid']])}}">
                                                        <img class="f" width="100" height="100" src="{{$v['goods']}}" alt="">
                                                    </a>
                                                    <div class="desc">
                                                        <div class="vertic">
                                                        <span>
                                                            <a class="nameWidth" href="{{u('item.index',['gid'=>$v['gid']])}}">{{$v['gname']}} {{$v['options'][0]}} {{$v['options'][1]}} {{$v['options'][2]}}</a>
                                                            <p>￥{{$v['price']}} ×{{$v['quantity']}}</p>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <div class="priceDiv  weight">
                                                    ￥{{$v['totalprice']}}
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <div class="priceDiv">
                                                    <if value="$v['orderstatus'] == 1">待付款</if>
                                                    <if value="$v['orderstatus'] == 2">待发货</if>
                                                    <if value="$v['orderstatus'] == 3">已发货</if>
                                                    <if value="$v['orderstatus'] == 4">订单已取消</if>
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <ul orid="{{$v['orid']}}">
                                                    <if value="$v['orderstatus'] == 1">
                                                        <li class="gopay">
                                                            <a href="{{u('pay.index',['oid'=>$v['orid']])}}">立即付款</a>
                                                        </li>
                                                        <li class="cancel"><a href="{{u('cancel',['orid'=>$v['orid']])}}">取消订单</a></li>
                                                        <li class="more">删除订单</li>
                                                    </if>
                                                    <if value="$v['orderstatus'] == 2">
                                                        <li class="cancel">取消订单</li>
                                                        <!--                                                <li class="more">删除订单</li>-->
                                                    </if>
                                                    <if value="$v['orderstatus'] == 3">
                                                        <li class="cancel"><a href="{{u('cancel')}}">取消订单</a></li>
                                                    </if>
                                                    <if value="$v['orderstatus'] == 4">
                                                        <li class="more">删除订单</li>
                                                    </if>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </if>
                            </foreach>
                        </div>
                    </div>

                    <div class="table-list hide" >
                        <div class="load-content" >
                            <foreach from="$allOrderData" key="$k" value="$v">
                                <if value="$allOrderData[$k]['orderstatus'] == 2">
                                    <table orid="{{$v['orid']}}" class="order-item">
                                        <tbody>
                                        <tr class="tr-head">
                                            <td class="title">
                                                <div class="f-f1">
                                                    下单时间:
                                                    <span class="time">{{date('Y-m-d H:i:s',$v['ordertime'])}}</span>
                                                    订单号:
                                                    <span class="order-num">{{$v['ordernum']}}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="list-box bl br bb">
                                            <td class="list br">
                                                <div class="item">
                                                    <a class="pruduct" href="{{u('item.index',['gid'=>$v['gid']])}}">
                                                        <img class="f" width="100" height="100" src="{{$v['goods']}}" alt="">
                                                    </a>
                                                    <div class="desc">
                                                        <div class="vertic">
                                                        <span>
                                                            <a class="nameWidth" href="{{u('item.index',['gid'=>$v['gid']])}}">{{$v['gname']}} {{$v['options'][0]}} {{$v['options'][1]}} {{$v['options'][2]}}</a>
                                                            <p>￥{{$v['price']}} ×{{$v['quantity']}}</p>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <div class="priceDiv  weight">
                                                    ￥{{$v['totalprice']}}
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <div class="priceDiv">
                                                    <if value="$v['orderstatus'] == 1">待付款</if>
                                                    <if value="$v['orderstatus'] == 2">待发货</if>
                                                    <if value="$v['orderstatus'] == 3">已发货</if>
                                                    <if value="$v['orderstatus'] == 4">订单已取消</if>
                                                </div>
                                            </td>
                                            <td class="center br">
                                                <ul orid="{{$v['orid']}}">
                                                    <if value="$v['orderstatus'] == 1">
                                                        <li class="gopay">
                                                            <a href="{{u('pay.index',['oid'=>$v['orid']])}}">立即付款</a>
                                                        </li>
                                                        <li class="cancel"><a href="{{u('cancel',['orid'=>$v['orid']])}}">取消订单</a></li>
                                                        <li class="more">删除订单</li>
                                                    </if>
                                                    <if value="$v['orderstatus'] == 2">
                                                        <li class="cancel">取消订单</li>
                                                        <!--                                                <li class="more">删除订单</li>-->
                                                    </if>
                                                    <if value="$v['orderstatus'] == 3">
                                                        <li class="cancel"><a href="{{u('cancel')}}">取消订单</a></li>
                                                    </if>
                                                    <if value="$v['orderstatus'] == 4">
                                                        <li class="more">删除订单</li>
                                                    </if>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </if>
                            </foreach>
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
                ©2016 Meng Lingyue | 邮箱：249005779@qq.com | 后盾IT教育

            </p>
        </div>
    </div>
</footer>
</body>
</html>