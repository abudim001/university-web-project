
<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@largestuniversity.us';

$email_subject = 'New From Submisio';

$eamil_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";


$to = 'abudim003@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to,$email_subject,$eamil_body,$headers);
header("Location: contact.html");


?>