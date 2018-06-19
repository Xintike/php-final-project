<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>creatid.php</title>
</head>
<link rel="stylesheet" href="all.class.css">
<body>
	
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>

	<div id="login_box">
	<form action="addDB.php" method="post">
	<p align="right"><a href ='newsweb.php'>回首頁</a></p>
	<p align="left">
		請輸入帳號: <input type="txt" name="userName">
		<z style="color:red">*須為英文與數字</z></br>
		請輸入密碼: <input type="password" name="userPwd">
		<z style="color:red">*須為英文與數字</z></br>
		請輸入信箱: <input type="txt" name="userMail">
		<z style="color:red">*須為有效信箱</z></br>

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Reset</button><br>
	</p>
	</form>
</div>
</body>
</html>