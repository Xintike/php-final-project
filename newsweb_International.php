<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newsweb_International.php</title>
</head>
<link rel="stylesheet" href="all.class.css">
<body>
	
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
	
<div class="bg_op">
<div class="BT">
<?php
	session_start();

	if (isset($_SESSION["login"])) {
		echo "<p align='right' style='float:right'><a href='chart.php'>收藏文章</a> <a href='logout.php'>登出</a></p>";
	}else{
		echo "<p align='right' style='float:right'><a href='loginin.php'>登入</a>   <a href='creatid.php'>註冊</a></p>";
	}
	
?>
</div>
<div class="type">
	<a href="newsweb.php" class="a1">精選</a> <a href="newsweb_International.php"class="a2">國際</a> <a href="newsweb_Life.php" class="a3">生活</a> <a href="newsweb_Sport.php" class="a4">體育</a> <a href="newsweb_Weather.php" class="a5">天氣</a> <a href="newsweb_Social.php" class="a6">社會</a>
</div>
<br><br><br>
	<form action='addhit.php' method='get'>

	<div>
		
		<!-- 1 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=4">
				<img src="https://s4.itho.me/sites/default/files/styles/picture_size_large/public/field/image/34392937_1392275970874689_7033504002310406144_n_0.png?itok=M3RZoBv4" width="370" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/04 <br><br>GitHub真的賣了！<br>微軟大砸75億美元買下GitHub<br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:iThome
				</p>
			</a></div></li>
			
	</div>

	<div>
		
		<!-- 2 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=5">
				<img src="https://ichef.bbci.co.uk/news/624/cpsprodpb/10699/production/_101852276_9887bf7e-9f39-473e-b924-4a566da15394.jpg" width="330" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/03 <br><br>英倫熱議：<br>「北京在南海對鄰國耀武揚威」<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:BBC News 中文網
				</p>
			</a></div></li>
			
	</div>


	<div>
		
		<!-- 3 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=6">
				<img src="http://img5.cna.com.tw/www/WebPhotos/800/20180603/49030386.jpg" width="300" height="300"></br><br><p align="center" class="news-intro"><br>2018/06/04 08:43 <br><br>夏威夷火山熔岩入湖泊<br>整座湖水蒸發<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:中央通訊社
				</p>
			</a></div></li>
			
	</div>	

	<div>
		
		<!-- 4 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=8">
				<img src="http://img5.cna.com.tw/www/WebPhotos/800/20180605/56697389.jpg" width="380" height="190"></br><br><p align="center" class="news-intro"><br>2018/06/05 09:03 <br><br>iOS 12推擴增實境等8大功能<br>今年秋季正式釋出<br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br>
			<br>
			source:中央通訊社
				</p>
			</a></div></li>
			
	</div>

	<div>
		
		<!-- 5 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=9">
				<img src="http://img5.cna.com.tw/www/WebPhotos/800/20180604/41225988.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/04 22:42 <br><br>斥資13.7億<br>傳夏普將買下東芝電腦公司 <br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:中央通訊社
				</p>
			</a></div></li>
			
	</div>

	<div>
		<!-- 6 -->
		<div class="news"><a target="new" href="addhit.php?article_no=12">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpf2dm8B.jpg" width="300" height="300"></br><br><p align="center" class="news-intro"><br>2018/06/07 09:03 <br><br>謎之攻擊？<br>美駐廣州領事館<br>又2職員聽到怪聲生病撤離<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 7 -->
		<div class="news"><a target="new" href="addhit.php?article_no=13">
				<img src="https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2018/06/07/99/4839406.jpg&x=0&y=0&sw=0&sh=0&sl=W&fw=1140" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/01 10:24 <br><br>悲劇的瓜地馬拉臉孔：<br>火之火山再活動，<br>罹難數增至99死<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:轉角國際
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 8 -->
		<div class="news"><a target="new" href="addhit.php?article_no=14">
				<img src="https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2018/06/07/realtime/4838899.jpg&x=0&y=0&sw=0&sh=0&sl=W&fw=1050&exp=3600" width="380" height="190"></br><br><p align="center" class="news-intro"><br>2018/06/01 10:24 <br><br>QS世界大學排名<br>台大72名、<br>北醫大全國私校第一<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:聯合新聞網
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 9 -->
		<div class="news"><a target="new" href="addhit.php?article_no=15">
				<img src="https://pgw.udn.com.tw/gw/photo.php?u=https://uc.udn.com.tw/photo/2018/06/06/realtime/4837657.jpg&x=0&y=0&sw=0&sh=0&sl=W&fw=1050&exp=3600" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/01 10:24 <br><br>川金會為何不在香格里拉？<br> 安全專家分析<br>嘉佩樂酒店中選原因<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:聯合新聞網
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 10 -->
		<div class="news"><a target="new" href="addhit.php?article_no=16">
				<img src="http://img.ltn.com.tw/2018/new/jun/6/images/bigPic/600_188.jpg" width="220" height="300"></br><br><p align="center" class="news-intro"><br>2018/06/01 10:24 <br><br>派艦穿台海？<br>美放消息<br>要中國跳腳<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 11 -->
		<div class="news"><a target="new" href="addhit.php?article_no=3">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-01/656/20180601001612.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/01 10:24 <br><br>她警告：<br>衝擊更勝希臘危機、英國脫歐<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>	
	

<div class="clear"></div>
<div class="footer">
<hr>
<p align="center">~ Since 2018.06 ~</p>
	<a class="backtotop" style="display:scroll;position:fixed;bottom:0px;right:0px;" href="#" title="newsweb.php" onFocus="if(this.blur)this.blur()">
	<img alt='' border='0' onmouseover="this.src='https://i.imgur.com/CpNeywZ.png'" src="https://i.imgur.com/HBvqav8.png" onmouseout="this.src='https://i.imgur.com/HBvqav8.png'" /></a>
</div>

	
</form>
</div>
</body>

</html>