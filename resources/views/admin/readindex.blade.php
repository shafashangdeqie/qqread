<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <table border="1">
      <tr>
          <td>小说名</td>
          <td>小说封面</td>
          <td>作者</td>
          <td>是否上架</td>
          <td>是否热门</td>
          <td>是否审核</td>
          <td>操作</td>
      </tr>
      @foreach($data as $k=>$v)
      <tr>
          <td>{{$v->read_name}}</td>
          <td><img src="/uploads/{{$v->read_file}}" alt="" height="20%"></td>
          <td>{{$v->username}}</td>
          <td>
              <?php if(($v->read_show)==1){?>
              上架
              <?php }else{?>
                  未上架
              <?php }?>

          </td>
          <td>
              <?php if(($v->read_host)==1){?>
              热门
              <?php }else{?>
              平淡
              <?php }?>
          </td>
          <td>

              <?php if(($v->read_look)==1){?>
              已审核
              <?php }else{?>
              未审核
              <?php }?>
          </td>
          <td><a href="" id="{{$v->read_id}}" class="look">审核通过</a></td>
      </tr>
      @endforeach
  </table>
</body>
</html>

<script src="{{url('js/jquery.min.js')}}"></script>
<script>
    $(function(){
       $(document).on('click','.look',function(){
          var read_id = $(this).prop('id');
           $.ajax({
               url:'/read/readlook',
               type:'GET',
               data:{read_id:read_id},
               success:function(res){
                  if(res.code==200){
                      alert(res.message);
                      history(go);
                  }else{
                      alert(res.message);
                  }
               },
               dataType:'json'
           })
       })
    })
</script>