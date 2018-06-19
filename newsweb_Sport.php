<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newsweb_Sport.php</title>
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
		<div class="news"><a target="new" href="addhit.php?article_no=27">
				<img src="https://imagelab.nownews.com/?w=1080&q=85&src=https://rssimg.nownews.com/images/5b0f7ed2dfa8ef23864222e4_201805311249.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 11:36<br><br>【MLB】<br>大谷4局失1分<br>提前被換下場<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:NOW News 今日新聞
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 2 -->
		<div class="news"><a target="new" href="addhit.php?article_no=28">
				<img src="https://img.gq.com.tw/_rs/645/userfiles/sm/sm1024_images_A1/36291/2018060759953553.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/6/7 17:08<br><br>【2018世足賽】<br>今年世界盃奈及利亞隊的球衣最潮？<br>看2018世足賽球衣的精彩亮點<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:GQ Taiwan
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 3 -->
		<div class="news"><a target="new" href="addhit.php?article_no=29">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-07/656/20180607001873.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 09:40<br><br>【NBA】<br>杜蘭特致命三分<br>勇士逆轉勝騎士聽牌<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>	

	<div>
		<!-- 4 -->
		<div class="news"><a target="new" href="addhit.php?article_no=30">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-08/656/20180608001573.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 10:10<br><br>【NBA】<br>騎士球迷飆垃圾話<br>杜蘭特氣炸險動手<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 5 -->
		<div class="news"><a target="new" href="addhit.php?article_no=31">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-08/656/20180608000883.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 02:59<br><br>【世足】<br>倒數6天－迦太基之鷹突尼西亞<br>拚40年首勝<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 6 -->
		<div class="news"><a target="new" href="addhit.php?article_no=32">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-07/656/20180607004648.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 21:44<br><br>【網球】<br>法網混雙奪冠<br>詹詠然台灣第一人<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 7 -->
		<div class="news"><a target="new" href="addhit.php?article_no=33">
				<img src="http://img.chinatimes.com/newsphoto/2018-05-23/656/20180523003777.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 18:16<br><br>【世足花絮】<br>「黑珍珠」比利唱衰<br>巴西隊的好兆頭？<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 8 -->
		<div class="news"><a target="new" href="addhit.php?article_no=34">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-07/590/20180607002905.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 15:24<br><br>【羽球】<br>日本教練勒索球員40萬日幣<br>被告上法院<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 9 -->
		<div class="news"><a target="new" href="addhit.php?article_no=35">
				<img src="http://img.chinatimes.com/newsphoto/2018-04-29/656/20180429002389.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 15:00<br><br>【羽球】<br>大馬賽籤表出爐<br>球后小戴首戰地主選手<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 10 -->
		<div class="news"><a target="new" href="addhit.php?article_no=36">
				<img src="http://img.chinatimes.com/newsphoto/2018-06-07/656/20180607002215.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 12:30<br><br>【NBA】<br>科爾：世上沒人可跟杜蘭特一樣<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:中時電子報
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 11 -->
		<div class="news"><a target="new" href="addhit.php?article_no=37">
				<img src="http://img.ltn.com.tw/Upload/sports/page/800/2018/06/07/phpQJCsyy.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 21:38<br><br>【羽球】<br>世界最新排名出爐<br>戴資穎球后生涯累積78週<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
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