<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php
echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$ANo=$_GET["article_no"];

$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

$sql5="SELECT * FROM article WHERE article_no='$ANo'";
$result=mysqli_query($link,$sql5);

while($row=mysqli_fetch_assoc($result)){
	$title=$row["title"];
	$url=$row["url"];
}

	echo "<form action='updatedown4article.php' method='post'>";
	echo "Article Number:$ANo";
	echo "<input type='hidden' name='article_no' value='$ANo'></br>";
	echo "Title:<input type='txt' name='newtitle' value='$title'></br>";
	echo "URL:<input type='txt' name='newurl' value='$url'></br>";
	echo "<input type='submit' value='Submit'> ";
	echo "<a href='updatearticle.php'><button type='button'>Cancel</button></a></br>";
	echo "</form>";

mysqli_close($link);
?>
</div>