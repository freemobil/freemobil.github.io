<?php

	//-----------------------------------------------------
	//-----------change address to xxx@yourdomainname ----------------------
	$address= "contact@naiknikunj.me";
	//-----------------------------------------------------
	//-----------------------------------------------------

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = "New Email";
	$message_content = $_POST["comments"];
	

	$headers = "From: $name <$email>\r\n";
	$headers .= "Reply-To: $subject <$email>\r\n";

	$message = "--$mime_boundary \r\n";
	
	$message .= "You have an email from your web site: \r\n";
	$message .= "Name: $name \r\n";
	$message .= "Email: $email \r\n";
	$message .= "phone: $phone \r\n";
	$message .= "Message: $message_content \r\n";
	$message .= "--$mime_boundary--\r\n";
	$mail_sent = mail($address, $subject, $message, $headers);
	if($mail_sent)
	{	
		echo "success";
	}
