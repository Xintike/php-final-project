<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

session_start();
date_default_timezone_set("Asia/Taipei");		//收藏文章
$UserName=$_SESSION["login"];
$article_num=$_GET["article_num"];
$time=date("Y-m-d H:i:s");

$article_no=$_GET["article_no"];		//點擊次數
$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

	if(isset($article_no)){
		$sql8="UPDATE article SET hittime=hittime +1 WHERE article_no='$article_no'";		//計算點擊次數
		mysqli_query($link, $sql8);

		$url="SELECT url FROM article WHERE article_no='$article_no'";
		$result=mysqli_query($link, $url);

			while($row=mysqli_fetch_assoc($result)){
				$tourl=$row["url"];
			}

		header("location:$tourl");		//跳轉業面

	}else{
		$sql1="INSERT INTO list (username,article_no,storetime) VALUES('$UserName', '$article_num', '$time')";		//新增收藏
		$insert=mysqli_query($link, $sql1);

		$sql7="UPDATE article SET savetime=savetime +1 WHERE article_no='$article_num'";		//計算收藏次數
		mysqli_query($link, $sql7);

		header("location:javascript://history.back()");		//回上一頁同一個位置
	}

mysqli_close($link);
?>
</div>