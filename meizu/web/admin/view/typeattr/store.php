<extend file='resource/view/master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="javascript:;"><i class="fa fa-cogs"></i>
                类型属性管理</a>
        </li>
        <li class="active">
            <a href="">添加属性类型</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index',['tid'=>q('get.tid')])}}">类型属性管理</a></li>
        <li class="active"><a href="javascript:;">添加属性类型</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return store()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">类型属性添加</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">属性名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="taname" required class="form-control" placeholder="请填写属性名称">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">属性类别</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" value="1" name="class" checked="checked"><i></i> 属性
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="2" name="class"><i></i> 规格
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">属性值</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="container" name="tavalue" placeholder="多个用*号隔开" style="height:100px;width:100%;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="{{q('get.tid')}}" name="tid">
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>
<script>
    function store()
    {
        var data = $('#form').serialize();
        //res返回的数据：{valid:0,message:'提示信息'}
        $.post("{{u('store')}}",data,function(res){
            if(res.valid)
            {//成功
                //参数：提示消息，跳转地址，成功
                util.message(res.message,"{{u('index',['tid'=>q('get.tid')])}}",'success');
            }else{//失败
                util.message(res.message,"",'error');
            }
        },"json")
        return false;
    }
</script>
