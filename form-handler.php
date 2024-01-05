<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'rhu.edu@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                    "User Message: $message .\n";

$to = 'mcruz2027@clc.pshs.edu.ph';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?> /* i could get the visitor's feedback if I pay for Hostinger */