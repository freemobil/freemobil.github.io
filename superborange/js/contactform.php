<?php

// basic settings section
$sendto = 'webdesign@shegy.pl';
$subject = 'Superb www contact';
$iserrormessage = 'Your message has not been sent due to following errors:';
$thanks = "Thanks for your message! We'll contact you back as soon as it is possible.";

$emptyname =  'Please enter your name.';
$emptyemail = 'Invalid e-mail address.';
$emptymessage = 'Please enter your message.';

$alertname =  'Invalid name format. Please do not use special characters in your name.';
$alertemail = 'Invalid e-mail format, proper format is: yourname@domain.com';
$alertmessage = "Please do not use special characters in your message. Standard url's should work fine.";


$alert = '';
$iserror = 0;

// cleaning the post variables
function clean_var($variable) {$variable = strip_tags(stripslashes(trim(rtrim($variable))));return $variable;}

// validation of filled form
if ( empty($_REQUEST['contact-name']) || $_REQUEST['contact-name'] == "") {
	$iserror = 1;
	$alert .= "<li><p>" . $emptyname . "</p></li>";
} elseif ( preg_match( "/[][{}()*+?.\\^$|]/i", $_REQUEST['contact-name'] ) ) {
	$iserror = 1;
	$alert .= "<li><p>" . $alertname . "</p></li>";
}


if ( empty($_REQUEST['contact-email']) || $_REQUEST['contact-email'] == "Enter your e-mail address") {
	$iserror = 1;
	$alert .= "<li><p>" . $emptyemail . "</p></li>";
} elseif ( !preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $_REQUEST['contact-email']) ) {
	$iserror = 1;
	$alert .= "<li><p>" . $alertemail . "</p></li>";
}

if ( empty($_REQUEST['contact-message']) || $_REQUEST['contact-message'] == "Your message goes here...") {
	$iserror = 1;
	$alert .= "<li><p>" . $emptymessage . "</p></li>";
} elseif ( preg_match( "/[][{}()*+?\\^$|]/i", $_REQUEST['contact-message'] ) ) {
	$iserror = 1;
	$alert .= "<li><p>" . $alertmessage . "</p></li>";
}

// if there was error, print alert message
if ( $iserror==1 ) {

echo "<script>$(\"#message\").stop().slideDown(\"normal\").fadeIn(\"normal\").delay(8000).slideUp(\"normal\"); </script>";
echo "<div class=\"alert alert-block alert-danger\">";
//echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-cross\"></i></button>";
echo "<div><h4>" . $iserrormessage . "</h4></div><br />";
echo "<ul class=\"unordered\">";
echo $alert;
echo "</ul>";
echo "</div>";

} else {
// if everything went fine, send e-mail
$plsubject = "=?utf-8?B?".base64_encode($subject)."?=";
$msg = "Name: " . clean_var($_REQUEST['contact-name']) . "\n";
$msg .= "E-mail: " . clean_var($_REQUEST['contact-email']) . "\n";


$msg .= "Message: \n\n" . clean_var($_REQUEST['contact-message']);
$header = "Content-type: text/plain; charset=utf-8\r\n"; 
$header .= 'From:'. clean_var($_REQUEST['contact-email']);


mail($sendto, $plsubject, $msg, $header);

echo "<script>$(\"#message\").stop().slideDown(\"normal\").fadeIn(\"normal\").delay(8000).slideUp(\"normal\");</script>";
echo "<div class=\"alert alert-block alert-success\">";
//echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-cross\"></i></button>";
echo "<strong>" . $thanks . "</strong>";
echo "</div>";
echo "<script>$('#contact-form input[type=text], #contact-form textarea').val('');</script>";



die();
}
?>