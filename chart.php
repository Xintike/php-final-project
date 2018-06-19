<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>chart.php</title>
</head>
<link rel="stylesheet" href="all.class.css">
<body>


<?php
	session_start();

	$userName=$_SESSION["login"];

	if (isset($_SESSION["login"])) {
		echo "<p align='right'>";

		echo "<a href ='newsweb.php'>回首頁</a> <a href ='feedback4user.php'>回報問題</a> <a href ='change4user.php'>個人資料</a> <a href ='logout.php'>登出</a></p>";

		echo "$userName 您好，歡迎回來！";
		echo "<H1 font-size='25' align='center'>《收藏的文章》</H1>";
		echo "<hr>";

		echo "<form action='search.php' method='post'>";
		echo "請輸入文章名稱:<input type='txt' name='lookName'>";
		echo "<input type='submit' value='search'> ";
		echo "<input type='reset' value='clean'>";
		echo "</form>";
		echo "</br>";

		$link=@mysqli_connect(
							'localhost',
							'root',
							'benjamin0112',
							'final_project');

				mysqli_select_db($link,'final_project');

				$sql="SELECT * FROM list WHERE username='$userName'";
				$result=mysqli_query($link,$sql);

				echo "<table border='1' cellspacing='1'>";
				echo "<tr><td>儲存時間</td><td>文章名稱</td></tr>";
				
				while($t=mysqli_fetch_assoc($result)){
				$num=$t["article_no"];
				$no=$t["no"];
				$sql2="SELECT * FROM article WHERE article_no='$num'";
				$order=mysqli_query($link,$sql2);

						while($row=mysqli_fetch_assoc($order)){
						echo "<tr>";
						echo "<td>".$t["storetime"]."</td>";
						echo "<td>".$row["title"]."</td>";
						$address=$row["url"];
						echo "<td><a target='new' href='$address'>觀看收藏</a></td>";
						echo "<td><a href='deletearticle.php?no=$no'>刪除</a></td>";
						echo "</tr>";
						}
				}
				echo "</table>";

			mysqli_close($link);
	}else{
		echo "非法進入，請先登入!<br>";
		echo "<a href ='loginin.php'>請先登入</a>";
	}
?>

<div class="clear"></div>
<div class="footer">
<hr>
<p align="center">~ Since 2018.06 ~</p>
	<a class="backtotop" style="display:scroll;position:fixed;bottom:0px;right:0px;" href="#" title="newsweb.php" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' onmouseover="this.src='https://i.imgur.com/CpNeywZ.png'" src="https://i.imgur.com/HBvqav8.png" onmouseout="this.src='https://i.imgur.com/HBvqav8.png'" /></a>
</div>

	
</form>
</body>

</html>