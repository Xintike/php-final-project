<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php
//普通用戶
$userName=$_POST[userName];
$userPwd=$_POST[userPwd];
//管理員
$cmdName=benjamin;
$cmdPwd=5566;

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

session_start();

$link=@mysqli_connect(
			'localhost',
			'root',
			'cindy3239',
			'final_project');

mysqli_select_db($link,'final_project');

$sql="SELECT * FROM userid WHERE name='$userName'";
$dbdata=mysqli_query($link,$sql);

while($row=mysqli_fetch_assoc($dbdata)){
	$usr=$row["name"];
	$psw=$row["password"];
}
//判斷有無帳號與身分
if ($userName==$usr && $userPwd==$psw){
	$_SESSION["login"]="$userName";
		header("location:chart.php");
}else if($userName==$cmdName && $userPwd==$cmdPwd){
	$_SESSION["cmdlogin"]="$cmdName";
		header("location:cmd.php");
}else{
	echo "login faild, transfer to login page in 3 seconds<br>";
		header("refresh:3; url='loginin.php'");
}

mysqli_close($link);
?>
</div>