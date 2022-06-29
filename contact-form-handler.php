<?php
$name =  $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'https://robertobenedit.github.io/Valentina-Walke-v3/';

$email_subject = "llego una nueva solicitud";

$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n";


$to = "robertobenedit@outlook.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>
