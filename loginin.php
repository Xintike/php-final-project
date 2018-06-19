<!-- 前端 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>loginin.php</title>
</head>
<link rel="stylesheet" href="all.class.css">
<body background="https://i.imgur.com/FDfPNjM.jpg">
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
	
	<div id="login_box">
	<form action="userconfirm.php" method="post">
	<p align="right"><a href ='newsweb.php'>回首頁</a></p>
	
	<p align="left">
		請輸入帳號: <input type="txt" name="userName"><br><br>
		請輸入密碼: <input type="password" name="userPwd"><br><br>

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Reset</button><br>

	</p>

	</form>
	</div>
</body>
</html>