<?php
$name = $_post['name'];
$visitor_phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_form = 'islamtowhidul91@gmail.com';
$email_subject = "New Form Submission";
$email_body= "User Name:$name.\n;
               "User Phone: $visitor_phone.\n";
			     User Message: $message.\n;

$to = "islamtowhidul91@gmail";
$headers = "From: $email_from\r\n";
$headers .= "reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

 
?>