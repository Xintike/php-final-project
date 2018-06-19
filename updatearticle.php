<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>updatearticle.php</title>
</head>
<body background="https://i.imgur.com/FDfPNjM.jpg">

<H1 size="10" align="center">NewsWeb</H1>
<hr>	
<?php


$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

echo "<p align='right'><a href ='cmd.php'>返回</a></p>";

$sql="SELECT * FROM article ";
$result=mysqli_query($link,$sql);
echo "<table border='1' cellspacing='1'>";
echo "<tr><td>編號</td><td>文章名稱</td><td>網址</td></tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row["article_no"]."</td>";
	$aNo=$row["article_no"];
	echo "<td>".$row["title"]."</td>";
	echo "<td>".$row["url"]."</td>";
	echo "<td>"."<a href='cmdupdatearticle.php?article_no=$aNo'>更新資料"."</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>

<br>
<hr><p align="center">~ Since 2018.06 ~</p>
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="newsweb.php" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' onmouseover="this.src='https://i.imgur.com/CpNeywZ.png'" src="https://i.imgur.com/HBvqav8.png" onmouseout="this.src='https://i.imgur.com/HBvqav8.png'" /></a>
</body>
</html>