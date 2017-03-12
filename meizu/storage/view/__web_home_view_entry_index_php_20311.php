<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>魅族商城</title>
	<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/resource/home/css/common.css"/>
	<link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/css/index.css" />
	<link rel="stylesheet" href="<?php echo __ROOT__?>/resource/home/org/Font-Awesome-3.2.1/css/font-awesome.min.css">
	<script src="<?php echo __ROOT__?>/resource/home/js/jquery.min.js"></script>
	<script src="<?php echo __ROOT__?>/resource/home/js/index.js"></script>
</head>
<body>
<header>
	<div class="top">
		<div class="head">
			<div class="top-left">
<!--				<a href="">魅族官网</a>-->
<!--				<a href="">魅族商城</a>-->
<!--				<a href="">Flyme</a>-->
<!--				<a href="">专卖店</a>-->
<!--				<a href="">服务</a>-->
<!--				<a href="">社区</a>-->
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
				<a href="">
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
	<div class="sort">
		<div class="category-list">
			<ul class="category-nav">
				<li class="category-nav-item">
					<a class="category-nav-link" href="javascript:;">全部商品分类</a>
				</li>
				<?php foreach ((array)$cateData as $k=>$v){?>
				<li class="category-nav-item">
					<a class="category-nav-link" href="<?php echo u('listpage.index',['cid'=>$v['cid']])?>"><?php echo $v['cname']?></a>
					<div class="category-nav-children">
						<div class="nav-children-wrap">
							<ul class="nav-children-left">
								<?php foreach ((array)$v['goods'] as $kk=>$vv){?>
									<?php if($kk<5){?>
                
								<li class="nav-children-item">
									<a href="<?php echo u('item.index',['gid'=>$vv['gid']])?>">
										<img height="50" width="50" src="<?php echo $vv['pic']?>" alt="">
										<span><?php echo $vv['gname']?></span>
									</a>
								</li>
									
               <?php }?>
								<?php }?>
							</ul>
							<ul class="nav-children-left">
								<?php foreach ((array)$v['goods'] as $kk=>$vv){?>
									<?php if($kk>=5){?>
                
								<li class="nav-children-item">
									<a href="<?php echo u('item.index',['gid'=>$vv['gid']])?>">
										<img height="50" width="50" src="<?php echo $vv['pic']?>" alt="">
										<span><?php echo $vv['gname']?></span>
									</a>
								</li>
									
               <?php }?>
								<?php }?>
							</ul>
						</div>
<!--						<div class="category-item-ad">-->
<!--							<a href=""><img width="296" height="480" src="<?php echo __ROOT__?>/resource/images/entry/3.jpg" alt=""></a>-->
<!--						</div>-->
					</div>
				</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="homeSlider">
		<div class="home-slider-items">
			<ul>
				<li><a href=""><img width="100%" height="480" src="<?php echo __ROOT__?>/resource/images/entry/l1.jpg" alt=""></a></li>
				<li><a href=""><img width="100%" height="480" src="<?php echo __ROOT__?>/resource/images/entry/l2.jpg" alt=""></a></li>
				<li><a href=""><img width="100%" height="480" src="<?php echo __ROOT__?>/resource/images/entry/l3.png" alt=""></a></li>
				<li><a href=""><img width="100%" height="480" src="<?php echo __ROOT__?>/resource/images/entry/l4.jpg" alt=""></a></li>
				<li><a href=""><img width="100%" height="480" src="<?php echo __ROOT__?>/resource/images/entry/l100.jpg" alt=""></a></li>
			</ul>
		</div>
		<div class="circel">
			<ul>
				<li class="first"></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="middle">
			<div class="move">
				<div class="moveleft"><</div>
				<div class="moveright">></div>
			</div>
		</div>
	</div>
	<div class="home-container">
		<div class="scontainer">
<!--			<div class="home-ad">-->
<!--				<div class="home-box service">-->
<!--					<div class="service2">-->
<!--						<a href="">-->
<!--									<span>-->
<!--										<img width="24" height="24" src="<?php echo __ROOT__?>/resource/images/entry/21.png" alt="">-->
<!--									</span>-->
<!--							<p>M码通道</p>-->
<!--						</a>-->
<!--					</div>-->
<!--					<div class="service2">-->
<!--						<a href="">-->
<!--									<span>-->
<!--										<img width="24" height="24" src="<?php echo __ROOT__?>/resource/images/entry/22.png" alt="">-->
<!--									</span>-->
<!--							<p>以旧换新</p>-->
<!--						</a>-->
<!--					</div>-->
<!--					<div class="service2">-->
<!--						<a href="">-->
<!--									<span>-->
<!--										<img width="24" height="24" src="<?php echo __ROOT__?>/resource/images/entry/23.png" alt="">-->
<!--									</span>-->
<!--							<p>魅族意外保</p>-->
<!--						</a>-->
<!--					</div>-->
<!--					<div class="service2">-->
<!--						<a href="">-->
<!--									<span>-->
<!--										<img width="24" height="24" src="<?php echo __ROOT__?>/resource/images/entry/24.png" alt="">-->
<!--									</span>-->
<!--							<p>回购单查询</p>-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="home-box ad-box">-->
<!--					<a href="">-->
<!--						<img width="244" height="140" src="<?php echo __ROOT__?>/resource/images/entry/221.jpg" alt="">-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="home-box ad-box">-->
<!--					<a href="">-->
<!--						<img width="244" height="140" src="<?php echo __ROOT__?>/resource/images/entry/221.jpg" alt="">-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="home-box ad-box">-->
<!--					<a href="">-->
<!--						<img width="244" height="140" src="<?php echo __ROOT__?>/resource/images/entry/221.jpg" alt="">-->
<!--					</a>-->
<!--				</div>-->
<!--				<div class="home-box ad-box">-->
<!--					<a href="">-->
<!--						<img width="244" height="140" src="<?php echo __ROOT__?>/resource/images/entry/221.jpg" alt="">-->
<!--					</a>-->
<!--				</div>-->
<!--			</div>-->
			<div class="home-hot">
				<div class="home-topbar">
					<h2 class="home-title">热品推荐</h2>
				</div>
				<div class="home-rmain">
					<div class="rmd-content">
						<div class="rm-box">
							<div class="rm-list">
								<?php foreach ((array)$hotData as $k=>$v){?>
								<div class="rm-product">
									<a href="<?php echo u('item.index',['gid'=>$v['gid']])?>">
										<div class="rm-product-d">
											<img width="180" height="180" src="<?php echo $v['pic']?>" alt="">
											<div class="rm-desc">
												<h4><?php echo $v['gname']?></h4>
<!--												<h6>真金属 指纹全网通</h6>-->
												<p>
													￥
													<span><?php echo $v['shopprice']?></span>
												</p>
											</div>
										</div>
									</a>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--		<div class="home-floor-ad">-->
<!--			<a href="">-->
<!--				<img width="1240" height="120" src="<?php echo __ROOT__?>/resource/images/entry/31.jpg" alt="">-->
<!--			</a>-->
<!--		</div>-->
		<?php foreach ((array)$typeData as $k=>$v){?>
			<?php if($v){?>
                
		<div class="home-full-box">
			<div class="full-container">
				<div class="home-floor">
					<div class="home-topbar">
						<h2><?php echo $v['tname']?></h2>
						<h6></h6>
						<div class="home-floor-tools">
<!--							<a class="more" href="">更多-->
<!--								<span class="icon-angle-right "></span>-->
							</a>
						</div>
					</div>
					<div class="home-floor-main">
						<div class="home-floor-content">
							<?php foreach ((array)$v['data'] as $key=>$value){?>
								<?php if($key == 0){?>
                
							<div class="content-box box1">
								<a href="<?php echo u('item.index',['gid'=>$v['hot']['gid']])?>">
									<img src="<?php echo $v['hot']['pic']?>" alt="">
								</a>
								<div class="box2">
									<a href="<?php echo u('item.index',['gid'=>$v['hot']['gid']])?>">立刻购买</a>
								</div>
							</div>
								
               <?php }?>
							<div class="content-box box-product">
								<a href="<?php echo u('item.index',['gid'=>$value['gid']])?>">
									<div class="rm-product-d" >
										<img width="180" height="180" src="<?php echo $value['pic']?>" alt="">
										<div class="product-desc">
											<h4><?php echo $value['gname']?></h4>
<!--											<h6>23日10点 限量开售</h6>-->
											<p>￥<span><?php echo $value['shopprice']?></span></p>
										</div>
									</div>

								</a>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
<!--			<div class="home-floor-ad">-->
<!--				<a href="">-->
<!--					<img width="1240" height="120" src="<?php echo __ROOT__?>/resource/images/entry/31.jpg" alt="">-->
<!--				</a>-->
<!--			</div>-->
		</div>
			
               <?php }?>
		<?php }?>
	</div>
</section>
<footer>
	<div class="container">
<!--		<div class="footer-servive">-->
<!--			<ul>-->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--				<li class="line">-->
<!--					<span></span>-->
<!--				</li>-->
<!---->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--				<li class="line">-->
<!--					<span></span>-->
<!--				</li>-->
<!---->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--				<li class="line">-->
<!--					<span></span>-->
<!--				</li>-->
<!---->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--				<li class="line">-->
<!--					<span></span>-->
<!--				</li>-->
<!---->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--				<li class="line">-->
<!--					<span></span>-->
<!--				</li>-->
<!---->
<!--				<li class="item">-->
<!--					<span class="img"></span>-->
<!--					<p>-->
<!--						<span class="blod">7天</span>-->
<!--						<span class="normal">无理由退货</span>-->
<!--					</p>-->
<!--				</li>-->
<!--			</ul>-->
<!--		</div>-->
<!--		<div class="footer-nav">-->
<!--			<div class="nav-item">-->
<!--				<h4>帮助说明</h4>-->
<!--				<ul>-->
<!--					<li><a href="">支付方式</a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!---->
<!--			<div class="nav-item">-->
<!--				<h4>帮助说明</h4>-->
<!--				<ul>-->
<!--					<li><a href="">支付方式</a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!---->
<!--			<div class="nav-item">-->
<!--				<h4>帮助说明</h4>-->
<!--				<ul>-->
<!--					<li><a href="">支付方式</a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!---->
<!--			<div class="nav-item">-->
<!--				<h4>帮助说明</h4>-->
<!--				<ul>-->
<!--					<li><a href="">支付方式</a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--					<li><a href=""></a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!---->
<!--			<div class="nav-custom">-->
<!--				<h4>2小时后盾服务热线</h4>-->
<!--				<a class="" href="">-->
<!--					<h3>18610684369</h3>-->
<!--				</a>-->
<!--				<a class="nav-btn" href="">-->
<!--					<img width="20" height="21" src="<?php echo __ROOT__?>/resource/images/entry/foot2.png" alt="">-->
<!--					2小时不在线客服-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
		<div class="footer-end">
			<p>
				©2016 Meng Lingyue. | 邮箱：249005779@qq.com | 后盾IT教育

			</p>
		</div>
	</div>
</footer>
</body>
</html>