<extend file='resource/view/master'/>
<block name="content">
    <style>
        th{
            text-align: center;
        }
    </style>
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                链接管理</a>
        </li>
        <li class="active">
            <a href="">添加链接</a>
        </li>
        <li class="active">
            aaa
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">链接管理</a></li>
        <li><a href="{{u('add')}}">添加标签</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">编号</th>
                        <th>链接名称</th>
                        <th width="80">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data['data']" key="$k" value="$v">
                        <tr style="text-align: center">
                            <td>{{$v['lid']}}</td>
                            <td>{{$v['lname']}}</td>

                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{u('edit',['lid'=>$v['lid']])}}">编辑</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{u('del',['lid'=>$v['lid']])}}">删除</a></li>
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
        {{$data['page']}}
    </div>
</block>