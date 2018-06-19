<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>newsweb_Social.php</title>
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
			<div class="news"><a target="new" href="addhit.php?article_no=1">
				<img src="https://cc.tvbs.com.tw/img/upload/2018/06/04/20180604153316-7798b23e.jpg" width="350" height="200"></br>
				<p align="center" class="news-intro"><br>2018/06/04 15:36 <br><br>漢光演習首日傳意外！<br>花蓮F-16訓練失聯<br><br> 
				<?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:TVBS新聞
		</p>
			</a></div>
			
	</div>

	<div>
		<!-- 2 -->
		<div class="news"><a target="new" href="addhit.php?article_no=11">
				<img src="http://img5.cna.com.tw/www/WebPhotos/800/20180605/42939765.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/05 16:36 <br><br>淡水河口距政經中樞近<br>專家：必須死守<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='1'>收藏</button>";
				}
			?>
			<br><br>
			source:中央通訊社

				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 3 -->
		<div class="news"><a target="new" href="addhit.php?article_no=17">
				<img src="https://image2.thenewslens.com/2016/11/lsbqrxlaiys0adoyqgdcyvw0j6yao3.jpg?auto=compress&fit=crop&h=648&q=85&updated_at=2016-11-29-18-05-49&w=1080" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07<br><br><br>北京嗆「翠玉白菜」只算三級品<br>其實台北故宮「鎮館之寶」<br>本來就不是它<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:關鍵評論網
				</p>
			</a></div>
			
	</div>	

	<div>
		<!-- 4 -->
		<div class="news"><a target="new" href="addhit.php?article_no=49">
				<img src="https://image2.thenewslens.com/2018/6/y99wjxfjtq4x477cb61p6cns4mavl2.jpg?auto=compress&fit=crop&h=648&q=85&updated_at=2018-06-07-14-12-35&w=1080" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08<br><br>「農產品價格崩盤」<br>同樣的老哏你看膩了嗎？<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:關鍵評論網
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 5 -->
		<div class="news"><a target="new" href="addhit.php?article_no=50">
				<img src="https://cdn2.ettoday.net/images/3335/d3335497.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 14:29<br><br>青年買房大不易<br>王令麟：產官攜手加速推動社會住宅<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:ETtoday 新聞雲
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 6 -->
		<div class="news"><a target="new" href="addhit.php?article_no=51">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180608/640_0f4cf08763ccdf19cd6456a3e9a239d2.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 00:00<br><br>「想法太過純粹直覺」<br>他揭社會大學6大思維被讚爆 <br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 7 -->
		<div class="news"><a target="new" href="addhit.php?article_no=52">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180608/640_aa485d08465952496fb4e98eea3244e3.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 10:39<br><br>慶祝40屆警察節<br>永和眾警挽袖號召捐熱血 <br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 8 -->
		<div class="news"><a target="new" href="addhit.php?article_no=53">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180608/640_6ed714f6d80bdb4df8b9062ef88a1333.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/08 10:11<br><br>派出所旁連環爆炸聲<br>BMW火燒屁股<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 9 -->
		<div class="news"><a target="new" href="addhit.php?article_no=54">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180607/640_8525e3a7baad90a8cf7efa44ed40d6ee.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 22:20<br><br>誆投資旅遊吸金近2億<br>澳洲完美生活遭起訴<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 10 -->
		<div class="news"><a target="new" href="addhit.php?article_no=55">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180607/640_b7d4ed454b7bbb829a0b95ddfd00ef9a.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 23:50<br><br>【三重警匪對峙】<br>嫌犯躲公寓2小時<br>已棄械投降<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
				</p>
			</a></div>
			
	</div>

	<div>
		<!-- 11 -->
		<div class="news"><a target="new" href="addhit.php?article_no=56">
				<img src="https://img.appledaily.com.tw/images/ReNews/20180607/640_2fa2ee04ea21c514c780c95d1b723604.jpg" width="350" height="200"></br><br><p align="center" class="news-intro"><br>2018/06/07 21:18<br><br>驚險！男子月台掉落鐵軌<br>遭列車撞傷倖存<br><br><?php
				if (isset($_SESSION["login"])) {
					echo "<button type='submit' class='btn btn-primary' name='article_num' value='4'>收藏</button>";
				}
			?>
			<br><br>
			source:蘋果即時
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