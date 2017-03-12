<extend file='resource/view/home'/>
<block name="content">
    <div class="l_box f_l">
        <div class="topnews">
            <h2><span><a href="#" target="_blank">{{$headData['name']}}</a></span><b>{{$headData['name']}}</b>推荐</h2>
            <foreach from="$articleData" key="$k" value="$v">
            <div class="blogs">
                <figure><img height="136" src="{{$v['thumb']}}"></figure>
                <ul>
                    <h3><a href="{{u('content.index',['aid'=>$v['aid']])}}">{{$v['title']}}</a></h3>
                    <p>{{$v['digest']}}</p>
                    <p class="autor"><a href="#">作者：{{$v['author']}}</a><span class="dtime f_l">{{date('Y-m-d',$v['sendtime'])}}</span><span class="viewnum f_r">浏览（<a href="javascript:;">{{$v['click']}}</a>）</span></p>
                </ul>
            </div>
            </foreach>
        </div>
    </div>
</block>

