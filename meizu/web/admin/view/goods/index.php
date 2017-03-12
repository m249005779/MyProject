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
                商品管理</a>
        </li>
        <!--        <li class="active">-->
        <!--            <a href="">添加分类</a>-->
        <!--        </li>-->
        <!--        <li class="active">-->
        <!--            aaa-->
        <!--        </li>-->
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">商品管理</a></li>
        <li><a href="{{u('store')}}">添加商品</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">ID</th>
                        <th>商品名称</th>
                        <th width="100">价格</th>
                        <th>库存</th>
                        <th>点击次数</th>
                        <th>添加时间</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                    <tr style="text-align: center">
                        <td>{{$v['gid']}}</td>
                        <td>{{$v['gname']}}</td>
                        <td>市场价:{{$v['marketprice']}}
                            <br>
                            商城价:{{$v['shopprice']}}
                        </td>
                        <td>库存</td>
                        <td>{{$v['click']}}</td>
                        <th>{{date('Y-m-d h:i:s',$v['time'])}}</th>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{u('goodslist/index',['gid'=>$v['gid']])}}">货品列表</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{u('edit',['gid'=>$v['gid']])}}">编辑</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:;" onclick="del({{$v['gid']}})">删除</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    </foreach>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <div class="pagination pagination-sm pull-right">
    </div>
</block>
<script>
    function del(gid)
    {
        var obj = util.modal({
            title:'确认删除？',//标题
            content:'',//内容
            footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-danger confirm" data-dismiss="modal">确定</button>',//底部
            width:600,//宽度
            events:{
                confirm:function(){
                    //哪个元素上有.confirm类，被点击就执行这个回调
                    location.href = "{{u('del')}}" + '&gid=' + gid;
                }
            }
        });
        //显示模态框
        obj.modal('show');
    }
</script>