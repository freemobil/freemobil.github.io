<?php 

require 'config.php';

$apps_craft_input_name = $_POST['apps_craft_input_name'];
$apps_craft_input_email = $_POST['apps_craft_input_email'];
$apps_craft_input_message = $_POST['apps_craft_input_message'];

$e_content = "You have been contacted by ". $apps_craft_input_email .". Their additional message is as follows.<br><br>";
$e_content .= $apps_craft_input_message . "<br><br>";
$e_content .= "You can contact $apps_craft_input_email via email, $apps_craft_input_email";

$headers = "From: " . $apps_craft_input_email . PHP_EOL;
$headers .= "Reply-To: $apps_craft_input_email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;

$mail = mail(APPS_CRAFT_RECIPIENT_EMAIL_ADDRESS, APPS_CRAFT_MAIL_SUBJECT, $e_content, $headers);

if($mail){
	echo APPS_CRAFT_SUCCESS_MESSAGE;
}