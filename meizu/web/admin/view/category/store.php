<extend file='resource/view/master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">分类管理</a></li>
        <li class="active"><a href="">添加分类</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return store()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">分类管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="cname" required class="form-control" placeholder="请填写分类名称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="sort" min="0" required class="form-control" placeholder="请填写分类排序">
                    </div>
                </div>
            </div>
        </div>
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
                util.message(res.message,"{{u('index')}}",'success');
            }else{//失败
                util.message(res.message,"",'error');
            }
        },"json")
        return false;
    }
</script>
