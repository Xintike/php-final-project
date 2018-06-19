<!-- 前端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php

echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

$userName=$_POST[userName];
$userPwd=$_POST[userPwd];
$userMail=$_POST[userMail];


$link=@mysqli_connect(
			'localhost',
			'root',
			'benjamin0112',
			'final_project');

mysqli_select_db($link,'final_project');

$sql="SELECT * FROM userid WHERE name='$userName'";
$dbdata=mysqli_query($link,$sql);

while($row=mysqli_fetch_assoc($dbdata)){
	$usr=$row["name"];
	$psw=$row["password"];
	$email=$row["mail"]; 
}
	if(($userName=="") || ($userPwd=="") || ($userMail=="")){			//判斷輸入的值是否為空值
		echo "輸入有誤，請確實輸入數值";	
			header("refresh:3; url='creatid.php'");
	}else{
			if(mb_strlen($userName,"Big5") == strlen($userName) && mb_strlen($userPwd,"Big5") == strlen($userPwd)){		//斷輸入的值是否為中文

					if($userName==$usr){		//判斷輸入的帳號是否已存在
						echo "帳號已存在，請輸入別組帳號<br>";
							header("refresh:3; url='creatid.php'");
					}else{
						$sql2="INSERT INTO userid (name,password,mail) VALUES('$userName','$userPwd','$userMail')";		//新增資料
						$insert=mysqli_query($link, $sql2);
						echo "恭喜註冊成功，三秒後請重新登入<br>";
							header("refresh:3; url='loginin.php'");
					}		

			}else{
				echo "輸入有誤，請確依規定輸入數值";	
					header("refresh:3; url='creatid.php'");
				}
		}

mysqli_close($link);
?>
</div>