<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加信息</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: #efefef;
        }
        .result-warp{
            width: 800px;
            height: 300px;
            margin: 100px auto;
            background: linear-gradient(white ,pink);
            padding:0 100px;
            border-radius: 20px;
        }
        .insert{
            font-size: 40px;
            text-align: center;
            line-height: 300px;
        }

    </style>
</head>
<body>
<?php
//通过提交的表单获取信息
$ID=$_POST["ID"];
$name=$_POST["name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$phone=$_POST["phone"];
$qq=$_POST["qq"];
//连接数据库
$conn=mysql_connect("localhost","root","123456");
//选择数据库
mysql_select_db("manage");
//中文
mysql_query("SET NAMES UTF8");
//插入
$sql="INSERT INTO information VALUES ({$ID},'{$name}',{$age},'{$sex}',{$phone},{$qq})";
//执行
$result=mysql_query($sql);
//关闭
mysql_close($conn);

?>
<div class="result-warp">
    <div class="insert">
        <?php
    if($result==1){
    echo "插入成功";
    }else{
    echo "插入失败";
    }
    ?>
    </div>

</div>

</body>
</html>