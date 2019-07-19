<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户个人信息</title>
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
            margin: 100px auto;
            background: linear-gradient(white ,pink);
            padding:100px;
            border-radius: 20px;
        }
        .title{
            text-align: center;
            margin-bottom: 20px;
          }
      .text span{
          display: inline-block;
          width: 100px;
          margin-right: 20px;
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
$sql="SELECT * FROM information WHERE ID={$ID}";
//执行
$result=mysql_query($sql);
//变为数组
$row=mysql_fetch_array($result);
//关闭
mysql_close($conn);

?>
<div class="result-warp">
    <h3 class="title">用户个人信息</h3>

    <div class="info">
        <p class="text"><span>用户账号：</span><?php echo $row['ID']; ?></p>
        <p class="text"><span>用户姓名：</span><?php echo $row['name']; ?></p>
        <p class="text"><span>年龄：</span><?php echo $row['age']; ?></p>
        <p class="text"><span>性别：</span><?php echo $row['sex']; ?></p>
        <p class="text"><span>手机号：</span><?php echo $row['phone']; ?></p>
        <p class="text"><span>qq号：</span><?php echo $row['qq']; ?></p>
    </div>
</div>

</body>
</html>