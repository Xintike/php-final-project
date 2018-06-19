<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$ANum=$_POST[ANum];
$Atitle=$_POST[Atitle];
$url=$_POST[url];
$type=$_POST[type];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

$sql1="INSERT INTO article (article_no,title,url, type) VALUES('$ANum', '$Atitle', '$url', '$type')";
$insert=mysqli_query($link, $sql1);
header("location:addarticle.php");

mysqli_close($link);
?>
</div>