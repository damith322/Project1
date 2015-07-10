<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello asa';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo $message;
?>