<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Analyse.php</title>
</head>
<link rel="stylesheet" href="all.class.css">

<body>
	
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
<?php
echo "<p align='right'><a href='statistics.php'>返回</a></p>";

$link=@mysqli_connect(
							'localhost',
							'root',
							'benjamin0112',
							'final_project');

		mysqli_select_db($link,'final_project');


		echo "<form action='analyse.php' method='post'>";
		echo "請選擇排列方式: ";
		echo "<button name='selectway' value='SUM(A1.hittime) DESC'>總點擊次數大</button>";
		echo "<button name='selectway' value='SUM(A1.hittime) ASC'>總點擊次數小</button>";
		echo "<button name='selectway' value='SUM(A1.savetime) DESC'>總收藏次數大</button>";
		echo "<button name='selectway' value='SUM(A1.savetime) ASC'>總收藏次數小</button>";
		echo "</form>";
		echo "</br>";
		$selectway=$_POST[selectway];
		
		if(isset($selectway)){
			echo "排列方式: ";
				if ($selectway=='SUM(A1.hittime) DESC') {
					echo "總點擊次數大";
				}
				if ($selectway=='SUM(A1.hittime) ASC') {
					echo "總點擊次數小";
				}
				if ($selectway=='SUM(A1.savetime) DESC') {
					echo "總收藏次數大";
				}
				if ($selectway=='SUM(A1.savetime) ASC') {
					echo "總收藏次數小";
				}				
		}else{
			echo "排列方式: 類別";
		}

		$selectway=$_POST[selectway];
		if(isset($selectway)){
		$sql="SELECT A1.type type, SUM(A1.hittime)'Total hittime' , SUM(A1.savetime)'Total savetime'
			  FROM article A1 
			  GROUP BY A1.type 
			  ORDER BY $selectway";
		}else{
		$sql="SELECT A1.type type, SUM(A1.hittime)'Total hittime' , SUM(A1.savetime)'Total savetime'
			  FROM article A1 
			  GROUP BY A1.type 
			  ORDER BY A1.type";
		}
		$result=mysqli_query($link,$sql);

 		echo "</br></br>";
		echo "<table border='1' cellspacing='1'>";
		echo "<tr><td>類別</td><td>總點擊次數</td><td>總收藏次數</td></tr>";
				
		while($t=mysqli_fetch_assoc($result)){
		$type=$t["type"];
		$hittime=$t["Total hittime"];
		$savetime=$t["Total savetime"];

			echo "<tr>";
			echo "<td>".$t["type"]."</td>";
			echo "<td>".$t["Total hittime"]."</td>";
			echo "<td>".$t["Total savetime"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";

	mysqli_close($link);
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