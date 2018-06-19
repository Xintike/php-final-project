<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php
echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$upNo=$_POST["upNo"];
$upfeedback=$_POST["feedback"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 更新資料
$sql1="UPDATE userid SET feedback='$upfeedback' WHERE no='$upNo'";

$update=mysqli_query($link, $sql1);
header("location:chart.php");

mysqli_close($link);
?>
</div>