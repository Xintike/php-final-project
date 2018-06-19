<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>addarticle.php</title>
</head>
<link rel="stylesheet" href="all.class.css">

<body>
	
	<H1 class="newsweb_h1" size="10" align="center">NewsWeb</H1>
	<p align="right"><a href="cmd.php">返回</a></p></br>
	<form action="addarticle2.php" method="post">
	<p align="left">
		請輸入文章號碼: <input type="txt" name="ANum"><br>
		請輸入文章標題: <input type="txt" name="Atitle"><br>
		請輸入文章網址: <input type="txt" name="url"><br>
		請輸入文章type: <input type="txt" name="type"><br>

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Reset</button><br>
	</p>
	</form>
</body>
</html>