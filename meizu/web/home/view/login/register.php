<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/common.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/login.css"/>
    <script src="{{__ROOT__}}/resource/hdjs/js/jquery.min.js"></script>
    <script src="{{__ROOT__}}/resource/hdjs/app/util.js"></script>
    <script src="{{__ROOT__}}/resource/hdjs/require.js"></script>
    <script src="{{__ROOT__}}/resource/hdjs/app/config.js"></script>
</head>
<body>
<header>
    <div class="ucSimpleHeader">
        <a href="" class="meizuLogo">
            <i class="i_icon"></i>
        </a>
        <div class="trigger">
            <a href="{{u('index')}}" class="linkAGray">登录</a>
            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a href="javascript:;" class="linkAGray" id="toRegister">注册</a>
        </div>
        <div class="middle">
            <form action="" method="post" class="mainForm" onsubmit="return register()">
                <div class="number">
                    <a href="" class="linkABlue">账号名注册</a>
                </div>
                <div class="normalInput">
                    <input type="text" name="account" class="username" value=""  placeholder="账号"/>
                    <span class="inputTip"></span>
<!--                    <span class="grayTip">@flyme.cn</span>-->
                </div>
                <div class="normalInput">
                    <input type="password" name="password" class="username" value=""  placeholder="密码"/>
                    <span class="inputTip"></span>
                </div>
                <div class="normalInput">
                    <input type="text" name="code" class="username" value=""  placeholder="验证码"/>
                    <span class="inputTip"></span>
                    <span class="form-line"></span>
                    <img src="{{U('code')}}" class="getKey"/>
                </div>
                <button style="border: none" type="submit" href="" class="fullBtnBlue">注册</button>
                <div style="text-align: center" id="msg"></div>
            </form>
        </div>
    </div>
</header>
<!--<footer>-->
<!--    <div class="footerWrap">-->
<!--        <div class="footerInner">-->
<!--            <div class="footer-layer1">-->
<!--                <div class="footer-innerLink">-->
<!--                    <a href="">关于魅族</a>-->
<!--                    <img src="{{__ROOT__}}/resource/images/order/z2.gif"/>-->
<!--                    <a href="">关于魅族</a>-->
<!--                    <img src="{{__ROOT__}}/resource/images/order/z2.gif"/>-->
<!--                    <a href="">关于魅族</a>-->
<!--                    <img src="{{__ROOT__}}/resource/images/order/z2.gif"/>-->
<!--                    <a href="">关于魅族</a>-->
<!--                    <img src="{{__ROOT__}}/resource/images/order/z2.gif"/>-->
<!--                    <a href="">关于魅族</a>-->
<!--                </div>-->
<!--                <div class="footer-service">-->
<!--                    <span class="service-label">客服热线</span>-->
<!--                    <span class="service-num">13831414805</span>-->
<!--                    <a href="" class="service-online">在线客服</a>-->
<!--                </div>-->
<!--                <div class="footer-outerLink">-->
<!--                    <a href="" class="footer-sinaMblog">-->
<!--                        <i class="i_icon"></i>-->
<!--                    </a>-->
<!--                    <a href="" class="footer-sinaMblog">-->
<!--                        <i class="i_icov"></i>-->
<!--                    </a>-->
<!--                    <a href="" class="footer-sinaMblog">-->
<!--                        <i class="i_icoz"></i>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="copyrightWrap">-->
<!--                <div class="copyrightInner">-->
<!--                    <span>©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</span>-->
<!--                    <a href="" class="linkAGray">备案号: 粤ICP备13003602号-4</a>-->
<!--                    <a href="" class="linkAGray">经营许可证编号: 粤B2-20130198</a>-->
<!--                    <a href="" class="linkAGray">营业执照</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
</body>
</html>
<script>
    function register()
    {
        var data = $('.mainForm').serialize();
        //$.post('请求地址',{发送数据},返回值,返回值的数据类型)
        $.post("{{u('login.register')}}",data,function (res) {
            if (res.valid){
                //登陆成功
                location.href = "{{u(index)}}";
            }else{
                $('#msg').html("<span style='color: red;font-size: 24px' >"+res.message+"</span>")
            }
        },"json");
        return false;
    }
</script>
