<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

$upNo=$_POST["upNo"];
$upName=$_POST["upName"];
$upPwd=$_POST["upPwd"];
$upMail=$_POST["upMail"];
$upfeedback=$_POST["upfeedback"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 更新資料
$sql2="UPDATE userid SET name='$upName', password='$upPwd', mail='$upMail', feedback='$upfeedback' WHERE no='$upNo'";
$update=mysqli_query($link, $sql2);
header("location:cmd.php");

mysqli_close($link);
?>
</div>
