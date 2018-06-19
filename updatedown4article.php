<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

$article_no=$_POST["article_no"];
$newtitle=$_POST["newtitle"];
$newurl=$_POST["newurl"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');
// 更新資料

$sql6="UPDATE article SET title='$newtitle', url='$newurl' WHERE article_no='$article_no'";
$update=mysqli_query($link, $sql6);
header("location:updatearticle.php");

mysqli_close($link);
?>
</div>