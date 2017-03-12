x`<extend file='resource/view/master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">商品管理</a></li>
        <li class="active"><a href="">商品编辑</a></li>
    </ul>
    <form class="form-horizontal" onsubmit="return goodsEdit()" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">商品管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="gname" value="{{$oldData['gname']}}" class="form-control" placeholder="请填写商品名称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属分类</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="cid">
                            <option value="0">请选择分类</option>
                            <foreach from="$cateData" key="$k" value="$v">
                                <option <if value="$oldData['cid'] == $v['cid']">selected="selected"</if> value="{{$v['cid']}}" tid="{{$v['tid']}}" >{{$v['_cname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <script>
                    $(function(){
                        var oldattr = $("#attr").html();
                        var oldspec= $("#spec").html();
                        $('select[name=cid]').change(function(){
                            var cid = $(this).val();
                            //:selected获取select选中的元素
                            var tid = $(":selected").attr('tid');
                            //将tid写入到隐藏域中
                            $('input[name=tid]').val(tid);
                            if(cid=={{$oldData['cid']}})
                            {
                                $("#attr").html(oldattr);
                                $("#spec").html(oldspec);
                                return;
                            }

                            if(tid==0)
                            {
                                alert('顶级分类不允许添加商品');
                                $(this).val(0);
                                return false;
                            }
                            $.post("{{u('ajaxGetAttr')}}",{tid:tid},function(res){
                                var attr = '';
                                var spec = '';
                                attr += '<table class="table table-striped">';
                                spec += '<table class="table table-striped">';
                                $.each(res,function(k,v){
                                    if(v.class==0){//说明是属性
                                        attr += '<tr><td>'+ v.taname+'</td><td>';
                                        attr += '<select name="attr['+ v.taid+']" id=""><option value="0">请选择</option>';
                                        $.each(v.tavalue,function(kk,vv){
                                            attr += '<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        attr += '</select></td></tr>';
                                    }else{//说明是规格
                                        spec += '<tr><td>'+ v.taname+'</td><td>';
                                        spec += '<select name="spec['+ v.taid+'][color][]" id=""><option value="0">请选择</option>';
                                        $.each(v.tavalue,function(kk,vv){
                                            spec += '<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        spec += '</select></td><td>附加价格</td>';
                                        spec += '<td><input type="text" name="spec['+ v.taid+'][added][]"></td><td><button type="button" class="btn btn-primary btn-xs addspec">添加</button></td></tr>';
                                    }
                                })
                                attr +='</table>';
                                spec += '</table>';
                                $('#attr').html(attr);
                                $("#spec").html(spec);
                            },'json')
                        })
                    })
                </script>
                <!--                //添加按钮-->
                <script>
                    $(function () {
                        $('#spec').delegate('.addspec','click',function () {
                            //复制父级tr
                            var tr = $(this).parents('tr').clone();
                            //移除原有的添加按钮
                            tr.find('.addspec').remove();
                            var del = '<button type="button" class="btn btn-danger btn-xs delspec">删除</button>';
                            //在原来删除的位置添加一个删除按钮
                            tr.find('td').eq(4).append(del);
                            $(this).parents('tr').after(tr);
                        })
                        $('#spec').delegate('.delspec','click',function () {
                            $(this).parents('tr').remove();
                        })
                    })
                </script>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属品牌</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="bid">
                            <option value="0">请选择品牌</option>
                            <foreach from="$brandData" key="$k" value="$v">
                                <option <if value="$v['bid'] == $oldData['bid']">selected="selected"</if> value="{{$v['bid']}}">{{$v['bname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品属性</label>
                    <div class="col-sm-9" id="attr">
                        <table class="table table-striped">
                            <foreach from="$toData" key="$k" value="$v">
                            <tr>
                                <td>{{$v['taname']}}</td>
                                <td>
                                    <select name="attr[{{$v['taid']}}]">
                                        <option value="0">请选择</option>
                                        <foreach from="$v['tavalue']" key="$key" value="$value">
                                        <option <if value="$v['gtvalue'] == $value">selected="selected"</if> value="{{$value}}">{{$value}}</option>
                                        </foreach>
                                    </select>
                                </td>
                            </tr>
                            </foreach>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品规格</label>
                    <div class="col-sm-9" id="spec">
                        <table class="table table-striped">
                            <foreach from="$poData" key="$k" value="$v">
                                <tr>
                                    <td>{{$v['taname']}}</td>
                                    <td>
                                        <select name="spec[{{$v['taid']}}][color][]">
                                            <option value="0">请选择</option>
                                            <foreach from="$v['tavalue']" key="$key" value="$value">
                                                <option <if value="$v['gtvalue'] == $value">selected="selected"</if> value="{{$value}}">{{$value}}</option>
                                            </foreach>
                                        </select>
                                    </td>
                                    <td>附加价格</td>
                                    <td><input type="text" name="spec[{{$v['taid']}}][added][]" value="{{$v['added']}}"></td>
                                    <td><button type="button" class="btn btn-danger btn-xs delspec">删除</button></td>
                                </tr>
                                <script>
                                    $(function(){
                                        $("#spec").find("tr:contains('{{$v['taname']}}')").eq(0).find("td:last").html('<button type="button" class="btn btn-primary btn-xs addspec">添加</button>');
                                    })
                                </script>
                            </foreach>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品货号</label>
                    <div class="col-sm-9">
                        <input type="text" name="gnumber" value="{{$oldData['gnumber']}}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">单位</label>
                    <div class="col-sm-9">
                        <input type="text" name="unit" value="{{$oldData['unit']}}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">市场价</label>
                    <div class="col-sm-9">
                        <input type="text" name="marketprice" value="{{$oldData['marketprice']}}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商城价</label>
                    <div class="col-sm-9">
                        <input type="text" name="shopprice" value="{{$oldData['shopprice']}}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">总库存</label>
                    <div class="col-sm-9">
                        <input type="text" name="total" value="{{$oldData['total']}}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">列表图</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="pic" readonly="" value="{{$oldData['pic']}}">
                            <div class="input-group-btn">
                                <button onclick="upImage(this)" class="btn btn-default" type="button" >选择图片
                                </button>
                            </div>
                        </div>
                        <div class="input-group" style="margin-top:5px;">
                            <img  src="{{$oldData['pic']}}" class="img-responsive img-thumbnail liebiaotu"
                                  width="150" height="100">
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">商品图册</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button onclick="manyupImage(this)" class="btn btn-default" type="button">选择图片</button>
                            </div>
                        </div>
                        <div class="input-group" id="box" style="margin-top:5px;">
                            <foreach from="$detailData['big']" key="$k" value="$v">
                                <div style="padding: 5px;position: relative;float: left">
                                    <li style="float: left;list-style: none;">
                                        <img src="{{$v}}" alt="" width="150" class="img-responsive img-thumbnail">
                                        <input type="hidden" name="logo[]" value="{{$v}}">
                                    </li>
                                    <span onclick="removeManyImg(this)" style="color:red;position: absolute;right: 10px;top:5px;cursor: pointer">X</span>
                                </div>
                            </foreach>
                        </div>
                        <span class="help-block">建议大小(宽100高100)</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点击次数</label>
                    <div class="col-sm-9">
                        <input type="text" name="click" value="{{$oldData['click']}}" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">商品详情</label>
                    <div class="col-sm-9">
                        <textarea id="intro" name="intro" style="height:300px;width:100%;">{{$detailData['intro']}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">售后服务</label>
                    <div class="col-sm-9">
                        <textarea id="service" name="service" style="height:300px;width:100%;">{{$detailData['service']}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="gid" value="{{q('get.gid')}}">
        <input type="hidden" name="tid" value="{{$oldData['tid']}}">
        <button class="btn btn-primary" type="submit">确定</button>
    </form>

</block>
<script>
    //商品图册删除
    function removeManyImg(obj)
    {
        $(obj).parent().remove();
    }
</script>
<script>
    //上传
    function upImage(obj) {
        require(['util'], function (util) {
            util.image(function (images) {
                $("[name='pic']").val(images[0]);
                $(".liebiaotu").attr('src', images[0]);
            }, {})
        })
    }
    //百度编辑器
    require(['util'], function (util) {
        util.ueditor('container', {}, function (editor) {
            //这是回调函数 editor是百度编辑器实例
        });
    })
</script>
<script>
    //上传图片
    function manyupImage(obj) {
        require(['util'], function (util) {
            options = {
                //上传多图
                multiple: true,
            };
            util.image(function (images) {
                $(images).each(function(k,v){
                    $('<li style="float: left;list-style: none"> <img src="'+v+'" class="img-responsive img-thumbnail" height="100" width="150"><input type="hidden" name="logo[]" value="'+v+'"></li>').appendTo('#box');
                })
                $('.cha').remove();
            }, options)
        });
    }
</script>
<script>
    util.ueditor('service', {hash:2,data:'hd'}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
    util.ueditor('intro', {hash:2,data:'hd'}, function (editor) {
        //这是回调函数 editor是百度编辑器实例
    });
</script>
<script>
    function goodsEdit()
    {
        var data = $('#form').serialize();
        $.post("{{u('edit')}}",data,function (res) {
            if(res.valid)
            {//成功
                //参数：提示消息，跳转地址，成功
                util.message(res.message,"{{u('index')}}",'success');
            }else{//失败
                util.message(res.message,"",'error');
            }
        },'json')
        return false;
    }
</script>