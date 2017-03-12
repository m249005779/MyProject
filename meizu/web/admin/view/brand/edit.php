<extend file='resource/view/master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="">品牌管理</a></li>
        <li class="active"><a href="">品牌修改</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post" onsubmit="return edit()">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">品牌修改</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">品牌名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="bname" value="{{$oldData['bname']}}" required class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">品牌排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="sort" value="{{$oldData['sort']}}" required class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">是否热门</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" value="1" name="ishot" <if value="$oldData['ishot'] == 1">checked</if> ><i></i> 热门
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="2" name="ishot" <if value="$oldData['ishot'] == 2">checked</if> ><i></i> 不热门
                        </label>
                    </div>
                </div>
                <!--                框架上传组件-->
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">logo图</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{$oldData['logo']}}" name="logo" readonly="" >
                            <div class="input-group-btn">
                                <button  class="btn btn-default" type="button" onclick="upImage(this)">选择图片
                                </button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img src="resource/images/nopic.jpg" class="img-responsive img-thumbnail haibao"
                                 width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
            </div>
            <input type="hidden" name="bid" value="{{q('get.bid')}}">
        </div>
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
        $(obj).prev('img').attr('src', 'resource/images/nopic.jpg');
        $(obj).parent().prev().find('input').val('');
    }
    function edit()
    {
        var data = $('#form').serialize();
        $.post("{{u('edit')}}",data,function(res){
            if(res.valid)
            {
                util.message(res.message,"{{u('index')}}",'success');
            }
            util.message(res.message,'','error');
        },"json")
        return false;
    }
</script>
