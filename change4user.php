<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php
echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

session_start();

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

echo "<p align='right'><a href ='chart.php'>回個人收藏</a></p>";

echo "<br>";
$userName=$_SESSION["login"];
mysqli_select_db($link,'final_project');
// 查詢資料
$sql="SELECT * FROM userid WHERE name='$userName'";
$result=mysqli_query($link,$sql);
echo "<table border='1' cellspacing='1'>";
echo "<tr><td>編號</td><td>帳號</td><td>密碼</td><td>信箱</td></tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["no"]."</td>";
	$uNo=$row["no"];
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["password"]."</td>";
	echo "<td>".$row["mail"]."</td>";
	echo "</tr>";
}
echo "</table>";

echo "<a href='update4user.php?no=$uNo'><button type='button'>更改資料</button></a>";
echo " ";
echo "<a href='chart.php'><button type='button'>取消</button></a></br>";
echo "</br>";

mysqli_close($link);
?>
</div>