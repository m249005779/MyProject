<extend file='resource/view/home'/>
<block name="content">
    <div class="l_box f_l">
        <div class="topnews">
            <h2 style="font-size: 25px;text-align: center">{{$articleData['title']}}</h2>
            <p class="autor"><a href="#">作者：{{$articleData['author']}}</a><span class="dtime f_l">{{date('Y-m-d',$articleData['sendtime'])}}</span></p>
            <div class="blogs">
                <p style="font-size: 16px">{{$articleData['content']}}</p>
                <p  class="autor">
						<span class="lm f_l">
							<foreach from="$articleData['tag']" key="$key" value="$value">
							<a href="{{u('listpage.index',['tid'=>$value['tid']])}}">{{$value['tname']}}</a>&nbsp;&nbsp;
							</foreach>
						</span>
                </p>
            </div>
        </div>
    </div>
</block>

