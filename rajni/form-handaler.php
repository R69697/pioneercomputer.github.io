<?php
$name  =$_POST['name'];

$visitor_email = $_POST['email'];

$subject  = $_POST['subject'];

$message  = $_POST['message'];

$email_from ='pioneerteclu09@gmaio.com';

$email_subjact ='new form submission';

$email_body ="user name: $name.\n".
            "user email: $visitor_email.\n".
            " subject: $subject.\n".
            "user message:$message";

$to = 'rajanimauryalu08@gmail.com';

$headers = "form:"$email_from \r\n";


$headers .="reply-to: $visitor_email \r\n";


mail( $to,$email_subjact,$email_body,$headers);

header("Location: contact.html");

?>