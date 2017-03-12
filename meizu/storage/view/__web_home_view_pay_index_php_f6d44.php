<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>魅族商城</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/home/css/common.css"/>
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/css/paycenter.css" />
    <link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <script src="<?php echo __ROOT__?>/resource/home/js/jquery.min.js"></script>
    <script src="<?php echo __ROOT__?>/resource/home/js/index.js"></script>
<!--    <script src="<?php echo __ROOT__?>/resource/home/js/product.js"></script>-->
</head>
<body>
<header>
    <div class="top">
        <div class="head">
<!--            <div class="top-left">-->
<!--                <a href="">魅族官网</a>-->
<!--                <a href="">魅族商城</a>-->
<!--                <a href="">Flyme</a>-->
<!--                <a href="">专卖店</a>-->
<!--                <a href="">服务</a>-->
<!--                <a href="">社区</a>-->
<!--            </div>-->
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
                <a href="">
                    <img src="<?php echo __ROOT__?>/resource/images/entry/logo-header.png" alt="">
                </a>
            </div>
            <div class="head-nav">
                <ul>
                    <li><a class="top-item" href="javascript:;">PRO手机</a></li>
                    <li><a class="top-item" href="javascript:;">魅蓝手机</a></li>
                    <li><a class="top-item" href="javascript:;">MX手机</a></li>
                    <li><a class="top-item" href="javascript:;">精选配件</a></li>
                    <li><a class="top-item" href="javascript:;">智能硬件</a></li>
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
    <div id="payment">
        <div class="mzcontainer">
            <div class="payment_header clearfix">
                <div class="icon">
                    <div class="payment_icon success">

                    </div>
                    <div class="info">
                        <div class="main">
                            <h2>订单提交成功，应付金额 <span><?php echo $data['totalprice']?>.00</span>元</h2>
                            <p class="tips">该宝贝为付款减库存,拍下并不代表购买成功哦。请您尽快付款，付款后我们将会尽快安排发货。</p>
                            <p>订单号：<?php echo $data['ordernum']?></p>
                        </div>
                        <div class="other">
                            <div class="tr">
                                <div class="td name">
                                    商品
                                </div>
                                <div class="td value">
                                    <span class="prod"> <?php echo $data['gname']?> <?php foreach ((array)$data['options'] as $k=>$v){?><?php echo $v?> <?php }?> X <?php echo $data['quantity']?></span>
                                </div>
                            </div>
                            <div class="tr">
                                <div class="td name">
                                    收货地址
                                </div>
                                <div class="td value">
                                    <span class="prod"> <?php foreach ((array)$address['city'] as $k=>$v){?><?php echo $v?><?php }?><?php echo $address['address']?>  <?php echo $address['username']?>(收) <?php echo $address['phone']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab_panel" id="tab_panel">
                <ul class="btns clearfix">
                    <li class="active">在线支付</li>
                </ul>
                <ul class="panels clearfix ">
                    <li class="tools_choose active">
                        <div class="clearfix">
                            <div class="radio-box huabei">
                                <label class="radio">
                                    <input type="radio" checked name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
<!--                            <div class="radio-box alipay active">-->
<!--                                <label class="radio">-->
<!--                                    <input type="radio" name="pay" id="" value="" />-->
<!--                                </label>-->
<!--                                <div class="payment_icon">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <div class="clearfix">
                            <div class="radio-box boc">
                                <label class="radio">
                                    <input type="radio" name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
                            <div class="radio-box ccb">
                                <label class="radio">
                                    <input type="radio" name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
                            <div class="radio-box aboc">
                                <label class="radio">
                                    <input type="radio" name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
                            <div class="radio-box icbc">
                                <label class="radio">
                                    <input type="radio" name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
                            <div class="radio-box bocm">
                                <label class="radio">
                                    <input type="radio" name="pay" id="" value="" />
                                </label>
                                <div class="payment_icon">

                                </div>
                            </div>
<!--                            <div class="radio-box bocm">-->
<!--                                <label class="radio">-->
<!--                                    <input type="radio" name="pay" id="" value="" />-->
<!--                                </label>-->
<!--                                <div class="payment_icon">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="radio-box bocm">-->
<!--                                <label class="radio">-->
<!--                                    <input type="radio" name="pay" id="" value="" />-->
<!--                                </label>-->
<!--                                <div class="payment_icon">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="radio-box bocm">-->
<!--                                <label class="radio">-->
<!--                                    <input type="radio" name="pay" id="" value="" />-->
<!--                                </label>-->
<!--                                <div class="payment_icon">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <a href="javascript:;" class="go_to_pay">立即支付</a>
                    </li>
                </ul>
                <script>
                    $(function () {
                        $('.go_to_pay').click(function () {
                            var oid = <?php echo q('get.oid')?>;
                            $.post("<?php echo u('goToPay')?>",{oid:oid},function (res) {
                                if (res.val){
                                    alert('付款成功请等待发货');
                                    location="<?php echo u('entry.index')?>";
                                }
                            },'json')
                        })
                    })
                </script>
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
<!--                    <img width="20" height="21" src="<?php echo __ROOT__?>/resource/images/entry/foot2.png" alt="">-->
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