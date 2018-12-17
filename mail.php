<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$message = $_POST['message'];
$from = $_POST['From: HennabyNyx']
$formcontent= " From: $name \n Phone: $phone \n Email: $email \n Henna Service: $service \n Message: $message";
$recipient = "hennabynyx@gmail.com";
$subject = "Henna Appointment Request";
$mailheader = "From: $email \r\n";

if ($_POST['submit']) {				 
    if (mail ($recipient, $subject, $formcontent, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} 
	else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	}

?>