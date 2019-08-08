<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/read/doturbot" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>轮播图</td>
            <td><input type="file" name="turbot_file"></td>
        </tr>
        <tr>
            <td>是否展示</td>
            <td>
                <input type="radio" value="1" name="turbot_show">是
                <input type="radio" value="2" name="turbot_show">否
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>