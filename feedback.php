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
	$userfeedback=$row["feedback"];
	$uNo=$row["no"];
}

	echo "<form action='upfeedback.php' method='post' enctype='multipart/form-data'>";
	echo "User Number:$userNo</br></br>";
	echo "<input type='hidden' name='upNo' value='$userNo'></br>";
	echo "問題回報:</br></br>";
	echo "<textarea rows='20' cols='50' name='feedback'>我有問題要回報: </textarea></br>";
	echo "</br>";
	echo "<input type='submit' value='Submit'> ";
	echo "<a href='chart.php'><button type='button'>Cancel</button></a></br>";
	echo "</form>";

mysqli_close($link);
?>
</div>
