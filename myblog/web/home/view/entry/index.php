<extend file='resource/view/home'/>
<block name="content">
	<div class="l_box f_l">
		<div class="banner">
			<div id="slide-holder">
				<div id="slide-runner">
					<foreach from="$lunDate" key="$k" value="$v">
					<a href="{{u('content.index',['aid'=>$v['aid']])}}" target="_blank"><img width="670" height="280" id="slide-img-{{$v['aid']}}" src="{{$v['thumb']}}"  alt="" /></a>
					</foreach>
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
						"id":"slide-img-{{$lunDate[0]['aid']}}", // 与slide-runner中的img标签id对应
						"client":"{{$lunDate[0]['title']}}",
						"desc":"" //这里修改描述
					},
					{
						"id":"slide-img-{{$lunDate[1]['aid']}}",
						"client":"{{$lunDate[1]['title']}}",
						"desc":""
					},
					{
						"id":"slide-img-{{$lunDate[2]['aid']}}",
						"client":"{{$lunDate[2]['title']}}",
						"desc":""
					},
					{
						"id":"slide-img-{{$lunDate[3]['aid']}}",
						"client":"{{$lunDate[3]['title']}}",
						"desc":""
					},
				];

			</script>
		</div>
		<!-- banner代码 结束 -->
		<div class="topnews">
<!--			<h2><span><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a></span>-->
				<h2><b>文章</b>推荐</h2>
			<foreach from="$articleData" key="$k" value="$v">
			<div class="blogs">
				<figure><img height="136" src="{{$v['thumb']}}"></figure>
				<ul>
					<h3><a href="{{u('content.index',['aid'=>$v['aid']])}}">{{$v['title']}}</a></h3>
					<p>{{$v['digest']}}</p>
					<p style="margin-top: 5px" class="autor"><a href="/">作者：{{$v['author']}}</a><span class="dtime f_l">{{date('Y-m-d',$v['sendtime'])}}</span><span class="viewnum f_r">浏览（<a href="/">{{$v['click']}}</a>）</span></p>
					<p style="margin-top: -50px;" class="autor">
						<span class="lm f_l">
							<foreach from="$v['tag']" key="$key" value="$value">
							<a href="{{u('listpage.index',['tid'=>$value['tid']])}}">{{$value['tname']}}</a>&nbsp;&nbsp;
							</foreach>
						</span>
					</p>
				</ul>
			</div>
			</foreach>
		</div>
	</div>
</block>