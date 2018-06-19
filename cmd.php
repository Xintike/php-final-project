<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cmd.php</title>
</head>
<link rel="stylesheet" href="all.class.css">
<body background="https://i.imgur.com/FDfPNjM.jpg">

<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
<hr>	

<?php
	session_start();

	if (isset($_SESSION["cmdlogin"])) {

		$link=@mysqli_connect(
					'localhost',
					'root',
					'benjamin0112',
					'final_project');
			
			echo "<p align='right'><a href ='statistics.php'>觀看統計</a> <a href ='addarticle.php'>增加文章</a> <a href ='updatearticle.php'>更新文章</a> <a href ='logout.php'>登出</a></p>";

			echo "<form action='lookname.php' method='post'>";
			echo "請輸入搜尋帳號: <input type='txt' name='lookName'><br>";
			echo "請輸入搜尋密碼: <input type='txt' name='lookPwd'><br>";
			echo "請輸入搜尋信箱: <input type='txt' name='lookMail'><br>";
			echo "<input type='submit' value='submit'> ";
			echo "<input type='reset' value='reset'><br>";
			echo "</form>";
			echo "<br>";

		mysqli_select_db($link,'final_project');
		// 查詢資料
		$sql="SELECT * FROM userid";
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

		mysqli_close($link);
	}else{
		echo "非法進入，請先登入!<br>";
		echo "<a href ='loginin.php'>請先登入</a>";
	}
?>

<hr><p align="center">~ Since 2018.06 ~</p>
	<a style="display:scroll;position:fixed;bottom:0px;right:5px;" href="#" title="newsweb.php" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' onmouseover="this.src='https://i.imgur.com/CpNeywZ.png'" src="https://i.imgur.com/HBvqav8.png" onmouseout="this.src='https://i.imgur.com/HBvqav8.png'" /></a>

</body>
</html>