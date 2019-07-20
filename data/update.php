<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改信息</title>
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
        .update{
            font-size: 40px;
            text-align: center;
            line-height: 300px;
        }

    </style>
</head>
<body>
<?php
$ID=$_POST["ID"];
$name=$_POST["name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$phone=$_POST["phone"];
$qq=$_POST["qq"];
//创建连接
$conn=mysql_connect("localhost","root","123456");
//选择数据库
mysql_select_db("manage");
//选择语言
mysql_query("SET NAMES UTF8");
//执行语句
$sql="UPDATE information SET name='{$name}',age={$age},sex='{$sex}',phone={$phone},qq={$qq} WHERE ID={$ID}";
$result=mysql_query($sql);
mysql_close($conn)
?>
<div class="result-warp">
    <div class="update">
        <?php
    if($result==1){
    echo "修改成功";
    }else{
    echo "修改失败";
    }
    ?>
    </div>

</div>
<script>
    setTimeout(function () {
        window.location='http://localhost/Manage/data/index.php'
    },1000)

</script>
</body>
</html>