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
	$userPwd=$row["password"];
	$userMail=$row["mail"];
	$userName=$row["name"];
}

	echo "<form action='updatedown4user.php' method='post'>";
	echo "User Number:$userNo";
	echo "<input type='hidden' name='upNo' value='$userNo'></br>";
	echo "User Account:$userName";
	echo "<input type='hidden' name='upName' value='$userName'></br>";
	echo "User Password:<input type='txt' name='upPwd' value='$userPwd'></br>";
	echo "User Mail:<input type='txt' name='upMail' value='$userMail'></br>";
	echo "<input type='submit' value='Submit'> ";
	echo "<a href='chart.php'><button type='button'>Cancel</button></a></br>";
	echo "</form>";

mysqli_close($link);
?>
</div>