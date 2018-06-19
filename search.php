<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

session_start();

$userName=$_SESSION["login"];
$lookName=$_POST[lookName];

$link=@mysqli_connect(
						'localhost',
						'root',
						'benjamin0112',
						'final_project');

			mysqli_select_db($link,'final_project');

			echo "<table border='1' cellspacing='1'>";
			echo "<tr><td>儲存時間</td><td>文章名稱</td></tr>";

			$sql="SELECT * FROM list WHERE username='$userName'";
			$result=mysqli_query($link,$sql);	
			while($t=mysqli_fetch_assoc($result)){
			$num=$t["article_no"];

					$sql2="SELECT * FROM article WHERE (article_no='$num' AND title like '%". $lookName ."%')";	
					$result2=mysqli_query($link,$sql2);	
					while($row=mysqli_fetch_assoc($result2)){

							echo "<tr>";
							echo "<td>".$t["storetime"]."</td>";
							echo "<td>".$row["title"]."</td>";
							$address=$row["url"];
							echo "<td><a href='$address'>觀看收藏</a></td>";
							echo "</tr>";
					}
			}
			echo "</table>";

		echo "<a href='chart.php'><button type='button'>返回</button></a>";
	
mysqli_close($link);
?>
</div>