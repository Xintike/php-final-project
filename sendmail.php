<!-- 後端 -->
<link rel="stylesheet" href="all.class.css">
<div id="login_box">
<?php
echo "<body background='https://i.imgur.com/FDfPNjM.jpg'></body>";

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug = 2;
$mail->Host = 'smtp.nuk.edu.tw';

$mail->Username = "a1053350";
$mail->Password = "v121570266";
$mail->IsHTML(true);

$from=$_POST["fromemail"];
$email=$_POST["sendemail"];
$subject=$_POST["subject"];
$message=$_POST["message"];

$mail->CharSet = "utf-8";
$mail->setFrom($from);
$mail->addAddress($email);
$mail->Subject = "=?utf-8?B?".base64_encode($subject)."?=";
$mail->Body = $message;


$filename=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
$mail->AddAttachment($tmpname, $filename);

$mail->send();

// header("location:cmd.php");
echo "</br>";
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
echo "寄送成功, 即將回到cmd.php</br>";
		header("refresh:3; url='cmd.php'");
echo "--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";

?>
</div>