<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理首页</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: #efefef;
        }
        table,th,tr,td{
            border: 1px solid #cccccc;
            border-collapse: collapse;
        }
        table{
            width: 100%;
            text-align: center;
        }
        .index-warp{
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
        .insertlink{
            height: 30px;
        }
        .insertlink a{
            display: inline-block;
            height: 30px;
            padding: 0 10px;
            float: right;
        }
        .alluser{
          margin-bottom: 20px;
        }

    </style>
</head>
<body>
<?php

//连接数据库
$conn=mysql_connect("localhost","root","123456");
//选择数据库
mysql_select_db("manage");
//中文
mysql_query("SET NAMES UTF8");
//查询
//$sql="SELECT * FROM information ORDER BY ID DESC LIMIT 20";倒序
$sql="SELECT * FROM information ORDER BY ID LIMIT 20";
//执行
$result=mysql_query($sql);

//关闭
mysql_close($conn);
?>
<div class="index-warp">
    <h2 class="title">学生管理系统</h2>
    <p class="insertlink"><a href="../index.html">添加用户</a></p>
    <p class="alluser">用户清单(每页20)</p>
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>用户名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>手机号</th>
            <th>QQ号</th>
            <th>删除</th>
        </tr>
        <?php
          $x=0;
          while($row=mysql_fetch_array($result)){
           $x++;
        ?>
        <tr>
            <td class="text"><?php echo $x; ?></td>
            <td class="text"><?php echo $row['ID']; ?></td>
            <td class="text"><?php echo $row['name']; ?></td>
            <td class="text"><?php echo $row['age']; ?></td>
            <td class="text"><?php echo $row['sex']; ?></td>
            <td class="text"><?php echo $row['phone']; ?></td>
            <td class="text"><?php echo $row['qq']; ?></td>
            <td class="text">
                <a class="doDelete" href="delete.php?ID=<?php echo $row['ID'];?>">删除</a>
                <a href="info.php?ID=<?php echo $row['ID'];?>">编辑</a>
            </td>

        </tr>
        <?php
        }
        ?>
    </table>



</div>

<script>
    let doDelete=document.getElementsByClassName('doDelete')
    for (let i=0;i<doDelete.length;i++){
        doDelete[i].onclick=function () {
            let yesOrNo=confirm("真的要删除吗")
            if(yesOrNo){
                return true
            }else {
                return false
            }
        }
    }

</script>

</body>
</html>