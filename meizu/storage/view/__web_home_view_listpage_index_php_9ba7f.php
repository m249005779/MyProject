<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/home/css/common.css"/>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/css/listpage.css" />
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <script src="<?php echo __ROOT__?>/resource/home/js/jquery.min.js"></script>
    <script src="<?php echo __ROOT__?>/resource/home/js/index.js"></script>
    <script src="<?php echo __ROOT__?>/resource/home/js/listpage.js"></script>
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
                    <?php if(!$_SESSION['home']['account']){?>
                
                        <li>
                            <a href="<?php echo u('login.index')?>">我的收藏

                                <div class="top-new">
                                    new
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo u('login.index')?>">我的订单</a>
                        </li>

                        <li>
                            <a href="<?php echo u('login.index')?>">登录</a>
                        </li>
                        <li>
                            <a href="<?php echo u('login.register')?>">注册</a>
                        </li>
                        <?php }else{?>
                            <li>
                                <a href="<?php echo u('center.collect')?>">我的收藏

                                    <div class="top-new">
                                        new
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo u('center.index')?>">我的订单</a>
                            </li>
                            <li>
                                欢迎<a href="javascript:;"><?php echo $_SESSION['home']['account']?></a>
                                <a href="<?php echo u('login.out')?>">退出</a>
                            </li>
                    
               <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <nav>
        <div class="nav-mid">
            <div class="logo">
                <a href="<?php echo u('entry.index')?>">
                    <img width="115" src="<?php echo __ROOT__?>/resource/images/entry/888.png" alt="">
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
                            <?php foreach ((array)$proData as $k=>$v){?>
                                <li class="">
                                    <a href="<?php echo u('item.index',['gid'=>$v['gid']])?>">
                                        <div class="figure">
                                            <img width="126" height="126" src="<?php echo $v['pic']?>" alt="">
                                        </div>
                                        <div class="pro-name"><?php echo $v['gname']?></div>
                                        <div class="price">￥<?php echo $v['shopprice']?></div>
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                        <ul class="menu-list">
                            <?php foreach ((array)$blueData as $k=>$v){?>
                                <li class="">
                                    <a href="<?php echo u('item.index',['gid'=>$v['gid']])?>">
                                        <div class="figure">
                                            <img width="126" height="126" src="<?php echo $v['pic']?>" alt="">
                                        </div>
                                        <div class="pro-name"><?php echo $v['gname']?></div>
                                        <div class="price">￥<?php echo $v['shopprice']?></div>
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                        <!--						<ul class="menu-list">-->
                        <!--							<li class="">-->
                        <!--								<a href="">-->
                        <!--									<div class="figure">-->
                        <!--										<img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">-->
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
                        <!--										<img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">-->
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
                        <!--										<img src="<?php echo __ROOT__?>/resource/images/entry/1.png" alt="">-->
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
    <div class="container">
        <div class="crumbs">
            <a href="<?php echo u('entry.index')?>">首页&nbsp; > &nbsp;</a>

            <span class="level">
                 保护套 / 后盖 / 贴膜
            </span>
        </div>
        <div class="selector">
            <!--商品分类-->
            <div class="slprop">
                <div class="sl-line">
                    <div class="mod-key">
                        <span>分类:</span>
                    </div>
                    <div class="mod-value">
                        <div class="mod-list">
                            <ul>
                                <li>
                                    <a <?php if(!q('get.sid')){?>
                style="color:#1fa7ea"
               <?php }?> href="<?php echo u('listpage.index',['cid'=>q('get.cid')])?>">全部</a>
                                </li>
                                <?php foreach ((array)$categoryData as $k=>$v){?>
                                <li>
                                    <a <?php if(q('get.sid') == $v['cid']){?>
                style="color:#1fa7ea"
               <?php }?> href="<?php echo u('listpage.index',['cid'=>q('get.cid'),'sid'=>$v['cid']])?>"><?php echo $v['cname']?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="mod-est">
<!--                        <a href="">更多-->
<!--                            <i class="icon-angle-right"></i>-->
<!--                        </a>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="filter" id="filter">
            <div class="filter-order">
                <a class="" href="javascript:;">推荐</a>
<!--                <a href="javascript:;">新品</a>-->
<!--                <a href="javascript:;">价格-->
<!--                    <i style="color: red" class="icon-angle-down"></i>-->
                </a>
            </div>
        </div>
        <div class="good-list" id="good-list">
            <ul class="good-list-warp addfix">
                <?php foreach ((array)$goodsData as $k=>$v){?>
                <li class="item">
                    <dl class="item-warp">
                        <dd class="mod-pic">
                            <a href="<?php echo u('item.index',['gid'=>$v['gid']])?>">
                                <img height="220" width="220" src="<?php echo $v['pic']?>" alt="">
                            </a>
                        </dd>
                        <dd class="mod-name">
                            <a href=""><?php echo $v['gname']?></a>
                        </dd>
                        <dd class="mod-price">
                            <em>￥</em>
                            <i><?php echo $v['shopprice']?></i>
                        </dd>
                    </dl>
                </li>
                <?php }?>
            </ul>

<!--            <ul class="good-list-warp addfix">-->
<!--                <li class="item">-->
<!--                    <dl class="item-warp">-->
<!--                        <dd class="mod-pic">-->
<!--                            <a href="">-->
<!--                                <img height="220" width="220" src="<?php echo __ROOT__?>/resource/images/listpage/1.png" alt="">-->
<!--                            </a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-name">-->
<!--                            <a href="">魅蓝Max高透保护膜</a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-price">-->
<!--                            <em>￥</em>-->
<!--                            <i>28</i>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <dl class="item-warp">-->
<!--                        <dd class="mod-pic">-->
<!--                            <a href="">-->
<!--                                <img height="220" width="220" src="<?php echo __ROOT__?>/resource/images/listpage/1.png" alt="">-->
<!--                            </a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-name">-->
<!--                            <a href="">魅蓝Max高透保护膜</a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-price">-->
<!--                            <em>￥</em>-->
<!--                            <i>27</i>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <dl class="item-warp">-->
<!--                        <dd class="mod-pic">-->
<!--                            <a href="">-->
<!--                                <img height="220" width="220" src="<?php echo __ROOT__?>/resource/images/listpage/1.png" alt="">-->
<!--                            </a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-name">-->
<!--                            <a href="">魅蓝Max高透保护膜</a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-price">-->
<!--                            <em>￥</em>-->
<!--                            <i>27</i>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <dl class="item-warp">-->
<!--                        <dd class="mod-pic">-->
<!--                            <a href="">-->
<!--                                <img height="220" width="220" src="<?php echo __ROOT__?>/resource/images/listpage/1.png" alt="">-->
<!--                            </a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-name">-->
<!--                            <a href="">魅蓝Max高透保护膜</a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-price">-->
<!--                            <em>￥</em>-->
<!--                            <i>27</i>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!---->
<!--                <li class="item">-->
<!--                    <dl class="item-warp">-->
<!--                        <dd class="mod-pic">-->
<!--                            <a href="">-->
<!--                                <img height="220" width="220" src="<?php echo __ROOT__?>/resource/images/listpage/1.png" alt="">-->
<!--                            </a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-name">-->
<!--                            <a href="">魅蓝Max高透保护膜</a>-->
<!--                        </dd>-->
<!--                        <dd class="mod-price">-->
<!--                            <em>￥</em>-->
<!--                            <i>27</i>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </li>-->
<!--            </ul>-->
        </div>
        <?php if($forYouData){?>
                
        <div class="recommend" id="recommen">
            <div class="recommend-hd">
                <h2>为您推荐</h2>
                <div class="mod-control">
                    <a id="last" class="disabled" href="javascript:;">
                        <i class="icon-angle-left"></i>
                    </a>
                    <a id="next" href="javascript:;">
                        <i class="icon-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="recommend-silder">
                <div class="flex-viewport">
                    <ul class="silder-warp" id="silder-warp">
                        <?php foreach ((array)$forYouData as $k=>$v){?>
                        <li>
                            <a href="<?php echo u('item.index',['gid'=>$v['gid']])?>">
                                <div class="mod-pic">
                                    <img width="180px" height="180px" src="<?php echo $v['pic']?>" alt="">
                                </div>
                                <div class="mod-desc">
                                    <h4><?php echo $v['gname']?></h4>
                                    <h6></h6>
                                    <p>
                                        ￥
                                        <span><?php echo $v['shopprice']?></span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        
               <?php }?>
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
<!--                    <img width="20" height="21" src="<?php echo __ROOT__?>/resource/images/listpage/foot2.png" alt="">-->
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