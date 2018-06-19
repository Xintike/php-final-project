<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$lookName=$_POST[lookName];
$lookPwd=$_POST[lookPwd];
$lookMail=$_POST[lookMail];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 查詢資料
$sql="SELECT * FROM userid WHERE  name like '%". $lookName ."%' || password='$lookPwd' || mail='$lookMail'";
$result=mysqli_query($link,$sql);
echo "<table border='1' cellspacing='1'>";
echo "<tr><td>編號</td><td>帳號</td><td>密碼</td><td>信箱</td><td>回報問題</td></tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["no"]."</td>";
	$uNo=$row["no"];
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["password"]."</td>";
	echo "<td>".$row["mail"]."</td>";
	echo "<td>".$row["feedback"]."</td>";
	echo "<td>"."<a href='delete.php?no=$uNo'>刪除資料"."</td>";
	echo "<td>"."<a href='update.php?no=$uNo'>更新資料"."</td>";
	echo "<td>"."<a href='mail2user.php?no=$uNo'>寄送信件"."</td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='cmd.php'><button type='button'>返回</button></a>";
mysqli_close($link);
?>
</div>