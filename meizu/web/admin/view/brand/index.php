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
                品牌管理</a>
        </li>
        <!--        <li class="active">-->
        <!--            <a href="">添加分类</a>-->
        <!--        </li>-->
        <!--        <li class="active">-->
        <!--            aaa-->
        <!--        </li>-->
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">品牌管理</a></li>
        <li><a href="{{u('store')}}">添加品牌</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">编号</th>
                        <th>品牌名称</th>
                        <th width="100">显示顺序</th>
                        <th>品牌Logo</th>
                        <th>是否热门</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                    <tr style="text-align: center">
                        <td>{{$v['bid']}}</td>
                        <td>{{$v['bname']}}</td>
                        <td>
                            <input type="text"  class="form-control" name="" value="{{$v['sort']}}">
                        </td>
                        <td>
                            <img width="150" height="50" src="{{$v['logo']}}" alt="">
                        </td>
                        <td>
                            <if value="$v['ishot']==1">热门<else>不热门</if>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{u('edit',['bid'=>$v['bid']])}}">编辑</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:;" onclick="del({{$v['bid']}})">删除</a></li>
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
    function del(bid) {
        var obj = util.modal({
            title:'确认删除？',//标题
            content:'',//内容
            footer:'<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="button" class="btn btn-danger confirm" data-dismiss="modal">确定</button>',//底部
            width:600,//宽度
            events:{
                confirm:function(){
                    //哪个元素上有.confirm类，被点击就执行这个回调
                    location.href = "{{u('del')}}" + '&bid=' + bid;
                }
            }
        });
        //显示模态框
        obj.modal('show');
    }
</script>