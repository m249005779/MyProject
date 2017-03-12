<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/common.css"/>
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/css/product.css" />
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <script src="{{__ROOT__}}/resource/home/js/jquery.min.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/index.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/product.js"></script>
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
                                <a href="{{u('center.index')}}">我的订单</a>
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
    <div class="container">
        <div class="crumbs clearfix">
            <a href="{{u('entry.index')}}" class="">首页</a>
            &nbsp;>&nbsp;
            <a class="ellipsis crumbs-title">{{$goodsData['gname']}}</a>
        </div>
        <div class="row">
            <div class="preview" id="preview">
                <div class="preview-booth">
                    <foreach from="$detailData['big']" key="$k" value="$v">
                    <a href="javascript:;" id="J_imgBooth" class="hide">
                        <img src="{{$v}}" height="375" width="375"/>
                    </a>
                    </foreach>
                </div>
                <ul class="preview-thumb clearfix" id="J_previewThumb">
                    <foreach from="$detailData['medium']" key="$k" value="$v">
                    <li>
                        <a href="javascript:;">
                            <img src="{{$v}}" height="75" width="75"/>
                        </a>
                    </li>
                    </foreach>
                </ul>
            </div>
            <div class="property" id="property">
                <div class="property-hd">
                    <h1>{{$goodsData['gname']}}</h1>
                    <p class="mod-info">{{$tData['网络类型'][0]}}</p>
                </div>
                <div class="property-sell">
                    <dl class="property-sell-price clearfix">
                        <dt class="vm-metatit" id="J_discountTag">
                            价<span class="s-space"></span>格&nbsp;:
                        </dt>
                        <dd>
                            <div class="mod-price">
                                <small>¥</small>
                                <span id="J_price" class="vm-money">
											{{$goodsData['shopprice']}}
										</span>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="property-set">
                    <foreach from="$specData" key="$k" value="$v">
                    <dl class="property-set-sale">
                        <dt class="vm-metatit taname">{{$v['taname']}}:</dt>
                        <dd class="clearfix net">
                            <foreach from="$v['tavalue']" key="$kk" value="$vv">
                            <a href="javascript:;" taname="{{$v['taname']}}" gtid="{{$vv['gtid']}}" class="">
                                <span>{{$vv['gtvalue']}}</span>
                            </a>
                            </foreach>
                        </dd>
                    </dl>
                    </foreach>
                    <script>
                        $(function () {
                            $('.net a').click(function () {
                                if($('.selected').length != {{count($specData)}}){
                                    return false;
                                }
                                var combine = '';
                                $.each($('.selected'),function () {
                                    combine += $(this).attr('gtid') + ',';
                                })
//                                alert(combine);
//                                alert(combine);
                                var gid = {{q('get.gid')}};
                                $.post("{{u('ajaxGetTotal')}}",{gid:gid,combine:combine},function (res) {
                                    if(res.valid){
                                        $('#J_btnBuy').addClass('btn-primary').removeClass('huise');
//                                        alert(res.total)
                                        $('#kucun').html(res.total + '件');
                                    }else{
                                        $('#J_btnBuy').addClass('huise').removeClass('btn-primary');
                                        $('#kucun').html(0 + '件');
                                    }
                                },'json')
                            })
                        })
                    </script>
                    <script>
                        $(function () {
                           if(!$('.net a').hasClass('selected')) {
                               $('#J_btnBuy').addClass('huise').removeClass('btn-primary');
                           }
                            $('#J_btnBuy').click(function () {
                                if($(this).is('.huise')){
                                    alert('商品缺货');
                                    return
                                }
                                var data = {
                                    'gid':{{q('get.gid')}},
                                    'num':$('#J_quantity').val(),
                                    'options':{},
                                    'combine':'',
                                }
                                $.each($('.selected'),function () {
                                    data.options[$(this).attr('taname')] = $(this).children('span').text();
                                    data.combine += $(this).attr('gtid') + ','
                                })
                                $.post("{{u('ajaxAddCart')}}",data,function(res){
                                    if (res.val){
                                        location="{{u('order.index')}}";
                                    }else{
                                        location="{{u('login.index')}}";
                                    }
                                },'json');
                            })
                        })
                    </script>
                </div>
                <div class="property-service">
                    <dl class="property-service-suda clearfix">
                        <dt class="vm-metatit">
                            库<span class="s-space"></span>存 :
                        </dt>
                        <dd class="mod-site clearfix">
                            <div id="kucun" class="site-selector">


                            </div>
                        </dd>
                    </dl>
                    <dl class="property-service-provider clearfix">
                        <dt class="vm-metatit">
                            服<span class="s-space"></span>务 :
                        </dt>
                        <dd class="clearfix">
                            {{$detailData['service']}}
                        </dd>
                    </dl>
                </div>
                <!--购买-->
                <div class="property-buy">
                    <p class="vm-message" id="J_message"></p>
                    <dl class="property-buy-quantity">
                        <dt class="vm-metatit">
                            数<span class="s-space"></span>量
                        </dt>
                        <dd class="clearfix">
                            <div class="mod-control">
                                <a id="jian" href="javascript:;" class="vm-minus disabled">-</a>
                                <input type="text" name="" id="J_quantity" value="1" />
                                <a id="jia" href="javascript:;" class="vm-plus disabled">+</a>
                            </div>
                            <div>
                                <a href="javascript:;" id="J_btnBuy" class="btn btn-primary btn-lg ">
                                    <i></i>
                                    立即购买
                                </a>
                                <a href="javascript:;" id="J_favorite" class="vm-favorite">
                                    <i class="icon icon-star icon-large"></i>
                                    收藏
                                </a>
                                <span class="vm-tips" id="J_favoriteTips">
											<i class="s-triangle"></i>
											提前收藏，抢购快人一步！
											<em id="J_favoriteTipsClose"></em>
										</span>

                            </div>
                            <script>
                                $(function () {
                                    $('#J_favorite').click(function () {
                                        var gid = {{q('get.gid')}};
                                        $.post("{{u('ajaxCollect')}}",{gid:gid},function (res) {
                                            if (res.val){
                                                $('.model').show();
                                            }else if(res.val==0){
                                                location="{{u('login.index')}}";
                                            }
                                        },'json')
                                    })
                                })

                            </script>
                        </dd>
                    </dl>
                </div>
<!--                <div class="property-related">-->
<!--                    <dl class="property-related-item">-->
<!--                        <dt class="vm-metatit">还可以看：</dt>-->
<!--                        <dd class="clearfix">-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="">-->
<!--                                        <img src="{{__ROOT__}}/resource/images/item/17.jpg" width="32" height="32"/>-->
<!--                                        魅蓝note3 799元起-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="">-->
<!--                                        <img src="{{__ROOT__}}/resource/images/item/17.jpg" width="32" height="32"/>-->
<!--                                        魅蓝note3 799元起-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="row detail">
        <div style="height:62px;">
            <div class="detail-tab" id="detailTabFixed">
                <div class="fixed-container">
                    <ul class="clearfix" style="display: block;">
                        <li class="current">
                            <a href="javascript:;">商品详情</a>
                        </li>
                        <li>
                            <a href="javascript:;">规格参数</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="detail-content tab-show container">
            <div class="introduce current" id="introduce" style="display: block;">
                {{$detailData['intro']}}
            </div>
        </div>
        <div class="standard tab-show" id="standard" style="display: none;">
            <table class="standard-table">
                <tbody>
                <tr class="standard-table-group">
                    <th colspan="2">基础信息</th>
                </tr>
                <foreach from="$tData" key="$k" value="$v">
                <tr>
                    <th>{{$k}}</th>
                    <td>{{$v[0]}}</td>
                </tr>
                </foreach>
                </tbody>
            </table>
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
<div class="model">
    <div class="tcenter">
        <div class="alert">
            <p>
                <span>收藏成功</span>
                <a href="{{u('center.collect')}}">查看我的收藏</a>
            </p>
        </div>
    </div>
    <i id="close" class="icon-remove"></i>
</div>
</body>
</html>
<script>
    $(function () {
//        var combine = '';
//        $.each($('.selected'),function () {
//            combine += $(this).attr('gtid') + ',';
//        })
//        var total = ''
//        var gid = {{q('get.gid')}};
//        $.post("{{u('ajaxGetTotal')}}",{gid:gid,combine:combine},function (res) {
//            if(res.valid){
//                total=res.total;
////                $('#J_btnBuy').addClass('btn-primary').removeClass('huise');
//            }else{
//                total=0;
////                $('#J_btnBuy').addClass('huise').removeClass('btn-primary');
//            }
//        },'json')
        $(document).on('click','#jia',function () {
            var total = $('#kucun').html();
//            alert(total);
            var oldValue = $('#J_quantity').val();
            oldValue++;
//            alert(total);
            if (oldValue > total){
                if(total == 0){
                    oldValue == 1;
                }
                oldValue = total;
            }
            $('#J_quantity').val(oldValue);
        })
        $(document).on('click','#jian',function () {
            var oldValue = $('#J_quantity').val();
            oldValue--;
//            alert(1);
            if (oldValue < 1){
                if(total==0){
                    oldValue = 0;
                }else{
                    oldValue = 1;
                }


            }
            $('#J_quantity').val(oldValue);
        })
//        $('#J_quantity').blur(function () {
//            var oldValue = $('#J_quantity').val();
////            alert(oldValue)
//            if (oldValue > total)
//            $('#J_quantity').val(total);
//        })
    })
</script>