<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户个人信息</title>
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

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .text span {
            display: inline-block;
            width: 100px;
            margin-right: 20px;
        }
        .submit-btn{
            float: right;
            color: #ffffff;
            background: #2C82FF;
            border-radius: 10px;
            height: 30px;
            line-height: 30px;
            padding: 0 20px;
            outline: none;
            border: none;
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
        <form action="update.php" method="post">
            <p class="text"><span>用户账号：</span><input type="text" value="<?php echo $row['ID']; ?>" name="ID"></p>
            <p class="text"><span>用户姓名：</span><input type="text" value="<?php echo $row['name']; ?>" name="name"></p>
            <p class="text"><span>年龄：</span><input type="text" value="<?php echo $row['age']; ?>" name="age"></p>
            <p class="text"><span>性别：</span><input type="text" value="<?php echo $row['sex']; ?>" name="sex"></p>
            <p class="text"><span>手机号：</span><input type="text" value="<?php echo $row['phone']; ?>" name="phone"></p>
            <p class="text"><span>qq号：</span><input type="text" value="<?php echo $row['qq']; ?>" name="qq"></p>
            <p class="submit"><input type="submit" value="确定" class="submit-btn"></p>
        </form>
    </div>
</div>
<script>
    let form=document.getElementsByTagName('form')[0]
    form.onsubmit=function () {
        let yesOrNo=confirm('确认保存所修改的内容吗?')

        if(yesOrNo){
            return true
        }else {
            return false
        }
    }

</script>
</body>
</html>