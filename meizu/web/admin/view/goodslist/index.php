<extend file='resource/view/master'/>
<block name="content">
    <style>
        th{
            text-align: center;
        }
    </style>
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="javascript:;"><i class="fa fa-cogs"></i>
                货品管理</a>
        </li>
        <!--        <li class="active">-->
        <!--            <a href="">添加分类</a>-->
        <!--        </li>-->
        <!--        <li class="active">-->
        <!--            aaa-->
        <!--        </li>-->
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">货品管理</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">货品编号</th>
                        <foreach from="$tData" key="$k" value="$v">
                        <th width="200">{{$k}}</th>
                        </foreach>
                        <th width="100">库存</th>
                        <th width="300">货号</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$listData" key="$k" value="$v">
                        <tr style="text-align: center">
                            <td>{{$v['glid']}}</td>
                            <foreach from="$listData[$k]['gtvalue']" key="$key" value="$value">
                                <td>{{$value}}</td>
                            </foreach>
                            <td>{{$v['inventory']}}</td>
                            <td>{{$v['number']}}</td>
                            <input type="hidden" class="kk" value="{{$v['combine']}}">
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" onclick="del({{$v['glid']}})" class="btn btn-danger btn-xs dropdown-toggle">删除</button>
                                </div>
                            </td>
                        </tr>
                    </foreach>
                        <tr style="text-align: center">
                            <td>添加货品</td>
                            <foreach from="$tData" key="$k" value="$v">
                            <td>
                                <select class="vvv" name="spec[]">
                                    <option value="0">请选择</option>
                                    <foreach from="$tData[$k]" key="$kk" value="$vv" >
                                    <option value="{{$kk}}">{{$vv}}</option>
                                    </foreach>
                                </select>
                            </td>
                            </foreach>
                            <td>
                                <input type="text"  class="form-control" name="inventory" value="">
                            </td>
                            <td>
                                <input type="text"  class="form-control" name="number" value="">
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="gid" value="{{q('get.gid')}}">
                <button class="btn btn-primary" type="submit">保存添加</button>
            </div>
        </div>
    </form>
    <div class="pagination pagination-sm pull-right">
    </div>
</block>
<script>
    $(function () {
        var sel = $('.vvv');
        var len = sel.length;
        var gid = "{{q('get.gid')}}";
//        console.log(length);
        sel.change(function () {
            var remote = '';
            remote += gid + '/';
            for (var i = 0; i < len; ++i)
            {
                if (sel.eq(i).val() == 0)
                {
                    return;
                }
                else
                {
                    remote += sel.eq(i).val()+ ',';
                }
            }
            $.post("{{u('ajaxData')}}",{data:remote},function (res) {
                if(!res.valid)
                {//失败
                    util.message(res.message,"",'error');
                    for (var i = 0; i < len; ++i)
                    {
                        sel.eq(i).val(0);
                    }
                }
            },'json')
        })
    })
</script>
<script>
    function del(glid)
    {
        var obj = util.modal({
            title:'确认删除？',//标题
            content:'',//内容
            footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-danger confirm" data-dismiss="modal">确定</button>',//底部
            width:600,//宽度
            events:{
                confirm:function(){
                    //哪个元素上有.confirm类，被点击就执行这个回调
                    location.href = "{{u('del')}}" + '&glid=' + glid;
                }
            }
        });
        //显示模态框
        obj.modal('show');
    }
</script>