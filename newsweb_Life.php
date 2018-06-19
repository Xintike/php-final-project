<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newsweb_Life.php</title>
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
			<li><div class="news"><a target="new" href="addhit.php?article_no=2">
				<img src="https://cc.tvbs.com.tw/img/upload/2018/04/11/20180411183134-c8eebbf6.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/03 22:17 <br><br>郵局很涼？<br>賣郵票兼壽險、奧客多<br>她做3個月想離職<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:TVBS新聞
				</p>
			</a></div></li>
			
	</div>

	<div>
		<!-- 2 -->
			<li><div class="news"><a target="new" href="addhit.php?article_no=10">
				<img src="http://img5.cna.com.tw/www/WebPhotos/800/20180604/33216756.jpg" width="220" height="300"></br><br><p align="center" class="news-intro"><br>2018/06/06 10:29 <br><br>唐獎得主本庶佑<br>首爾演講癌症免疫療法新趨勢<br><br><?php
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
		<!-- 3 -->
			<div class="news"><a target="new" href="addhit.php?article_no=18">
				<img src="https://www.taiwanhot.net/wp-content/uploads/2018/06/5b1911ad49b02.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/08 00:28<br><br>腸病毒進入流行期<br>苗栗副縣長化身防疫大使<br>宣導勤洗手<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:台灣好新聞
				</p>
			</a></div>
			
	</div>	

	<div>
		<!-- 4 -->
			<div class="news"><a target="new" href="addhit.php?article_no=20">
				<img src="http://www.myhousing.com.tw/images/stories/News/1806/060706.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/08 00:02<br><br>中壢好便利！ <br>國1增設中豐交流道<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:HiNet 新聞
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 5 -->
			<div class="news"><a target="new" href="addhit.php?article_no=21">
				<img src="https://times.hinet.net/news/cimages/21/79/21791058/s_5636696e-77be-4c70-874f-a4c501f54288.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/07 20:59<br><br>男子疑跳軌遭自強號撞飛<br>影響台鐵7列次2780人<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:HiNet 新聞
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 6 -->
			<div class="news"><a target="new" href="addhit.php?article_no=22">
				<img src="https://www.beauty321.com/albums_photo/3825-20180606184844272.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/06 23:00<br><br>英國女孩9個月鏟33公斤<br>只因維持這個運動！<br>超美陽光笑容穿什麼都上相<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:beauty 美人圈
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 7 -->
			<div class="news"><a target="new" href="addhit.php?article_no=23">
				<img src="http://img.nextmag.com.tw//campaign/28/640x_8893018a5b551007917c40036ce6065f.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/07<br><br>「X分鐘看完XX電影」涉侵權<br>谷阿莫被起訴<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:壹週刊
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 8 -->
			<div class="news"><a target="new" href="addhit.php?article_no=24">
				<img src="http://img.nextmag.com.tw//campaign/28/640x_abfcd29a8f7905d9225876a45fea8956.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/03/15/ 14:40<br><br>職場女性的難題：<br>難升遷？家庭無法兼顧？<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:壹週刊
				</p>
			</a></div>
			
			
	</div>

	<div>
		<!-- 9 -->
			<div class="news"><a target="new" href="addhit.php?article_no=25">
				<img src="http://img.nextmag.com.tw//campaign/28/640x_e7ee970528d7d1a49c446dacd2bac827.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/07/ 14:47<br><br>380元牛排配「透明蘑菇醬」！<br>男客傻眼<br>網驚：難道是熟掉的嘉明<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:壹週刊
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 10 -->
			<div class="news"><a target="new" href="addhit.php?article_no=26">
				<img src="http://img.nextmag.com.tw//campaign/28/640x_a7dc1108f76d05eeeacbe79a3435ec06.jpg" width="350" height="200"></br><p align="center" class="news-intro"><br>2018/06/07/ 17:30<br><br>立蛋、包粽、划龍舟<br>福容端午應景活動伴您過節!<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:壹週刊
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