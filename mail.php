<?php
$to = 'navneetofficial25@gmail.com';

$subject = 'Registration Form Of mssblt School';

$message = 'tesing' ;

$headers = 'From: form@mssbltc.com' . "\r\n" .

'Reply-To: form@mssbltc.com' . "\r\n" .

'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers))
{
    echo "sent";
}
else
{
   echo "error";
}
?>