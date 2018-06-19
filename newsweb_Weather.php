<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newsweb_Weather.php</title>
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
<br>
<br>
<br>
	<form action='addhit.php' method='get'>

	<div>
		<!-- 1 -->
		<div class="news"><a target="new" href="addhit.php?article_no=38">
				<img src="http://play.nownews.com/wp-content/uploads/2018/06/%E2%96%B2%E8%BC%95%E9%A2%B1%E9%A6%AC%E5%8A%9B%E6%96%AF-8-%E6%97%A5%E5%87%8C%E6%99%A8%E6%88%90%E5%BD%A2%EF%BC%8C%E5%A5%BD%E5%A4%A9%E6%B0%A3%E6%8C%81%E7%BA%8C%E5%88%B0%E6%98%8E%E5%A4%A9%E7%82%BA%E6%AD%A2%EF%BC%8C%E5%91%A8%E6%97%A5%E8%B5%B7%E7%86%B1%E5%B8%B6%E6%80%A7%E4%BD%8E%E6%B0%A3%E5%A3%93%E5%8F%8A%E5%A4%96%E5%9C%8D%E9%9B%B2%E7%B3%BB%E5%BD%B1%E9%9F%BF%EF%BC%8C%E5%85%A8%E5%8F%B0%E5%90%84%E5%9C%B0%E7%9A%86%E6%9C%89%E4%B8%8B%E9%9B%A8%E6%A9%9F%E6%9C%83%E3%80%82%EF%BC%88%E5%9C%96%EF%BC%8F-NOWnews-%E8%B3%87%E6%96%99%E5%9C%96%E7%89%87%EF%BC%89-1080x640.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 07:47<br><br>又有颱風！<br>好天氣持續到明天<br>周日起全台有雨<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:NOW News 今日新聞
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 2 -->
		<div class="news"><a target="new" href="addhit.php?article_no=39">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpwEiD4v.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/05 20:27<br><br>天氣持續悶熱到周四<br>紫外線高注意防曬<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 3 -->
		<div class="news"><a target="new" href="addhit.php?article_no=40">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpoThw5p.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 06:41<br><br>「馬力斯」颱風凌晨生成<br>今飆36度、週日起全台有雨<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>	

	<div>
		<!-- 4 -->
		<div class="news"><a target="new" href="addhit.php?article_no=41">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpb70voT.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 21:54<br><br>明天高溫衝36度！<br>颱風雲系影響<br>未來一週降雨機率高<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 5 -->
		<div class="news"><a target="new" href="addhit.php?article_no=42">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpO3JbBg.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/05 13:13<br><br>越來越熱！<br>台北中午飆37.4高溫<br>嘉義36.1度<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 6 -->
		<div class="news"><a target="new" href="addhit.php?article_no=43">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phphy6fQv.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 16:36<br><br>雨勢變大下班注意！<br>桃園以南14縣市<br>豪、大雨特報<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 7 -->
		<div class="news"><a target="new" href="addhit.php?article_no=44">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phptizx6D.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/06 14:25<br><br>慎防大雷雨！<br>氣象局示警北部4縣市<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 8 -->
		<div class="news"><a target="new" href="addhit.php?article_no=45">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpAIG3Lj.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/05/31 09:44<br><br>下週將有雙颱形成？<br>氣象局：週日會比較明朗<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 9 -->
		<div class="news"><a target="new" href="addhit.php?article_no=46">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpJqOToG.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/06 11:35<br><br>熱！<br>嘉義、台北近中午飆36度<br>中午恐達37度<br><br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 10 -->
		<div class="news"><a target="new" href="addhit.php?article_no=47">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpLEBLME.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/04 06:27<br><br>各地高溫防「過量級」紫外線<br>南部及東半部明起有陣雨<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 11 -->
		<div class="news"><a target="new" href="addhit.php?article_no=48">
				<img src="http://img.ltn.com.tw/Upload/liveNews/BigPic/600_phpAQeCDq.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/05/26 20:53<br><br>熱！<br>明天氣溫上看37度<br>梅雨鋒面仍不樂觀<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:自由時報
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