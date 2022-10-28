<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@unisite.com';

$email_subject = 'New form Submission';

$email_body = "User Name :  $name.\n".
            "User Email : $visitor_email.\n".
            "Subject : $subject.\n".
            "User message : $visitor_email.\n";


$to = '7002raptor@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>