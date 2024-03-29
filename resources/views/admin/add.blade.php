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
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form" method="post" action="/read/readadd" enctype="multipart/form-data">
                  <div class="layui-form-item">
                      <label for="username" class="layui-form-label">
                          <span class="x-red">*</span>小说名
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="username" name="read_name" required="" lay-verify="required"
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>
                      </div>
                  </div>
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            <span class="x-red">*</span>小说作者
                        </label>
                        <div class="layui-input-inline">
                            <input type="text" id="username" name="username" required="" lay-verify="required"
                                   autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">
                            <span class="x-red">*</span>
                        </div>
                    </div>
                  <div class="layui-form-item">
                      <label for="phone" class="layui-form-label">
                          <span class="x-red">*</span>小说封面
                      </label>
                      <div class="layui-input-inline">
                          <input type="file" id="file" name="read_file" required=""
                          autocomplete="on" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>
                      </div>
                  </div>

                  <div class="layui-form-item">
                      <label class="layui-form-label"><span class="x-red">*</span>是否上架</label>
                      <div class="layui-input-block">
                        <input type="radio" name="read_show" lay-skin="primary" value="1" title="上架" >
                        <input type="radio" name="read_show" lay-skin="primary" value="2" title="未上架">
                      </div>
                  </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><span class="x-red">*</span>热度</label>
                        <div class="layui-input-block">
                            <input type="radio" name="read_host" lay-skin="primary" value="1" title="火热" >
                            <input type="radio" name="read_host" lay-skin="primary" value="2" title="平淡">
                        </div>
                    </div>

                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                      </label>
                      <input type="submit">
                  </div>
              </form>
            </div>
        </div>
        <script>layui.use(['form', 'layer'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;



                //监听提交

            });</script>

    </body>

</html>
