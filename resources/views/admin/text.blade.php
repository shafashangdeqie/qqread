<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="{{url('css/font.css')}}">
        <link rel="stylesheet" href="{{url('css/xadmin.css')}}">
        <script type="text/javascript" src="{{url('lib/layui/layui.js')}}" charset="utf-8"></script>
        <script type="text/javascript" src="{{url('js/xadmin.js')}}"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]--></head>
    
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form" action="/read/dotext" method="post">
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            <span class="x-red">*</span>作者</label>
                        <div class="layui-input-inline">
                            <input type="text" id="username" name="username" required="" lay-verify="required" autocomplete="off" class="layui-input"></div>
                    </div>
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            <span class="x-red">*</span>书名</label>
                        <div class="layui-input-inline">
                            <input type="text" id="read_name" name="read_name" required="" lay-verify="required" autocomplete="off" class="layui-input"></div>
                    </div>
        </tbody>
        </table>
        <div class="layui-form-item layui-form-text">
            <label for="desc" class="layui-form-label">内容</label>
            <div class="layui-input-block">
                <script id="container" name="text" type="text/plain">
                 </script>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label"></label>
            <button class="layui-btn" lay-filter="add" lay-submit="">增加</button></div>
        </form>
        </div>
        </div>
        <script>layui.use(['form', 'layer'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;


            });</script>
    </body>

</html>
<!-- 配置文件 -->
<script type="text/javascript" src="{{url('ueditor/ueditor.config.js')}}"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{url('ueditor/ueditor.all.js')}}"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var editor = UE.getEditor('container',{initialFrameHeight:300,initialFrameWidth:1000 });

    editor.render("myEditor");
</script>
