<!-- 後端 -->

<?php

$userNo=$_GET["no"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 刪除資料
$sql3="DELETE FROM userid WHERE no='$userNo'";
$delete=mysqli_query($link, $sql3);
header("location:cmd.php");

mysqli_close($link);
?>
