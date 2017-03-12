<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $conf['title']?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="<?php echo __ROOT__?>/resource/home/css/base.css" rel="stylesheet">
    <link href="<?php echo __ROOT__?>/resource/home/css/index.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo __ROOT__?>/resource/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/resource/home/js/sliders.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo __ROOT__?>/resource/home/js/modernizr.js"></script>
    <![endif]-->
    <!-- 返回顶部调用 begin -->
    <script type="text/javascript" src="<?php echo __ROOT__?>/resource/home/js/up/jquery.js"></script>
    <script type="text/javascript" src="<?php echo __ROOT__?>/resource/home/js/up/js.js"></script>
    <!-- 返回顶部调用 end-->
</head>
<body>
<header>
    <div class="logo f_l"> <a href="/"><img width="185" src="<?php echo __ROOT__?>/resource/home/images/logoblog.png"></a> </div>
    <nav id="topnav" class="f_r">
        <ul>
            <a href="<?php echo __ROOT__?>" <?php if(CONTROLLER=='Entry'){ ?>id="topnav_current"<?php }?>>首页</a>
            <?php foreach ((array)$headCateData as $k=>$v){?>
            <a <?php if(q('get.cid')==$v['cid']){?>
                id="topnav_current"
               <?php }?> href="<?php echo u('listpage.index',['cid'=>$v['cid']])?>"><?php echo $v['cname']?></a>
            <?php }?>
        </ul>
        <script src="<?php echo __ROOT__?>/resource/home/js/nav.js"></script>
    </nav>
</header>
<article>
    <!--blade_content-->

    <div class="r_box f_r">
        <div class="tit01">
            <h3>关注我</h3>
            <div class="gzwm">
                <ul>
                    <li><a class="xlwb" href="#" target="_blank">新浪微博</a></li>
                    <li><a class="txwb" href="#" target="_blank">腾讯微博</a></li>
                    <li><a class="rss" href="portal.php?mod=rss" target="_blank">RSS</a></li>
                    <li><a class="wx" href="mailto:admin@admin.com">邮箱</a></li>
                </ul>
            </div>
        </div>
        <!--tit01 end-->
        <div class="ad300x100"> <img width="300" src="<?php echo __ROOT__?>/resource/home/images/1111111.jpg"> </div>
        <div class="moreSelect" id="lp_right_select">
            <script>
                window.onload = function ()
                {
                    var oLi = document.getElementById("tab").getElementsByTagName("li");
                    var oUl = document.getElementById("ms-main").getElementsByTagName("div");

                    for(var i = 0; i < oLi.length; i++)
                    {
                        oLi[i].index = i;
                        oLi[i].onmouseover = function ()
                        {
                            for(var n = 0; n < oLi.length; n++) oLi[n].className="";
                            this.className = "cur";
                            for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
                            oUl[this.index].style.display = "block"
                        }
                    }
                }
            </script>
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">点击排行</a></li>
                    <li><a href="/">最新文章</a></li>
                    <li><a href="/">站长推荐</a></li>
                </ul>
            </div>
            <div class="ms-main" id="ms-main">
                <div style="display: block;" class="bd bd-news" >
                    <ul>
                        <?php foreach ((array)$clickData as $k=>$v){?>
                        <li><a href="<?php echo u('content.index',['aid'=>$v['aid']])?>" ><?php echo $v['title']?></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                        <?php foreach ((array)$newArticleData as $k=>$v){?>
                        <li><a href="<?php echo u('content.index',['aid'=>$v['aid']])?>" ><?php echo $v['title']?></a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <?php foreach ((array)$tuiData as $k=>$v){?>
                        <li><a href="<?php echo u('content.index',['aid'=>$v['aid']])?>" ><?php echo $v['title']?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->

        <div class="cloud">
            <h3>标签云</h3>
            <ul>
                <?php foreach ((array)$tagData as $k=>$v){?>
                <li><a href="<?php echo u('listpage.index',['tid'=>$v['tid']])?>"><?php echo $v['tname']?></a></li>
                <?php }?>
            </ul>
        </div>
        <div class="tuwen">
            <h3>图文推荐</h3>
            <ul>
                <?php foreach ((array)$tuiData as $k=>$v){?>
                <li><a href="/"><img height="70" src="<?php echo $v['thumb']?>"><b><?php echo $v['title']?></b></a>
                    <p><span class="tutime"><?php echo date('Y-m-d',$v['sendtime'])?></span></p>
                </li>
                <?php }?>
            </ul>
        </div>
        <div class="ad"> <img src="<?php echo __ROOT__?>/resource/home/images/3333333.jpg"> </div>
        <div class="links">
            <h3><span></span>友情链接</h3>
            <ul>
                <?php foreach ((array)$linkData as $k=>$v){?>
                <li><a href="<?php echo $v['url']?>" target="_blank"><?php echo $v['lname']?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <!--r_box end -->
</article>
<footer>
    <p class="ft-copyright"><?php echo $webSetDats['webname']?> | <?php echo $webSetDats['copy']?> | <?php echo $webSetDats['adminemail']?></p>
    <div id="tbox"> <a id="togbook" href="/"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
</footer>
</body>
</html>
