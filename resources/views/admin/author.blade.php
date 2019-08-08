<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>作者id</td>
            <td>作者</td>
            <td>操作</td>
        </tr>
        @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td><a href="">修改</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>