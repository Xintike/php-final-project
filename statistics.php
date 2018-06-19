<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>statistics.php</title>
</head>
<link rel="stylesheet" href="all.class.css">

<body>
	
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
<div id="login_box">
<?php
echo "<p align='right'><a href='analyse.php'>資料分析</a> <a href='cmd.php'>返回</a></p>";

$link=@mysqli_connect(
							'localhost',
							'root',
							'benjamin0112',
							'final_project');

		mysqli_select_db($link,'final_project');

		echo "<form action='statistics.php' method='post'>";
		echo "請選擇排列方式: ";
		echo "<button name='selectway' value='article_no'>編號</button>";
		echo "<button name='selectway' value='type'>類型</button>";
		echo "<button name='selectway' value='hittime DESC'>點擊次數多</button>";
		echo "<button name='selectway' value='hittime ASC'>點擊次數少</button>";
		echo "<button name='selectway' value='savetime DESC'>收藏次數多</button>";
		echo "<button name='selectway' value='savetime ASC'>收藏次數少</button> ";
		echo "</form><br>";

		$selectway=$_POST[selectway];

		if(isset($selectway)){
			echo "排列方式: ";
			if($selectway=='article_no'){
				echo "編號";
			}
			if($selectway=='type'){
				echo "類型";
			}
			if($selectway=='hittime DESC'){
				echo "點擊次數多";
			}
			if($selectway=='hittime ASC'){
				echo "點擊次數少";
			}
			if($selectway=='savetime DESC'){
				echo "收藏次數多";
			}
			if($selectway=='savetime ASC'){
				echo "收藏次數少";
			}	
		}else{
			echo "排列方式: 編號";
		}

		if(isset($selectway)){
			$selectway=$_POST[selectway];	//type		//savetime DESC|ASC		//hittime DESC|ASC
			$sql="SELECT * FROM article ORDER BY $selectway";
			$result=mysqli_query($link,$sql);
		}else{
			$sql="SELECT * FROM article";
			$result=mysqli_query($link,$sql);	
		}

		echo "</br></br>";
		echo "<table border='1' cellspacing='1'>";
		echo "<tr><td>編號</td><td>標題</td><td>類別</td><td>點擊次數</td><td>收藏次數</td></tr>";
				
		while($t=mysqli_fetch_assoc($result)){
		$article_no=$t["article_no"];
		$title=$t["title"];
		$type=$t["type"];
		$hittime=$t["hittime"];
		$savetime=$t["savetime"];

			echo "<tr>";
			echo "<td>".$t["article_no"]."</td>";
			echo "<td>".$t["title"]."</td>";
			echo "<td>".$t["type"]."</td>";
			echo "<td>".$t["hittime"]."</td>";
			echo "<td>".$t["savetime"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";

	mysqli_close($link);
?>
</div>

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