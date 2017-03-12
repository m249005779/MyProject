<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>确认订单</title>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/order.css" />
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/common.css" />
    <link rel="stylesheet" href="{{__ROOT__}}/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <script src="{{__ROOT__}}/resource/home/js/jquery.min.js"></script>
    <script src="{{__ROOT__}}/resource/home/js/mall.js"></script>
    <script src='{{__ROOT__}}/resource/home/js/order.js'></script>
    <script src="{{__ROOT__}}/resource/home/js/list.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{__ROOT__}}/resource/home/js/area.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="../swiper/swiper-3.3.1.min.css"/>-->
<!--    <script src="../swiper/swiper-3.3.1.min.js"></script>-->
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
                <a href="">
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
    <div class="mzcontainer order-header">
        <div class="order-title">确认订单</div>
        <ul class="order-bread">
<!--            <li class="order-bread-module active">购物车&nbsp;></li>-->
            <li class="order-bread-module active">在线订单&nbsp;></li>
            <li class="order-bread-module">在线支付&nbsp;></li>
            <li class="order-bread-module">完成</li>
        </ul>
    </div>
    <div class="mzcontainer order-address">
        <div class="order-address-title">
            收货人信息
        </div>
        <ul class="order-address-list" id="order-list">
            <foreach from="$addressDate" key="$k" value="$v">
            <li addid="{{$v['addid']}}" class="order-address-checkbox">
                <div class="order-address-checkbox-top">
                    <div class="order-address-checkbox-name">{{$v['username']}}</div>
                    <div class="order-address-checkbox-phone">{{$v['phone']}}</div>

                </div>
                <div class="order-address-checkbox-content">{{$v['city'][0]}} {{$v['city'][1]}} {{$v['city'][2]}} {{$v['address']}}</div>
                <div class="order-address-checkbox-ctrl">
                    <div class="order-address-checkbox-delete">
                        删除
                    </div>
                    <div class="order-address-checkbox-edit">
                        修改
                    </div>
                </div>
            </li>
            </foreach>
        </ul>
        <div id="addAddress" class="order-address-add">
            <a href="javascript:;" class="order-address-app">
                <i class=" icon-plus-sign-alt"></i>
                添加新地址
            </a>
        </div>
        <form action="javascript:;" method="post" id="form">
        <div class="order-address-form" id="order-form-add">
            <div class="order-address-row">
                <div class="order-address-row-title">收件人</div>
                <div class="order-address-row-content">
                    <input type="text" name="username" class="order-address-input" value="" placeholder="长度不超过12个字"/>
                </div>
                <div class="order-address-row-tips">
                    *<span id="userMsg"></span>
                </div>
            </div>
            <div class="order-address-row">
                <div class="order-address-row-title">手机</div>
                <div class="order-address-row-content">
                    <input type="text" name="phone" class="order-address-input" value="" placeholder="请输入11手机号"/>
                </div>
                <div class="order-address-row-tips">
                    *<span id="userPhone"></span>
                </div>
            </div>
            <div class="order-address-row">
                <div class="order-address-row-title">地址</div>
                <div class="order-address-row-content">
                    <select class="address-select" name="citys[]" id="area1"></select>
                    <select class="address-select" name="citys[]" id="area2"></select>
                    <select class="address-select" name="citys[]" id="area3"></select>
                </div>
                <div class="order-address-row-tips">
                    *
                </div>
            </div>
            <script>
                $(function(){
                    //初始化
//                    area.init('area');
                    //默认选中
//                    area.selected("山西","临汾","襄汾县");
                })
            </script>

            <div class="order-address-row">
                <div class="order-address-row-title"></div>
                <div class="order-address-row-content">
                    <input type="text" name="address" class="order-address-input" value="" placeholder="请输入详细地址"/>
                </div>
                <div class="order-address-row-tips">
                    *<span id="userAddress"></span>
                </div>
            </div>
            <div class="order-address-row">
                <button type="submit" id="sub" class="addressFormSave">保存</button>
                <a href="javascript:;" class="addressFormCancel add-re">取消</a>
            </div>
        </div>
        </form>
    </div>
    <div class="mzcontainer order-product">
        <div class="order-product-title">确认订单信息</div>
        <div class="order-product-list">
            <table cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th class="order-product-table-name"></th>
                    <th class="order-product-table-price">单价</th>
                    <th class="order-product-table-price">数量</th>
                    <th class="order-product-table-price">小计</th>
                    <th class="order-product-table-price">配送方式</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="order-product-table-name">
                        <img src="{{$data['pic']}}" class="order-product-image"/>
                        <div class="order-product-name">
                            <a href="" class="order-product-link">
                                {{$data['name']}}
                                <br />
                                <foreach from="$data['options']" key="$k" value="$v">{{$v}} </foreach>
                            </a>
                        </div>
                    </td>
                    <td class="order-product-table-price">
                        <p>￥{{$data['price']}}</p>
                    </td>
                    <td class="order-product-table-num">{{$data['num']}}</td>
                    <td class="order-product-table-price">
                        <p class="red">￥{{$data['total']}}</p>
                    </td>
                    <td class="order-product-table-express">
                        <p>
                            快递配送：运费
                            <span>￥0.00</span>
                        </p>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="order-product-info">
                            <div class="order-product-invoice">
                                <div class="order-product-invoice-type">
                                    发票类型：电子发票
                                    <div class="order-product-invoice-icon">
                                        ？
                                    </div>
                                </div>
                                <div class="order-product-invoice-type">
                                    发票抬头：默认为收货人姓名
                                </div>
                            </div>
                            <div class="order-product-remark">
                                <span class="order-product-remark-title">备注</span>
                                <textarea name="orderstatus" class="order-product-remark-input" maxlength="45" placeholder="备注..."></textarea>
                            </div>
                        </div>
                        <div class="order-product-total">合计：
                            <span class="order-product-price">￥{{$data['total']}}</span>
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="order-total">
        <div class="order-total-content">
            <div class="order-total-row">
                总金额
                <div class="order-total-price">
                    ￥{{$data['total']}}
                </div>
            </div>
            <div class="order-total-row">
                运费
                <div class="order-total-price">
                    ￥0.00
                </div>
            </div>
            <div class="order-total-line"></div>
            <div class="order-total-row">
                应付
                <div class="order-total-price total">
                    ￥{{$data['total']}}
                </div>
            </div>
            <div class="order-total-row">
                <input type="text" name="code" class="order-total-valid-input" value="" placeholder="验证码*" />
                <img src="{{u('code')}}" class="order-total-valid-image"/>
            </div>
            <div class="order-total-row">
                <a href="javascript:;" id="submit-order" class="btn">提交订单</a>
            </div>
        </div>
        <script>
            $(document).on('click','#submit-order',function () {
//                alert(1);
                var data = {
                    'code' : $('input[name=code]').val(),
                    'addid': $('.selected').attr('addid'),
                    'remark': $('.order-product-remark-input').val(),
                    'orderstatus':1,
                }
                $.post("{{u('submitOrder')}}",data,function (res) {
                    if (res.val == 5){
                        alert('验证码不正确');
                    }else if(res.val == 2){
                        location = "?s=home/pay/index&oid="+res.oid;
                    }else if (res.val == 3){
                        alert('请选择地址');
                    }
                },'json')
            })
        </script>
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
<!--                    <img width="20" height="21" src="{{__ROOT__}}/resource/images/order/27.png" alt="">-->
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
        $('input[name=username]').blur(function () {
            var username = $(this).val();
            $.ajax({
                type:'post',
                url:"{{u(checkUsername)}}",
                data:{username:username},
                success:function (data) {
                    if (data == 0){
                        $('#userMsg').html('<span style="color: red;" > 请填写收货人姓名！</span>');
                        $('#sub').attr('disabled',true);
                    }else{
                        $('#userMsg').html('<span style="color: green;" > ok！</span>');
                        $('#sub').attr('disabled',false);
                    }
                }
            })
        })
        $('input[name=phone]').blur(function () {
            var phone = $(this).val();
            $.ajax({
                type:'post',
                url:"{{u(checkPhone)}}",
                data:{phone:phone},
                success:function (data) {
                    if(data == 0){
                        $('#sub').attr('disabled',true);
                        $('#userPhone').html('<span style="color: red;" > 请填写收货人电话！</span>');
                    }else{
                        $('#userPhone').html('<span style="color: green;" > ok！</span>');
                        $('#sub').attr('disabled',false);
                    }
                }
            })
        })
        $('input[name=address]').blur(function () {
            var address = $(this).val();
            $.ajax({
                type:'post',
                url:"{{u(checkAddress)}}",
                data:{address:address},
                success:function (data) {
                    if(data == 0){
                        $('#userAddress').html('<span style="color: red;" > 请填写详细地址！</span>');
                        $('#sub').attr('disabled',true);
                    }else{
                        $('#userAddress').html('<span style="color: green;" > ok！</span>');
                        $('#sub').attr('disabled',false);
                    }
                }

            })
        })
        $(document).on('submit','#form',function () {
            var data = $(this).serialize();
            $.post("{{u('order.addAddress')}}",data,function (res) {
                if(res.val){
                    var address = '';
                    address += '<li addid='+res.addid+' class="order-address-checkbox"><div class="order-address-checkbox-top">';
                    address += '<div class="order-address-checkbox-name">'+res.data.username+'</div>';
                    address += '<div class="order-address-checkbox-phone">'+res.data.phone+'</div></div>';
                    address += '<div class="order-address-checkbox-content">'+res.data.citys[0]+' '+res.data.citys[1]+' '+res.data.citys[2]+' '+res.data.address+'</div>';
                    address += '<div class="order-address-checkbox-ctrl"><div class="order-address-checkbox-delete"> 删除 </div>';
                    address += '<div class="order-address-checkbox-edit">修改</div></div></li>';
                    $('#order-list').append(address);
                    document.getElementById('form').reset();
                }
            },'json')
        })
        $('section .order-address .order-address-list').on('click','.order-address-checkbox-edit',function () {
            $('form').attr('id','form1');
            var addid = $(this).parents('li').attr('addid');
            $.post("{{u(addressOldData)}}",{addid:addid},function (res) {
                $('#form1 input[name=username]').val(res.oldData.username);
                area.init('area');
//                alert(res.oldData.city);
                var sheng = res.oldData.city[0];
                var shi = res.oldData.city[1];
                var xian = res.oldData.city[2];
                area.selected(sheng,shi,xian);
                $('input[name=phone]').val(res.oldData.phone);
                $('input[name=address]').val(res.oldData.address);
                $('form').append('<input type="hidden" name="addid" value='+res.oldData.addid+'>');
            },'json')
        })
        $(document).on('submit','#form1',function () {
            var data = $("#form1").serialize();
            $.post("{{u('addressEdit')}}",data,function (res) {
                if (res.val){
                    var addid = res.data.addid;
                    $("li[addid='"+addid+"']").find('.order-address-checkbox-name').html(res.data.username);
                    $("li[addid='"+addid+"']").find('.order-address-checkbox-phone').html(res.data.phone);
                    $("li[addid='"+addid+"']").find('.order-address-checkbox-content').html(res.data.citys[0]+' '+res.data.citys[1]+' '+res.data.citys[2]+' '+res.data.address);
                }

            },'json')
        })
        //删除地址
        $('section .order-address .order-address-list').on('click','.order-address-checkbox-delete',function () {
            var addid = $(this).parents('li').attr('addid');
            if(confirm('确定删除？')){
                $.post("{{u('addressDel')}}",{addid:addid},function (res) {
                    if (res.val){
                        $("li[addid='"+addid+"']").remove();
                    }
                },'json')
            }
        })
    })
</script>