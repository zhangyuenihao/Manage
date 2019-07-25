<?php
//通过提交的表单获取信息
$ID=$_GET["ID"];

//连接数据库
$conn=mysql_connect("localhost","root","123456");
//选择数据库
mysql_select_db("manage");
//中文
mysql_query("SET NAMES UTF8");
//查询
$sql="SELECT ID FROM information WHERE ID={$ID}";
//执行
$result=mysql_query($sql);
//结果数量
$num=mysql_num_rows($result);
    if($num != 0){
    echo "0";
    }else{
    echo "1";
    }
//关闭
//mysql_close($conn);

?>