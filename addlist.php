<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";
session_start();
date_default_timezone_set("Asia/Taipei");
$UserName=$_SESSION["login"];
$article_num=$_POST[article_num];
$time=date("Y-m-d H:i:s");

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

$sql1="INSERT INTO list (username,article_no,storetime) VALUES('$UserName', '$article_num', '$time')";		//新增收藏
$insert=mysqli_query($link, $sql1);

$sql7="UPDATE article SET savetime=savetime +1 WHERE article_no='$article_num'";		//計算收藏次數
mysqli_query($link, $sql7);

header("location:javascript://history.back()");		//回上一頁同一個位置

mysqli_close($link);
?>
</div>