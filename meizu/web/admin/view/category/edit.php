<extend file='resource/view/master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">分类管理</a></li>
        <li class="active"><a href="javascript:;">修改分类</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return edit()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">分类修改</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="cname" required class="form-control" value="{{$oldData['cname']}}" placeholder="请填写分类名称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属分类</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="pid">
                            <option value="0">顶级分类</option>
                            <foreach from="$cateData" key="$k" value="$v">
                                <option value="{{$v['cid']}}" <if value="$v['cid'] == $oldData['pid']">selected = "selected"</if> >{{$v['_cname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="sort" required class="form-control" value="{{$oldData['sort']}}" placeholder="请填写分类排序">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属类型</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="tid">
                            <option value="0">请选择所属类型</option>
                            <foreach from="$typeData" key="$k" value="$v">
                                <option value="{{$v['tid']}}" <if value="$v['tid'] == $oldData['tid']">selected = "selected"</if> >{{$v['tname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="cid" value="{{q('get.cid')}}">
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>
<script>
    function edit()
    {
        var data = $('#form').serialize();
        //res返回的数据：{valid:0,message:'提示信息'}
        $.post("{{u('edit')}}",data,function(res){
            if(res.valid)
            {//成功
                //参数：提示消息，跳转地址，成功/失败
                util.message(res.message,"{{u('index')}}",'success');
            }else{
                util.message(res.message,"",'error');
            }
        },"json")
        return false;
    }
</script>
