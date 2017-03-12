<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>孟令悦个人博客</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://www.superyee.cn/myblog/resource/home/css/base.css" rel="stylesheet">
    <link href="http://www.superyee.cn/myblog/resource/home/css/index.css" rel="stylesheet">
    <script type="text/javascript" src="http://www.superyee.cn/myblog/resource/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.superyee.cn/myblog/resource/home/js/sliders.js"></script>
    <!--[if lt IE 9]>
    <script src="http://www.superyee.cn/myblog/resource/home/js/modernizr.js"></script>
    <![endif]-->
    <!-- 返回顶部调用 begin -->
    <script type="text/javascript" src="http://www.superyee.cn/myblog/resource/home/js/up/jquery.js"></script>
    <script type="text/javascript" src="http://www.superyee.cn/myblog/resource/home/js/up/js.js"></script>
    <!-- 返回顶部调用 end-->
</head>
<body>
<header>
    <div class="logo f_l"> <a href="/"><img width="185" src="http://www.superyee.cn/myblog/resource/home/images/logoblog.png"></a> </div>
    <nav id="topnav" class="f_r">
        <ul>
            <a href="http://www.superyee.cn/myblog" id="topnav_current">首页</a>
                        <a  href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&cid=1">新闻</a>
                        <a  href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&cid=2">体育</a>
                        <a  href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&cid=3">娱乐</a>
                        <a  href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&cid=7">军事</a>
                    </ul>
        <script src="http://www.superyee.cn/myblog/resource/home/js/nav.js"></script>
    </nav>
</header>
<article>
    
	<div class="l_box f_l">
		<div class="banner">
			<div id="slide-holder">
				<div id="slide-runner">
					<?php foreach ((array)$lunDate as $k=>$v){?>
					<a href="<?php echo u('content.index',['aid'=>$v['aid']])?>" target="_blank"><img width="670" height="280" id="slide-img-<?php echo $v['aid']?>" src="<?php echo $v['thumb']?>"  alt="" /></a>
					<?php }?>
					<div id="slide-controls">
						<p id="slide-client" class="text"><strong></strong><span></span></p>
						<p id="slide-desc" class="text"></p>
						<p id="slide-nav"></p>
					</div>
				</div>
			</div>
			<script>
				if(!window.slider) {
					var slider={};
				}

				slider.data= [
					{
						"id":"slide-img-<?php echo $lunDate[0]['aid']?>", // 与slide-runner中的img标签id对应
						"client":"<?php echo $lunDate[0]['title']?>",
						"desc":"" //这里修改描述
					},
					{
						"id":"slide-img-<?php echo $lunDate[1]['aid']?>",
						"client":"<?php echo $lunDate[1]['title']?>",
						"desc":""
					},
					{
						"id":"slide-img-<?php echo $lunDate[2]['aid']?>",
						"client":"<?php echo $lunDate[2]['title']?>",
						"desc":""
					},
					{
						"id":"slide-img-<?php echo $lunDate[3]['aid']?>",
						"client":"<?php echo $lunDate[3]['title']?>",
						"desc":""
					},
				];

			</script>
		</div>
		<!-- banner代码 结束 -->
		<div class="topnews">
<!--			<h2><span><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a></span>-->
				<h2><b>文章</b>推荐</h2>
			<?php foreach ((array)$articleData as $k=>$v){?>
			<div class="blogs">
				<figure><img height="136" src="<?php echo $v['thumb']?>"></figure>
				<ul>
					<h3><a href="<?php echo u('content.index',['aid'=>$v['aid']])?>"><?php echo $v['title']?></a></h3>
					<p><?php echo $v['digest']?></p>
					<p style="margin-top: 5px" class="autor"><a href="/">作者：<?php echo $v['author']?></a><span class="dtime f_l"><?php echo date('Y-m-d',$v['sendtime'])?></span><span class="viewnum f_r">浏览（<a href="/"><?php echo $v['click']?></a>）</span></p>
					<p style="margin-top: -50px;" class="autor">
						<span class="lm f_l">
							<?php foreach ((array)$v['tag'] as $key=>$value){?>
							<a href="<?php echo u('listpage.index',['tid'=>$value['tid']])?>"><?php echo $value['tname']?></a>&nbsp;&nbsp;
							<?php }?>
						</span>
					</p>
				</ul>
			</div>
			<?php }?>
		</div>
	</div>


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
        <div class="ad300x100"> <img width="300" src="http://www.superyee.cn/myblog/resource/home/images/1111111.jpg"> </div>
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
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=1" >中国领跑残奥半程奖牌榜 泳坛健儿占半壁江山</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=3" >网曝王宝强获抚养权净身出户 律师：法院还在审</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=4" >这是总书记的手机号吗？</a></li>
                                            </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=4" >这是总书记的手机号吗？</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=3" >网曝王宝强获抚养权净身出户 律师：法院还在审</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=2" >中俄海上联合演习 美国：希望不会加剧地区紧张局势</a></li>
                                            </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=2" >中俄海上联合演习 美国：希望不会加剧地区紧张局势</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=4" >这是总书记的手机号吗？</a></li>
                                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/content/index&aid=1" >中国领跑残奥半程奖牌榜 泳坛健儿占半壁江山</a></li>
                                            </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->

        <div class="cloud">
            <h3>标签云</h3>
            <ul>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=1">PHP</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=2">生活</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=3">娱乐</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=4">八卦</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=5">杂谈</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=6">头条</a></li>
                                <li><a href="http://www.superyee.cn/myblog/index.php?s=home/listpage/index&tid=7">大事</a></li>
                            </ul>
        </div>
        <div class="tuwen">
            <h3>图文推荐</h3>
            <ul>
                                <li><a href="/"><img height="70" src="attachment/2016/09/13/79931473755832.jpg"><b>中俄海上联合演习 美国：希望不会加剧地区紧张局势</b></a>
                    <p><span class="tutime">2016-09-13</span></p>
                </li>
                                <li><a href="/"><img height="70" src="attachment/2016/09/13/67171473756337.jpeg"><b>这是总书记的手机号吗？</b></a>
                    <p><span class="tutime">2016-09-13</span></p>
                </li>
                                <li><a href="/"><img height="70" src="attachment/2016/09/13/23831473755591.jpg"><b>中国领跑残奥半程奖牌榜 泳坛健儿占半壁江山</b></a>
                    <p><span class="tutime">2016-09-13</span></p>
                </li>
                            </ul>
        </div>
        <div class="ad"> <img src="http://www.superyee.cn/myblog/resource/home/images/3333333.jpg"> </div>
        <div class="links">
            <h3><span></span>友情链接</h3>
            <ul>
                                <li><a href="http://www.qq.com" target="_blank">腾讯网</a></li>
                            </ul>
        </div>
    </div>
    <!--r_box end -->
</article>
<footer>
    <p class="ft-copyright">孟令悦博客系统 | 后盾学习 | 249005779@qq.com</p>
    <div id="tbox"> <a id="togbook" href="/"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
</footer>
</body>
</html>

