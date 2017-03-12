<extend file='resource/view/master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                链接管理</a>
        </li>
        <li class="active">
            <a href="">链接编辑</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="">链接管理</a></li>
        <li><a href="">链接练级</a></li>
        <li class="active"><a href="">链接编辑</a></li>
    </ul>
    <form class="form-horizontal" id="form" onsubmit="return edit()" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">文章管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">链接名</label>
                    <div class="col-sm-9">
                        <input type="text" name="lname" value="{{$oldData['lname']}}"  class="form-control" placeholder="链接名">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">logo</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control"value="{{$oldData['logo']}}"  name="logo" readonly="" >
                            <div class="input-group-btn">
                                <button  class="btn btn-default" type="button" onclick="upImage(this)">选择图片
                                </button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="{{$oldData['logo']}}" class="img-responsive img-thumbnail path"
                                 width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">链接地址</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="url"  class="form-control" placeholder="链接地址">{{$oldData['url']}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="sort"  class="form-control" placeholder="">{{$oldData['sort']}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="lid" value="{{q('get.lid')}}">
        <button class="btn btn-primary" type="submit">确定</button>
    </form>

</block>
<script>
    //上传图片
    function upImage(obj) {
        require(['util'], function (util) {
            options = {
                multiple: false,//是否允许多图上传
                data:'',
                hash:1
                //hash为确定上传文件标识（可以以用户编号，标识为此用户上传的文件，系统使用这个字段值来显示文件列表），data为数据表中的data字段值，开发者根据业务需要自行添加
            };
            util.image(function (images) {             //上传成功的图片，数组类型 
                $("[name='logo']").val(images[0]);
                $(".img-thumbnail").attr('src', images[0]);
            }, options)
        });
    }
    //移除图片 
    function removeImg(obj) {
        var path = $(".path").attr('src');
        $.post("{{u('delImg')}}",{path:path},function(res){

        },'json')
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
    //表单提交添加
    function edit()
    {
        var data = $("#form").serialize();
        $.post("{{u('edit')}}",data,function(res){
            if(res.valid){
                util.message(res.message,"{{u('index')}}",'success');
            }else{
                util.message(res.message,'','error');
            }
        },'json')
        return false;
    }
</script>