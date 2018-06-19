<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$userNo=$_GET["no"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

$sql="SELECT * FROM userid WHERE no='$userNo'";
$result=mysqli_query($link,$sql);

while($row=mysqli_fetch_assoc($result)){
	$userNo=$row["no"];
	$userName=$row["name"];
	$userPwd=$row["password"];
	$userMail=$row["mail"];
	$upfeedback=$row["feedback"];
}

	echo "<form action='updateDone.php' method='post'>";
	echo "User Number:$userNo";
	echo "<input type='hidden' name='upNo' value='$userNo'></br>";
	echo "User Account:<input type='txt' name='upName' value='$userName'></br>";
	echo "User Password:<input type='txt' name='upPwd' value='$userPwd'></br>";
	echo "User Mail:<input type='txt' name='upMail' value='$userMail'></br>";
	echo "User feedback:<input type='txt' name='upfeedback' value='$upfeedback'></br>";
	echo "<input type='submit' value='update'>";
	echo " <a href='cmd.php'><button type='button'>Back</button></a></>";
	echo "</form>";

mysqli_close($link);
?>
</div>