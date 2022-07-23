<?php
	
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No email entered';}
if ((isset($_POST['msg'])) && (strlen(trim($_POST['msg'])) > 0)) {
	$message = stripslashes(strip_tags($_POST['msg']));
} else {$message = 'No message entered';}
ob_start();

    $headers = 'From: ' . $email . "\r\n" .
	     	   'Reply-To: ' . $email . "\r\n" .
		       'X-Mailer: PHP/' . phpversion();
   
	$myEmail = 'enabled88@yahoo.com';
	$todayis = date("l, F j, Y, g:i a") ;
	$subject = "Message From Site";	
	$message = " Message Text: $message \r \n Name: $name  \r \n Reply to: $email";
	
	mail($myEmail, $subject, $message, $headers);
?>
