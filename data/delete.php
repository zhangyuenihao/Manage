<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加信息</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #efefef;
        }

        .result-warp {
            width: 800px;
            margin: 100px auto;
            background: linear-gradient(white, pink);
            padding: 100px;
            border-radius: 20px;
        }

        .delete {
            height: 100px;
            text-align: center;
            font-size: 40px;
            line-height: 100px;
        }

    </style>
</head>
<body>
<?php
//通过提交的表单获取信息
$ID=$_GET["ID"];

//连接数据库
$conn=mysql_connect("localhost","root","123456");
//选择数据库
mysql_select_db("manage");
//中文
mysql_query("SET NAMES UTF8");
//插入
$sql="DELETE FROM information WHERE ID={$ID}";
//执行
$result=mysql_query($sql);

//关闭
mysql_close($conn);

?>
<div class="result-warp">
    <div class="delete">
        <?php
    if($result==1){
    echo "删除成功";
    }else{
    echo "删除失败";}
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