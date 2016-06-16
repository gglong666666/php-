<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>

<form action="" method="post">

寄信者:<input type="text" name="fromwho"><br/>
<br/>
寄件者email:<input type="text" name="fromaddress"><br/>
<br/>
寄信者密碼:<input type="password" name="pwd"><br/>
<br/>
收件者email:<input type="text" name="toaddress"><br/>
<br/>
信件標題:<input type="text" name="subject"><br/>
<br/>
信件內容:<input type="text" name="content"><br/>
<br/>

<input type="submit">
<input type="reset">
<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 1; 
   // Enable verbose debug output
	$fromwho=$_POST["fromwho"];
	$pwd=$_POST["pwd"];
	$fromaddress=$_POST["fromaddress"];
	$toaddress=$_POST["toaddress"];
	$subject=$_POST["subject"];
	$content=$_POST["content"];

$mail->isSMTP();        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;          // Enable SMTP authentication
$mail->Username = "$fromaddress";    // SMTP username
$mail->Password = "$pwd";             // SMTP password
$mail->SMTPSecure = 'ssl';       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;               // TCP port to connect to

$mail->setFrom("$fromaddress", 'Mailer');
$mail->addAddress("$fromaddress");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "$subject";
$mail->Body    = "$content";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

</form>
</html>













<!--<?php

	$fromwho=$_POST["fromwho"];
	$pwd=$_POST["pwd"];
	$fromaddress=$_POST["fromaddress"];
	$toaddress=$_POST["toaddress"];
	$subject=$_POST["subject"];
	$content=$_POST["content"];
	

require 'PHPMailer/PHPMailerAutoload.php';
$mail=new PHPMailer();
$mail->SMTPDebug = 1;
$mail->IsSMTP();

$mail->SMTPAuth=true;
$mail->host='ssl://smtp.gmail.com';
$mail->Port=465;
$mail->SMTPSecure = 'ssl'; 

$mail->Username='$fromwho';
$mail->Password='$pwd';
$mail->setFrom('ring9285cc@gmail.com', 'Mailer');
//$mail->From = $fromaddeess;
$mail->FromName ='$fromwho';
$mail->AddAddress('$ring9285cc@gmail.com');
$mail->IsHTML(true);

$mail->Subject='$subject';
$mail->Body='$content';
$mail->Send();
$mail->CharSet = "utf-8";
//$mail->AddAttachment('add.php');
if($mail->Send())
{
	echo "ok";
}else
{
	echo $mail->ErrorInfo;
}


?>-->


