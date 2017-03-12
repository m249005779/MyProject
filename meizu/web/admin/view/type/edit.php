<extend file='resource/view/master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                类型管理</a>
        </li>
        <li class="active">
            <a href="">编辑类型</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="">类型管理</a></li>
        <li class="active"><a href="">编辑类型</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">类型管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">标签</label>
                    <div class="col-sm-9">
                        <input  value="{{$oldData['tname']}}" class="form-control" name="tname" placeholder="" />
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="tid" value="{{q('get.tid')}}">
        <button class="btn btn-primary" type="submit">确定</button>
    </form>

</block>