<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

$listNo=$_GET["no"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 刪除資料
$sql4="DELETE FROM list WHERE no='$listNo'";
$delete=mysqli_query($link, $sql4);
header("location:chart.php");

mysqli_close($link);
?>
</div>