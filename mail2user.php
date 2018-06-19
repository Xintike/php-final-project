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
}

	echo "<form action='sendmail.php' method='post' enctype='multipart/form-data'>";
	echo "User Number:$userNo";
	echo "User Account:$userName</br>";
	echo "Your email:<input type='email' name='fromemail' value='a1053350@mail.nuk.edu.tw'></br>";
	echo "Send to Address:<input type='email' name='sendemail' value='$userMail'></br>";
	echo "mail Subject:<input type='text' name='subject' value='《NewsWeb系統管理員》'></br>";
	echo "Your message:</br>";
	echo "<textarea rows='20' cols='50' name='message'>親愛的用戶您好！</textarea></br>";
	echo "</br>";
	echo "File: <input type='file' name='file'></br>";
	echo "</br>";
	echo "<input type='submit' value='寄信'> ";
	echo "<a href='cmd.php'><button type='button'>取消</button></a></br>";
	echo "</form>";

mysqli_close($link);
?>
</div>