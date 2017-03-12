<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/common.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/log.css"/>
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
            <a href="javascript:;" class="linkAGray">登录</a>
            <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a href="{{u('register')}}" class="linkAGray" id="toRegister">注册</a>
        </div>
        <div class="middle">
            <form action="" method="post" onsubmit="return login()" class="mainForm">
                <div class="number">
                    <a href="" class="linkABlue">账号登录</a>
                </div>
                <div class="normalInput">
                    <input type="text" name="account" class="username" value=""  placeholder="账号"/>
                    <span class="inputTip"></span>
                    <span class="grayTip"></span>
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
                <button type="submit" style="border: none" class="fullBtnBlue">登录</button>
                <div style="text-align: center" id="msg"></div>
            </form>
        </div>
    </div>
</header>

</body>
</html>
<script>
    function login()
    {
        var data = $('.mainForm').serialize();
        var url = "{{$_SESSION['home']['userurl']}}";
        //$.post('请求地址',{发送数据},返回值,返回值的数据类型)
        $.post("{{u('login.index')}}",data,function (res) {
//            console.log(res);
            if (res.valid){
                //登陆成功
                if(url){
                    location.href = url;
                }else{
                    location.href = "{{u('entry.index')}}";
                }
            }else{
                $('#msg').html("<span style='color: red;font-size: 24px' >"+res.message+"</span>")
            }
        },"json");
        return false;
    }
</script>